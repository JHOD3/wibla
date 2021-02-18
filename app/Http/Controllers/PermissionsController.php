<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePermissionsRequest;
use App\Http\Requests\UpdatePermissionsRequest;
use App\Repositories\PermissionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Gate;
class PermissionsController extends AppBaseController
{
    /** @var  PermissionsRepository */
    private $permissionsRepository;

    public function __construct(PermissionsRepository $permissionsRepo)
    {
        $this->permissionsRepository = $permissionsRepo;
    }

    /**
     * Display a listing of the Permissions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        Gate::authorize('haveaccess', 'investments.index');
        $permissions = $this->permissionsRepository->all();

        return view('permissions.index')
            ->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new Permissions.
     *
     * @return Response
     */
    public function create()
    {
        Gate::authorize('haveaccess', 'investments.create');
        return view('permissions.create');
    }

    /**
     * Store a newly created Permissions in storage.
     *
     * @param CreatePermissionsRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissionsRequest $request)
    {
        $input = $request->all();

        $permissions = $this->permissionsRepository->create($input);

        Flash::success('Permissions saved successfully.');

        return redirect(route('permissions.index'));
    }

    /**
     * Display the specified Permissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess', 'investments.show');
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        return view('permissions.show')->with('permissions', $permissions);
    }

    /**
     * Show the form for editing the specified Permissions.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess', 'permissions.edit');
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        return view('permissions.edit')->with('permissions', $permissions);
    }

    /**
     * Update the specified Permissions in storage.
     *
     * @param int $id
     * @param UpdatePermissionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissionsRequest $request)
    {
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        $permissions = $this->permissionsRepository->update($request->all(), $id);

        Flash::success('Permissions updated successfully.');

        return redirect(route('permissions.index'));
    }

    /**
     * Remove the specified Permissions from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess', 'permissions.destroy');
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permissions not found');

            return redirect(route('permissions.index'));
        }

        $this->permissionsRepository->delete($id);

        Flash::success('Permissions deleted successfully.');

        return redirect(route('permissions.index'));
    }
}
