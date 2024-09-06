<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a  manual holiday
        \App\Models\Holiday::create([
            'name' => 'New Year',
            'date' => '2025-01-01',
            'is_weekend' => 0,
            'year' => 2025,
            'month' => 1,
            'created_by' => 1,
            'company_id' => 1
        ]);

    }
}
