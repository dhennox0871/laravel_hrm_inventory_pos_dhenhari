<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisionRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat permision roles manual
        \App\Models\PermisionRoles::create([
            'permision_id' => 1,
            'role_id' => 1,
        ]);

        \App\Models\PermisionRoles::create([
            'permision_id' => 2,
            'role_id' => 1,
        ]);

        \App\Models\PermisionRoles::create([
            'permision_id' => 3,
            'role_id' => 1,
        ]);

        \App\Models\PermisionRoles::create([
            'permision_id' => 4,
            'role_id' => 1,
        ]);

        \App\Models\PermisionRoles::create([
            'permision_id' => 5,
            'role_id' => 1,
        ]);

        \App\Models\PermisionRoles::create([
            'permision_id' => 6,
            'role_id' => 1,
        ]);
    }
}
