<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create role user
        \App\Models\RoleUser::create([
            'user_id' => 1,
            'role_id' => 1
        ]);

    }
}
