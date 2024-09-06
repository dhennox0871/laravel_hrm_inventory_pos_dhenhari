<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a company
        \App\Models\Company::create([
            'name' => 'PT. Density',
            'email' => 'admin@density.com',
            'address' => 'Jl. Kebon Jeruk No. 10',
            'phone' => '081234567890',
            'status' => 'active',
            'total_users' => 10,
            'website' => 'https://www.density.com',
            'logo' => 'https://www.density.com/assets/images/logo.png',
            'clock_in_time' => '09:00:00',
            'clock_out_time' => '18:00:00',
            'early_clock_in_time' => '07:00:00',
            'allow_clock_out_time' => '20:00:00',
            'self_clocking' => 1,

        ]);
    }
}
