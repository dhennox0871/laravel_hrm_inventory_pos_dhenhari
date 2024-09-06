<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Designations;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    //index
    public function index()
    {
        $designations = \App\Models\Designations::all();
        return response([
            'data' => $designations,
            'message' => 'Designations List'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user = $request->user();


        $designation = new Designations;
        $designation->name = $request->name;
        $designation->company_id = 1;
        $designation->created_by = $user->id;
        $designation->description = $request->description;
        $designation->save();
        return response([
            'data' => $designation,
            'message' => 'Designation Created'
        ], 200);
    }

    //show
    public function show($id)
    {
        $designation = Designations::find($id);
        //jika tidak di temukan
        if (is_null($designation)) {
            return response([
                'message' => 'Designation not found'
            ], 404);
        }
        return response([
            'data' => $designation,
            'message' => 'Designation Details'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $designation = Designations::find($id);
        //jika tidak di temukan
        if (is_null($designation)) {
            return response([
                'message' => 'Designation not found'
            ], 404);
        }
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->save();
        return response([
            'data' => $designation,
            'message' => 'Designation Updated'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $designation = Designations::find($id);
        if (is_null($designation)) {
            return response([
                'message' => 'Designation not found'
            ], 404);
        }
        $designation->delete();
        return response([
            'data' => $designation,
            'message' => 'Designation Deleted'
        ], 200);
    }
}
