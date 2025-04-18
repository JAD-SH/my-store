<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'city',
        'active'
    ];


    public function dealers()
    {
        return $this->hasMany(Dealer::class);
    }


}


/*
php artisan make:factory VideoFactory --model=Video
php artisan make:factory CityFactory --model=City
php artisan make:factory ColorFactory --model=Color
php artisan make:factory DealerFactory --model=Dealer
php artisan make:factory DealerCityLogoFactory --model=DealerCityLogo
php artisan make:factory FavoriteProductFactory --model=FavoriteProduct
php artisan make:factory ImageFactory --model=Image
php artisan make:factory LogoFactory --model=Logo
php artisan make:factory MainCategoryFactory --model=MainCategory
php artisan make:factory MainDealerFactory --model=MainDealer
php artisan make:factory OccasionFactory --model=Occasion
php artisan make:factory OfferFactory --model=Offer
php artisan make:factory OfferTypeFactory --model=OfferType
php artisan make:factory ProductFactory --model=Product
php artisan make:factory ProductColorSizeFactory --model=ProductColorSize
php artisan make:factory SiteFactory --model=Site
php artisan make:factory sizeFactory --model=size
php artisan make:factory SubCategory --model=SubCategory
*/