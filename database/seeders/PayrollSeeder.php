<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //create
        \App\Models\Payroll::create([
            'user_id' => 1,
            'company_id' => 1,
            'month' => 7,
            'year' => 2024,
            'basic_salary' => 6000000,
            'net_salary' => 7000000,
            'total_days' => 30,
            'working_days' => 25,
            'present_days' => 19,
            'total_office_time' => 150,
            'total_worked_time' => 140,
            'half_day' => 2,
            'late_days' => 3,
            'paid_leaves' => 1,
            'unpaid_leaves' => 2,
            'holiday_count' => 8,
            'payment_date' => '2024-07-01',
            'status' => 'generated',

        ]);

    }
}
