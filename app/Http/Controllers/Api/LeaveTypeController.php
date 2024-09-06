<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    //

    public function index()
    {
        $leaveType = new LeaveType;
        $leaveTypes = $leaveType->all();
        return response([
            'data' => $leaveTypes,
            'message' => 'Leave Types List'
        ], 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'is_paid' => 'required',
            'total_leave' => 'required',
            'max_leave' => 'nullable',
        ]);

        $leaveType = new LeaveType();
        $leaveType->name = $request->name;
        $leaveType->is_paid = $request->is_paid;
        $leaveType->total_leave = $request->total_leave;
        $leaveType->max_leave = $request->max_leave;
        $leaveType->company_id = 1;
        $leaveType->created_by = $request->user()->id;
        $leaveType->save();
        return response([
            'data' => $leaveType,
            'message' => 'Leave Type created successfully'
        ], 200);
    }


    public function show($id)
    {
        $leaveType = LeaveType::find($id);
        //jika tidak di temukan
        if (!$leaveType) {
            return response([
                'message' => 'Leave Type not found'
            ], 404);
        }
        return response([
            'data' => $leaveType,
            'message' => 'Leave Type Details'
        ], 200);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'is_paid' => 'required',
            'total_leave' => 'required',
            'max_leave' => 'nullable',
        ]);
        $leaveType = LeaveType::find($id);
        //jika tidak di temukan
        if (!$leaveType) {
            return response([
                'message' => 'Leave Type not found'
            ], 404);
        }
        $leaveType->name = $request->name;
        $leaveType->is_paid = $request->is_paid;
        $leaveType->total_leave = $request->total_leave;
        $leaveType->max_leave = $request->max_leave;
        $leaveType->company_id = 1;
        $leaveType->created_by = $request->user()->id;
        $leaveType->save();
        return response([
            'data' => $leaveType,
            'message' => 'Leave Type updated successfully'
        ], 200);
    }


    public function destroy($id)
    {
        $leaveType = LeaveType::find($id);
        //jika tidak di temukan
        if (!$leaveType) {
            return response([
                'message' => 'Leave Type not found'
            ], 404);
        }
        $leaveType->delete();
        return response([
            'message' => 'Leave Type deleted successfully'
        ], 200);
    }
}
