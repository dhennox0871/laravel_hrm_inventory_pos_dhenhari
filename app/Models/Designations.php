<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designations extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'created_by',
    ];

    //belong to company
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
