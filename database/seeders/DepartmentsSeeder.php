<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat department manual
        \App\Models\Departments::create([
            'company_id' => 1,
            'created_by' => 1,
            'name' => 'HRD',
            'description' => 'HRD Department',
        ]);

        \App\Models\Departments::create([
            'company_id' => 1,
            'created_by' => 1,
            'name' => 'IT',
            'description' => 'IT Department',
        ]);

        \App\Models\Departments::create([
            'company_id' => 1,
            'created_by' => 1,
            'name' => 'Finance',
            'description' => 'Finance Department',
        ]);

    }
}
