<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserRegisterRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        if(!empty($request->password)){
            $user->password = bcrypt($request->password);
        }

        $user->update();

        $user->syncRoles($request->roles);

        return redirect(route('users.show', ['id' => $user->id]));
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect(route('users.index'));
    }

    public function create()
    {
        $user = new User();
        $userRoles = [];
        $roles = \Spatie\Permission\Models\Role::all()->pluck('name','name');

        return view('admin.users.create', compact('user', 'roles', 'userRoles'));
    }

    public function store(UserCreateRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        $user->syncRoles($request->roles);

        return redirect(route('users.show', ['id' => $user->id]));
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $userRoles = $user->getRoleNames();
        $roles = \Spatie\Permission\Models\Role::all()->pluck('name','name');

        return view('admin.users.edit', compact('user', 'roles', 'userRoles'));
    }

}
