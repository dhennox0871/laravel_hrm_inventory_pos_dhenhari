<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departments;

class DepartmentController extends Controller
{
    //index
    public function index()
    {
        $departments = Departments::all();
        return response([
            'data' => $departments,
            'message' => 'Departments List'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user=$request->user();

        $departments = new Departments();
        $departments->name = $request->name;
        $departments->company_id = 1;
        $departments->created_by = $user->id;
        $departments->description = $request->description;
        $departments->save();
        return response([
            'data' => $departments,
            'message' => 'Departments Created'
        ], 200);
    }

    //show
    public function show($id)
    {
        $departments = Departments::find($id);
        //jika tidak di temukan
        if (is_null($departments)) {
            return response([
                'message' => 'Departments not found'
            ], 404);
        }
        return response([
            'data' => $departments
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $departments = Departments::find($id);
        //jika tidak di temukan
        if (is_null($departments)) {
            return response([
                'message' => 'Departments not found'
            ], 404);
        }
        $departments->name = $request->name;
        $departments->description = $request->description;
        $departments->save();
        return response([
            'data' => $departments,
            'message' => 'Departments Updated'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $departments = Departments::find($id);
        if (is_null($departments)) {
            return response([
                'message' => 'Departments not found'
            ], 404);
        }

        $departments->delete();
        return response([
            'data' => $departments,
            'message' => 'Departments Deleted'
        ], 200);
    }
}
