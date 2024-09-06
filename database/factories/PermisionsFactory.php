<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permisions>
 */
class PermisionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //buat factory permision
            'name' => $this->faker->word(),
            'display_name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'module_name' => $this->faker->word()
        ];
    }
}
