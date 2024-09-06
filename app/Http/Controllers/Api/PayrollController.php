<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payroll;

class PayrollController extends Controller
{
    //index
    public function index()
    {
        $payroll = new Payroll;
        $payrolls = $payroll->all();
        return response([
            'data' => $payrolls,
            'message' => 'Payroll List'
        ], 200);
    }

    //show
    public function show($id)
    {
        $payroll = Payroll::find($id);
        if (is_null($payroll)) {
            return response([
                'message' => 'Payroll not found'
            ], 404);
        }
        return response([
            'data' => $payroll,
            'message' => 'Payroll retrieved successfully'
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'company_id' => 'required',
        ]);

        $payroll=new Payroll();
        $payroll->name=$request->name;
        $payroll->company_id=1;
        $payroll->save();
        return response([
            'data' => $payroll,
            'message' => 'Payroll created successfully'
        ], 200);
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $payroll = Payroll::find($id);
        //jika tidak di temukan
        if (is_null($payroll)) {
            return response([
                'message' => 'Payroll not found'
            ], 404);
        }
        $payroll->name=$request->name;
        $payroll->save();
        return response([
            'data' => $payroll,
            'message' => 'Payroll updated successfully'
        ], 200);
    }

    //destroy
    public function destroy($id)
    {
        $payroll = Payroll::find($id);
        if (is_null($payroll)) {
            return response([
                'message' => 'Payroll not found'
            ], 404);
        }
        $payroll->delete();
        return response([
            'message' => 'Payroll deleted successfully'
        ], 200);
    }
}
