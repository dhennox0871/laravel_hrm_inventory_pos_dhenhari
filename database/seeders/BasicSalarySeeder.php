<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasicSalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a basic salary
        \App\Models\BasicSalary::create([
            'user_id' => 1,
            'basic_salary' => 3000000.00,
            'company_id' => 1
        ]);
    }
}
