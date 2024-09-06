<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicSalary;

class BasicSalaryController extends Controller
{
    //index
    public function index()
    {
        $basicSalary = BasicSalary::all();
        return response([
            'data' => $basicSalary,
            'message' => 'Basic Salary List'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'basic_salary' => 'required',
            'user_id' => 'required',
        ]);


        $basicSalary = new BasicSalary();
        $basicSalary->user_id = $request->user_id;
        $basicSalary->basic_salary = $request->basic_salary;
        $basicSalary->company_id = 1;
        $basicSalary->save();
        return response([
            'data' => $basicSalary,
            'message' => 'Basic Salary created successfully'
        ], 200);
    }

    //show
    public function show($id)
    {
        $basicSalary = BasicSalary::find($id);
        //jika tidak di temukan
        if (is_null($basicSalary)) {
            return response([
                'message' => 'Basic Salary not found'
            ], 404);
        }
        return response([
            'data' => $basicSalary,
            'message' => 'Basic Salary retrieved successfully'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'basic_salary' => 'required',
            'user_id' => 'required',
        ]);


        $basicSalary = BasicSalary::find($id);
        if (is_null($basicSalary)) {
            return response([
                'message' => 'Basic Salary not found'
            ], 404);
        }
        $basicSalary->basic_salary = $request->basic_salary;
        $basicSalary->user_id = $request->user_id;
        $basicSalary->save();
        return response([
            'data' => $basicSalary,
            'message' => 'Basic Salary updated successfully'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $basicSalary = BasicSalary::find($id);
        if (is_null($basicSalary)) {
            return response([
                'message' => 'Basic Salary not found'
            ], 404);
        }
        $basicSalary->delete();
        return response([
            'message' => 'Basic Salary deleted successfully'
        ], 200);
    }
}
