<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //shift manual
        \App\Models\Shift::create([
            'name' => 'Shift 1',
            'company_id' => 1,
            'clock_in_time' => '07:00:00',
            'clock_out_time' => '15:00:00',
        ]);

        \App\Models\Shift::create([
            'name' => 'Shift 2',
            'company_id' => 1,
            'clock_in_time' => '15:00:00',
            'clock_out_time' => '23:00:00',
        ]);

        \App\Models\Shift::create([
            'name' => 'Shift 3',
            'company_id' => 1,
            'clock_in_time' => '23:00:00',
            'clock_out_time' => '07:00:00',
        ]);
    }
}
