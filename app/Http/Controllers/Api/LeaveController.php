<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveController extends Controller
{
    //index
    public function index()
    {
        $leave = new Leave;
        $leaves = $leave->all();
        return response([
            'data' => $leaves,
            'message' => 'Leaves List'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'leave_type_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'total_days' => 'required',
            'is_half_day' => 'required',
            'is_paid' => 'required',
            'reason' => 'required',
        ]);
        $leave = new Leave;
        $leave->user_id = $request->user_id;
        $leave->leave_type_id = $request->leave_type_id;
        $leave->start_date = $request->start_date;
        $leave->end_date = $request->end_date;
        $leave->total_days = $request->total_days;
        $leave->is_half_day = $request->is_half_day;
        $leave->is_paid = $request->is_paid;
        $leave->reason = $request->reason;
        $leave->status = 'pending';
        $leave->save();
        return response([
            'data' => $leave,
            'message' => 'Leave created successfully'
        ], 200);
    }
    //show
    public function show($id){
        $leave = Leave::find($id);
        //jika tidak ketemu
        if (!$leave) {
            return response([
                'message' => 'Leave not found'
            ], 404);
        }
        return response([
            'data' => $leave,
            'message' => 'Leave Details'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'leave_type_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',
        ]);
        $leave = Leave::find($id);
        //jika tidak ketemu
        if (!$leave) {
            return response([
                'message' => 'Leave not found'
            ], 404);
        }
        $leave->user_id = $request->user_id;
        $leave->leave_type_id = $request->leave_type_id;
        $leave->start_date = $request->start_date;
        $leave->end_date = $request->end_date;
        $leave->total_days = $request->total_days;
        $leave->is_half_day = $request->is_half_day;
        $leave->is_paid = $request->is_paid;
        $leave->reason = $request->reason;
        $leave->status = $request->status;
        $leave->save();
        return response([
            'data' => $leave,
            'message' => 'Leave updated successfully'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $leave = Leave::find($id);
        //jika tidak ketemu
        if (!$leave) {
            return response([
                'message' => 'Leave not found'
            ], 404);
        }
        $leave->delete();
        return response([
            'message' => 'Leave deleted successfully'
        ], 200);
    }
}
