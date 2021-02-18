<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use App\Repositories\RolesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Permissions;
use App\Models\Roles;
use Flash;
use Response;
use Illuminate\Support\Facades\Gate;

class RolesController extends AppBaseController
{
    /** @var  RolesRepository */
    private $rolesRepository;

    public function __construct(RolesRepository $rolesRepo)
    {
        $this->rolesRepository = $rolesRepo;
    }

    /**
     * Display a listing of the Roles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // Gate::authorize('haveaccess', 'role.index');
        $roles = $this->rolesRepository->all();

        return view('roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new Roles.
     *
     * @return Response
     */
    public function create()
    {
        Gate::authorize('haveaccess', 'role.create');
        $list_permissions = Permissions::ListPermissions();
        return view('roles.create', compact('list_permissions'));
    }

    /**
     * Store a newly created Roles in storage.
     *
     * @param CreateRolesRequest $request
     *
     * @return Response
     */
    public function store(CreateRolesRequest $request, Roles $roles)
    {
        $input = $request->all();
        $roles = $this->rolesRepository->create($input);

        if ($request->get('permissions')) {
            $roles->permissions()->sync($request->get('permissions'));
        }

        Flash::success('Roles saved successfully.');

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified Roles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess', 'role.show');
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        return view('roles.show')->with('roles', $roles);
    }

    /**
     * Show the form for editing the specified Roles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id, Roles $roles)
    {
        Gate::authorize('haveaccess', 'role.edit');
        $roles_result = $this->rolesRepository->find($id);

        $permissions_roles=[];
        foreach ($roles_result->permissions as $permission) {
            $permissions_roles [] = $permission->id;
        }

        $list_permissions = Permissions::ListPermissions();

        if (empty($roles_result)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        return view('roles.edit', compact('permissions_roles','list_permissions'))->with('roles', $roles_result);
    }

    /**
     * Update the specified Roles in storage.
     *
     * @param int $id
     * @param UpdateRolesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRolesRequest $request)
    {
        $roles = $this->rolesRepository->find($id);
        if ($request->get('permissions')) {
            $roles->permissions()->sync($request->get('permissions'));
        }
        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        $roles = $this->rolesRepository->update($request->all(), $id);

        Flash::success('Roles actualizado satisfactoriamente.');

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified Roles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess', 'role.destroy');
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Roles not found');

            return redirect(route('roles.index'));
        }

        $this->rolesRepository->delete($id);

        Flash::success('Roles deleted successfully.');

        return redirect(route('roles.index'));
    }
}
