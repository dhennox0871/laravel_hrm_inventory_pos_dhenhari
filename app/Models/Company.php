<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'website',
        'logo',
        'status',
        'total_users',
        'clock_in_time',
        'clock_out_time',
        'early_clock_in_time',
        'allow_clock_out_time',
        'self_clocking',
    ];
}
