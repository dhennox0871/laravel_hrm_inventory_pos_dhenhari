<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'user_id',
        'company_id',
        'clock_in_time',
        'clock_out_time',
        'date',
        'total_hours' ,
        'is_holiday' ,
        'is_leave' ,
        'leave_id' ,
        'holiday_id' ,
        'leave_type_id' ,
        'is_late',
        'is_half_day',
        'is_paid' ,
        'status' ,
        'reason' ,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function leave()
    {
        return $this->belongsTo(Leave::class);
    }

    public function holiday()
    {
        return $this->belongsTo(Holiday::class);
    }

    public function leaveType()
    {
        return $this->belongsTo(LeaveType::class);
    }

}
