<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;

class RoleController extends Controller
{


    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::orderBy('id')->paginate(2);
        return view('role.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::get();
        return view('role.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        //validacion
        $request->validate([
            'name' => 'required|max:50|unique:roles,name',
            'slug' => 'required|max:50|unique:roles,slug',
            'full-access' => 'required|in:yes,no'
            
        ]);
    
        //Create role
        $role =Role::create($request->all());
    
        if($request->get('permission')){
            $role->permissions()->sync($request->get('permission'));
        }

        return redirect()->route('role.index')->with('status_success', 'Role saved successfully');
    
        
    }


    public function show($id)
    {
        //
    }


    public function edit(Role $role)
    {

        $permission_role=[];
        foreach($role->permissions as $permission){
            $permission_role[]=$permission->id;
        }
        
        
        $permissions = Permission::get();
        return view('role.edit', compact('permissions','role','permission_role'));

    }


    public function update(Request $request, Role $role)
    {
        //validacion
        $request->validate([
            'name' => 'required|max:50|unique:roles,name,'.$role->id,
            'slug' => 'required|max:50|unique:roles,slug,'.$role->id,
            'full-access' => 'required|in:yes,no'
            
        ]);
    
        //update role
        $role->update($request->all());
    
        if($request->get('permission')){
            $role->permissions()->sync($request->get('permission'));
        }

        return redirect()->route('role.index')->with('status_success', 'Role updated successfully');
    
        
    }


    public function destroy($id)
    {
        //
    }
    
}
