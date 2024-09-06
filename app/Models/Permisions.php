<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisions extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'name',
        'display_name',
        'description',
        'module_name',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permision_roles');
    }
}
