<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dealer;
use App\Models\SubCategory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
          
        return [
            'slug' => $this->faker->unique()->words(2, true),
        'name' => $this->faker->unique()->words(2, true),
        'description' => $this->faker->sentence,
        'active' => true,
        'rating' => $this->faker->randomFloat(1, 1, 5),
        'rating_count' => $this->faker->numberBetween(0, 500),
        'price' => $this->faker->randomFloat(2, 10, 2000),
        'stock_quantity' => $this->faker->numberBetween(0, 1000),
        'dealer_id' => Dealer::inRandomOrder()->first()->id ?? Dealer::factory(),
        'sub_category_id' => SubCategory::inRandomOrder()->first()->id ?? SubCategory::factory(),
        'featured' => $this->faker->boolean(20),
        'brand' => $this->faker->randomElement(['سامسونج', 'أبل', 'إل جي', 'سوني', 'هواوي', 'نيكاي', 'توشيبا', 'شارب']),
        'views' => $this->faker->numberBetween(0, 10000),
        'weight' => $this->faker->randomFloat(2, 0.1, 50),
        'status' => true,
        'dimensions' => json_encode([
            'length' => $this->faker->randomFloat(2, 5, 200),
            'width' => $this->faker->randomFloat(2, 5, 200),
            'height' => $this->faker->randomFloat(2, 5, 200),
        ]),
        'available_since' => $this->faker->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
