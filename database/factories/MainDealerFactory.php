<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MainDealer>
 */
class MainDealerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dealer_id' => \App\Models\Dealer::inRandomOrder()->first()->id,
        'product_id' => \App\Models\Product::inRandomOrder()->first()->id,
        'image' => $this->faker->randomElement(['img/1.jpg', 'img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/6.jpg', 'img/7.jpg', 'img/8.jpg', 'img/10.jpg']),
        'active' => true
        ];
    }
}
