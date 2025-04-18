<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\MainCategory::factory(10)->create();
        \App\Models\SubCategory::factory(10)->create();
        \App\Models\Dealer::factory(10)->create();
        \App\Models\City::factory(10)->create();
        \App\Models\Color::factory(10)->create();
        \App\Models\Logo::factory(10)->create();
        \App\Models\Size::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\Image::factory(100)->create();
       /* \App\Models\Video::factory(10)->create();*/
        \App\Models\MainDealer::factory(10)->create();
        \App\Models\Occasion::factory(10)->create();
        \App\Models\OfferType::factory(10)->create();
        \App\Models\Offer::factory(10)->create();
        \App\Models\FavoriteProduct::factory(10)->create();
        \App\Models\ProductColorSize::factory(10)->create();
        \App\Models\DealerCityLogo::factory(10)->create();
    }
}
