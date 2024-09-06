<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a role
        \App\Models\Role::create([
            'company_id' => 1,
            'name' => 'Admin',
            'display_name' => 'Admin',
            'description' => 'Admin',
        ]);
        \App\Models\Role::create([
            'company_id' => 1,
            'name' => 'Staff',
            'display_name' => 'Staff',
            'description' => 'Staff',
        ]);
    }
}
