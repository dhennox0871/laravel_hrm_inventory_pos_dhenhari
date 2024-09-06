<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisionRoles extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'permision_id',
        'role_id',
    ];

    public function permision()
    {
        return $this->belongsTo(Permisions::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
