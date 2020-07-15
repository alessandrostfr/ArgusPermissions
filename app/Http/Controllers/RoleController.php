<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::orderBy('id', 'Desc')->paginate(2);
        return view('role.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::get();
        return view('role.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        return $request;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    
}
