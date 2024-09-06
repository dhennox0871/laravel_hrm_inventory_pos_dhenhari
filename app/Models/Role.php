<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'company_id',
        'name',
        'description',
        'display_name',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    //permisions
    public function permisions()
    {
        return $this->belongsToMany(Permisions::class, 'permision_roles');
    }


}
