<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MainCategory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
 
    return [
        'name' => $this->faker->unique()->words(2, true),
        'description' => $this->faker->sentence, // وصف من فقرتين
        'main_category_id' => MainCategory::inRandomOrder()->first()->id ?? MainCategory::factory(),
        'slug' => $this->faker->unique()->words(2, true),
        'image' => $this->faker->randomElement(['img/1.jpg', 'img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/6.jpg', 'img/7.jpg', 'img/8.jpg', 'img/10.jpg']),
        'active' => true
        ];
    }
}
