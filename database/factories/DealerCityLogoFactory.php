<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DealerCityLogo>
 */
class DealerCityLogoFactory extends Factory
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
            'city_id' => \App\Models\City::inRandomOrder()->first()->id,
            'logo_id' => \App\Models\Logo::inRandomOrder()->first()->id,
        ];
    }
}
