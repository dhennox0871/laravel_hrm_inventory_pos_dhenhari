<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //index
    public function index()
    {
        $attendance= new Attendance;
        $attendance = $attendance->all();
        return response([
            'data' => $attendance,
            'message' => 'Attendance List'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'date' => 'required',
            'is_holiday' => 'nullable',
            'is_leave' => 'nullable',
            'leave_id' => 'nullable',
            'leave_type_id' => 'nullable',
            'holiday_id' => 'nullable',
            'clock_in_time' => 'required',
            'clock_out_time' => 'nullable',
            'total_hours' => 'nullable',
            'is_late' => 'nullable',
            'is_half_day' => 'nullable',
            'is_paid' => 'nullable',
            'status' => 'nullable',
            'reason' => 'nullable',
        ]);
        $attendance = new Attendance;
        $attendance->company_id=1;
        $attendance->user_id = $request->user_id;
        $attendance->date = $request->date;
        $attendance->is_holiday = $request->is_holiday;
        $attendance->is_leave = $request->is_leave;
        $attendance->leave_id = $request->leave_id;
        $attendance->leave_type_id = $request->leave_type_id;
        $attendance->holiday_id = $request->holiday_id;
        $attendance->clock_in_time = $request->clock_in_time;
        $attendance->clock_out_time = $request->clock_out_time;
        $attendance->total_hours = $request->total_hours;
        $attendance->is_late = $request->is_late;
        $attendance->is_half_day = $request->is_half_day;
        $attendance->is_paid = $request->is_paid;
        $attendance->reason = $request->reason;
        $attendance->status = $request->status;
        $attendance->save();
        return response([
            'data' => $attendance,
            'message' => 'Attendance Added'
        ], 200);
    }

    //show
    public function show($id)
    {
        $attendance = new Attendance;
        $attendance = $attendance->find($id);
        //jika tidak ketemu
        if (!$attendance) {
            return response([
                'message' => 'Attendance not found'
            ], 404);
        }
        return response([
            'data' => $attendance,
            'message' => 'Attendance Detail'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'date' => 'required',
            'is_holiday' => 'nullable',
            'is_leave' => 'nullable',
            'leave_id' => 'nullable',
            'leave_type_id' => 'nullable',
            'holiday_id' => 'nullable',
            'clock_in_time' => 'required',
            'clock_out_time' => 'nullable',
            'total_hours' => 'nullable',
            'is_late' => 'nullable',
            'is_half_day' => 'nullable',
            'is_paid' => 'nullable',
            'status' => 'nullable',
            'reason' => 'nullable',
        ]);
        $attendance = Attendance::find($id);
        //jika tidak ketemu
        if (!$attendance) {
            return response([
                'message' => 'Attendance not found'
            ], 404);
        }
        $attendance->company_id=1;
        $attendance->user_id = $request->user_id;
        $attendance->date = $request->date;
        $attendance->is_holiday = $request->is_holiday;
        $attendance->is_leave = $request->is_leave;
        $attendance->leave_id = $request->leave_id;
        $attendance->leave_type_id = $request->leave_type_id;
        $attendance->holiday_id = $request->holiday_id;
        $attendance->clock_in_time = $request->clock_in_time;
        $attendance->clock_out_time = $request->clock_out_time;
        $attendance->total_hours = $request->total_hours;
        $attendance->is_late = $request->is_late;
        $attendance->is_half_day = $request->is_half_day;
        $attendance->is_paid = $request->is_paid;
        $attendance->reason = $request->reason;
        $attendance->status = $request->status;
        $attendance->save();
        return response([
            'data' => $attendance,
            'message' => 'Attendance updated successfully'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $attendance = Attendance::find($id);
        //jika tidak ketemu
        if (!$attendance) {
            return response([
                'message' => 'Attendance not found'
            ], 404);
        }
        $attendance->delete();
        return response([
            'message' => 'Attendance deleted successfully'
        ], 200);
    }
}