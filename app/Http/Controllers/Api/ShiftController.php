<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    //index
    public function index()
    {
        $shifts = Shift::all();
        return response([
            'data' => $shifts,
            'message' => 'Shifts List'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'clock_in_time' => 'required',
            'clock_out_time' => 'required',
            'company_id' => 'required',
        ]);

        $user = $request->user();

        $shift = new Shift();
        $shift->name = $request->name;
        $shift->clock_in_time = $request->clock_in_time;
        $shift->clock_out_time = $request->clock_out_time;
        $shift->company_id = 1;
        $shift->created_by = $user->id;
        $shift->late_mark_after = $request->late_mark_after;
        $shift->early_clock_in_time = $request->early_clock_in_time;
        $shift->allow_clock_out_time = $request->allow_clock_out_time;
        $shift->save();
        return response([
            'data' => $shift,
            'message' => 'Shift created successfully'
        ], 200);


    }

    //show
    public function show($id)
    {
        $shift = Shift::find($id);
        if (is_null($shift)) {
            return response([
                'message' => 'Shift not found'
            ], 404);
        }
        return response([
            'data' => $shift,
            'message' => 'Shift retrieved successfully'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'clock_in_time' => 'required',
            'clock_out_time' => 'required',
            'company_id' => 'required',
        ]);
        $user = $request->user();
        $shift = Shift::find($id);
        if (is_null($shift)) {
            return response([
                'message' => 'Shift not found'
            ], 404);
        }
        $shift->name = $request->name;
        $shift->clock_in_time = $request->clock_in_time;
        $shift->clock_out_time = $request->clock_out_time;
        $shift->company_id = 1;
        $shift->created_by = $user->id;
        $shift->late_mark_after = $request->late_mark_after;
        $shift->early_clock_in_time = $request->early_clock_in_time;
        $shift->allow_clock_out_time = $request->allow_clock_out_time;
        $shift->save();
        return response([
            'data' => $shift,
            'message' => 'Shift updated successfully'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $shift = Shift::find($id);
        if (is_null($shift)) {
            return response([
                'message' => 'Shift not found'
            ], 404);
        }
        $shift->delete();
        return response([
            'message' => 'Shift deleted successfully'
        ], 200);
    }


}
