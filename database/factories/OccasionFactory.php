<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Occasion>
 */
class OccasionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->unique()->name,
            'occasion' => $this->faker->unique()->name,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date('Y-m-d', '+1 year'),
            'active' => true,
            'description' => $this->faker->sentence,
        ];
    }
}
