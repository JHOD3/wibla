<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\User;
use Flash;
use Response;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
class UserController extends AppBaseController
{
    /** @var $userRepository UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        Gate::authorize('haveaccess', 'users.index');
        $users = $this->userRepository->all();

        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        Gate::authorize('haveaccess', 'users.create');
        $list_roles = Roles::ListRoles();

        return view('users.create', compact('list_roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request, User $User)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $User = $this->userRepository->create($input);
        if ($request->get('rol')) {
            $User->roles()->sync($request->get('rol'));
        }
        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        Gate::authorize('haveaccess', 'users.show');
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess', 'users.edit');
        $user = $this->userRepository->find($id);
        $list_roles = Roles::ListRoles();
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit', compact('list_roles'))->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request )
    {
        $User = $this->userRepository->find($id);

        if ($request->get('rol')) {
            $User->roles()->sync($request->get('rol'));
        }

        if (empty($User)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $input =  $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        $User = $this->userRepository->update($input, $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        Gate::authorize('haveaccess', 'users.destroy');
        $User = $this->userRepository->find($id);

        DB::table('roles_user')->where('user_id','=', $id)->delete();
        if (empty($User)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
