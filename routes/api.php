<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//api login
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

//api logout
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

//edit company
Route::post('/company/edit', [App\Http\Controllers\Api\CompanyController::class, 'editCompany'])->middleware('auth:sanctum');

Route::apiResource('/roles', App\Http\Controllers\Api\RoleController::class)->middleware('auth:sanctum');
//departments
Route::apiResource('/departments', App\Http\Controllers\Api\DepartmentController::class)->middleware('auth:sanctum');
//designation
Route::apiResource('/designations', App\Http\Controllers\Api\DesignationController::class)->middleware('auth:sanctum');
//shift
Route::apiResource('/shifts', App\Http\Controllers\Api\ShiftController::class)->middleware('auth:sanctum');
//basic salary
Route::apiResource('/basic-salaries', App\Http\Controllers\Api\BasicSalaryController::class)->middleware('auth:sanctum');
//holidays
Route::apiResource('/holidays', App\Http\Controllers\Api\HolidayController::class)->middleware('auth:sanctum');
//leave types
Route::apiResource('/leave-types', App\Http\Controllers\Api\LeaveTypeController::class)->middleware('auth:sanctum');
//leave requests
Route::apiResource('/leave-requests', App\Http\Controllers\Api\LeaveController::class)->middleware('auth:sanctum');
//attendance
Route::apiResource('/attendances', App\Http\Controllers\Api\AttendanceController::class)->middleware('auth:sanctum');
//payroll
Route::apiResource('/payrolls', App\Http\Controllers\Api\PayrollController::class)->middleware('auth:sanctum');
