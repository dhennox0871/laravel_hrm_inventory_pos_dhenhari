<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'dhenhari User',
            'email' => 'dhenhari@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // call seeders for company
        $this->call([
            CompanySeeder::class,
            RoleSeeder::class,
            PermisionsSeeder::class,
            PermisionRolesSeeder::class,
            //departments
            DepartmentsSeeder::class,
            //designation seeder
            DesignationsSeeder::class,
            //shift seeder
            ShiftSeeder::class,
            //basic salary seeder
            BasicSalarySeeder::class,
            //role user
            RoleUserSeeder::class,
            //holiday seeder
            HolidaySeeder::class,
            //leave type seeder
            LeaveTypeSeeder::class,
            //leave seeder
            LeaveSeeder::class,
            //attendance seeder
            AttendanceSeeder::class,
            //payroll seeder
            PayrollSeeder::class

        ]);


    }
}
