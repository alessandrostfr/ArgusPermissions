<?php

namespace App\Http\Controllers;

use App\ArgusPermission\Models\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show users with their assigned roles.
     */
    public function index()
    {
        $this->authorize('haveaccess', 'user.index');

        $users = User::with('roles')->orderBy('id', 'Desc')->paginate(2);

        return view('user.index', compact('users'));
    }

    /**
     * Show a user profile if the authenticated user can view it.
     */
    public function show(User $user)
    {
        $this->authorize('view', [$user, ['user.show', 'userown.show']]);

        $roles = Role::orderBy('id')->get();

        return view('user.show', compact('user', 'roles'));
    }

    /**
     * Show the edit form for a user.
     */
    public function edit(User $user)
    {
        $this->authorize('update', [$user, ['user.edit', 'userown.edit']]);

        $roles = Role::orderBy('id')->get();

        return view('user.edit', compact('roles', 'user'));
    }

    /**
     * Update a user.
     *
     * Security note:
     * Users with only self-edit permission can update their profile data, but
     * role synchronization is only executed when the authenticated user has the
     * global user.edit permission.
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', [$user, ['user.edit', 'userown.edit']]);

        $request->validate([
            'name' => 'required|max:50|unique:users,name,'.$user->id,
            'email' => 'required|max:50|unique:users,email,'.$user->id,
        ]);

        $user->update($request->only(['name', 'email']));

        if ($request->user()->havePermission('user.edit') && $request->has('roles')) {
            $user->roles()->sync($request->get('roles'));
        }

        return redirect()->route('user.index')->with('status_success', 'User updated successfully');
    }

    /**
     * Remove a user.
     */
    public function destroy(User $user)
    {
        $this->authorize('haveaccess', 'user.destroy');

        $user->delete();

        return redirect()->route('user.index')->with('status_success', 'User successfully removed');
    }
}
