<?php

namespace Database\Factories;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'variety' => fake()->word(),
            'notes' => fake()->sentence(),
            'date_planted' => fake()->date(),
            'estimated_count' => fake()->numberBetween(1, 100),
            'batch_name' => fake()->word() . ' batch',
        ];
    }
}

