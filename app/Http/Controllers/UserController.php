<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\User;

class UserController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        //Gate::authorize('haveaccess','user.index');
        $this->authorize('haveaccess','user.index');
        $users = User::with('roles')->orderBy('id', 'Desc')->paginate(2);
        return view('user.index', compact('users'));
        
    }


    public function show(User $user)
    {
        $this->authorize('view', [$user, ['user.show','userown.show']]);
        $roles = Role::orderBy('id')->get();
        return view('user.show', compact('user','roles'));
    }


    public function edit(user $user)
    {
        //$this->authorize('haveaccess','role.edit');
        $this->authorize('update', [$user, ['user.edit','userown.edit']]);
        
        $roles = Role::orderBy('id')->get();
        return view('user.edit', compact('roles','user'));
    }


    public function update(Request $request, User $user)
    {
        //$this->authorize('haveaccess','role.edit');
        

        //validation
        $request->validate([
            'name' => 'required|max:50|unique:users,name,'.$user->id,
            'email' => 'required|max:50|unique:users,email,'.$user->id
            
        ]);
    
        //update user
        $user->update($request->all());
    
        //sync user with his roles
        $user->roles()->sync($request->get('roles'));
        

        return redirect()->route('user.index')->with('status_success', 'User updated successfully');
    }


    public function destroy(User $user)
    {
        //$this->authorize('haveaccess','user.destroy');
        $this->authorize('haveaccess','user.destroy');
        
        $user->delete();
        return redirect()->route('user.index')->with('status_success', 'User successfully removed');
    }


}
