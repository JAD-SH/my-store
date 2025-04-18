<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\size>
 */
class SizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
    return [
        'size' => $this->faker->randomElement([
            'S', 'M', 'L', 'XL', 
            'XXL', 'XXXL', 
            '36', '38', '40', '42', '44', 
            'One Size',
            '100ml', '250ml', '500ml', '1L',
            '10x10cm', '20x30cm', '50x70cm'
        ]),
        
        'name' => $this->faker->name,
        
        'slug' => $this->faker->name,
    ];
    }
}
