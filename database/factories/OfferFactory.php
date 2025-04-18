<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'title' => $this->faker->title,
        'description' => $this->faker->sentence,
        'offer_type_id'  => \App\Models\OfferType::inRandomOrder()->first()->id,
        'occasion_id' => \App\Models\Occasion::inRandomOrder()->first()->id,
        'product_id' => \App\Models\Product::inRandomOrder()->first()->id,
        'discount' => $this->faker->randomElement([5, 10, 15, 20, 25, 30, 40, 50]),
        'new_price' => $this->faker->numberBetween(100, 1000),
        'start_date' => $this->faker->date(),
        'end_date' => $this->faker->date('Y-m-d', '+1 year'),
        'active' => true
        ];
    }
}
