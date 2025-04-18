<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductColorSize>
 */
class ProductColorSizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::inRandomOrder()->first()->id,
        'color_id' => \App\Models\Color::inRandomOrder()->first()->id,
        'size_id' => \App\Models\Size::inRandomOrder()->first()->id, 
        ];
    }
}
