<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //index all roles
    public function index()
    {
        $roles = \App\Models\Role::all();
        return response([
            'data' => $roles,
            'message' => 'Roles List'
        ], 200);
    }

    //store
    public function store(Request $request){

        $request->validate([
            'company_id' => 'required',
            'name' => 'required',
        ]);

        $role=new Role();
        $role->company_id=1;
        $role->name=$request->name;
        $role->display_name=$request->display_name;
        $role->description=$request->description;
        $role->save();

        return response([
            'data' => $role,
            'message' => 'Role created successfully'
        ], 200);
    }

    //show
    public function show($id)
    {
        $role = Role::find($id);
        //jika tidak di temukan
        if (is_null($role)) {
            return response([
                'message' => 'Role not found'
            ], 404);
        }

        return response([
            'data' => $role,
            'message' => 'Role details'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'permisionIds'=> 'required|array',
        ]);

        $role = Role::find($id);
        //jika tidak di temukan
        if (is_null($role)) {
            return response([
                'message' => 'Role not found'
            ], 404);
        }

        $role->name=$request->name;
        $role->display_name=$request->display_name;
        $role->description=$request->description;
        $role->save();

        $role->permissions()->sync($request->permisionIds);

        return response([
            'data' => $role,
            'message' => 'Role updated successfully'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return response([
            'data' => $role,
            'message' => 'Role deleted successfully'
        ], 200);
    }

}
