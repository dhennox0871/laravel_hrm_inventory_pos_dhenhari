<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => 1,
            'user_id' => 1,
            'date' =>$this->faker->date(),
            'clock_in_time' => $this->faker->datetime(),
            'clock_out_time' => $this->faker->datetime(),
            'total_hours' => $this->faker->numberBetween(1, 8),
            'is_holiday' => 0,
            'is_leave' => 0,
            'leave_id' => null,
            'holiday_id' => null,
            'is_late' => 0,
            'is_half_day' => 0,
            'is_paid' => 1,
            'status' => 'present',
            'reason' => $this->faker->sentence(),
        ];
    }
}
