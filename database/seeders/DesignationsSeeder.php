<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seed manual
        \App\Models\Designations::create([
            'name' => 'Manager',
            'description' => 'Manager',
            'company_id' => 1,
            'created_by' => 1
        ]);

        \App\Models\Designations::create([
            'name' => 'Employee',
            'description' => 'Employee',
            'company_id' => 1,
            'created_by' => 1
        ]);

        //seed trainnee manual
        \App\Models\Designations::create([
            'name' => 'Trainee',
            'description' => 'Trainee',
            'company_id' => 1,
            'created_by' => 1
        ]);



    }
}
