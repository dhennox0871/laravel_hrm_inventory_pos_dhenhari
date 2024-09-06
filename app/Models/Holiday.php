<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'name',
        'date',
        'company_id',
        'created_by',
        'year',
        'month',
        'is_weekend'
    ];
}
