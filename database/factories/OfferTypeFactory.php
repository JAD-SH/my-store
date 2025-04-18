<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfferType>
 */
class OfferTypeFactory extends Factory
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
        
        'type' => $this->faker->randomElement([
            'discount_all' => 'خصم على جميع المنتجات',
            'buy2_get1' => 'اشتري 2 واحصل على الثالثة مجاناً',
            'exclusive_bundle' => 'اشتري عدة منتجات بسعر حصري'
        ]),
        
        'description' => function (array $attributes) {
            $descriptions = [
                'discount_all' => 'خصم شامل يطبق على كافة منتجات المتجر حتى نهاية العرض',
                'buy2_get1' => 'عرض خاص: عند شراء أي منتجين من المجموعة تحصل على الثالث مجاناً',
                'exclusive_bundle' => 'مجموعة منتجات حصرية بأسعار ترويجية لفترة محدودة'
            ];
            
            return $descriptions[$attributes['type']] ?? $this->faker->paragraph(2);
        },
        
        'active' => true
    ];
    }
}
