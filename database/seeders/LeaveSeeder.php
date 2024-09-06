<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a leave manual
        \App\Models\Leave::create([
            'user_id' => 1,
            'leave_type_id' => 1,
            'start_date' => '2024-09-11',
            'end_date' => '2024-09-13',
            'total_days' => 3,
            'is_half_day' => 0,
            'is_paid' => 1,
            'reason' => 'sick leave',
            'status' => 'approved',
            'company_id' => 1
        ]);
    }
}
