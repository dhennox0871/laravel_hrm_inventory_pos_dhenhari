<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    //index
    public function index()
    {
        $holidays = \App\Models\Holiday::all();
        return response([
            'data' => $holidays,
            'message' => 'Holidays List'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'year' => 'required',
            'month' => 'required',
            'is_weekend' => 'required',
        ]);

        $holiday = new Holiday();
        $holiday->name = $request->name;
        $holiday->date = $request->date;
        $holiday->year = $request->year;
        $holiday->month = $request->month;
        $holiday->is_weekend = $request->is_weekend;
        $holiday->company_id = 1;
        $holiday->created_by = $request->user()->id;
        $holiday->save();
        return response([
            'data' => $holiday,
            'message' => 'Holiday created successfully'
        ], 200);
    }

    //show
    public function show($id)
    {
        $holiday = \App\Models\Holiday::find($id);
        return response([
            'data' => $holiday,
            'message' => 'Holiday Details'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'year' => 'required',
            'month' => 'required',
            'is_weekend' => 'required',
        ]);

        $holiday = \App\Models\Holiday::find($id);
        $holiday->name = $request->name;
        $holiday->date = $request->date;
        $holiday->year = $request->year;
        $holiday->month = $request->month;
        $holiday->is_weekend = $request->is_weekend;
        $holiday->company_id = 1;
        $holiday->created_by = $request->user()->id;
        $holiday->save();
        return response([
            'data' => $holiday,
            'message' => 'Holiday updated successfully'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $holiday = \App\Models\Holiday::find($id);
        $holiday->delete();
        return response([
            'message' => 'Holiday deleted successfully'
        ], 200);
    }
}
