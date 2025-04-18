<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dealer>
 */
class DealerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name, // اسم عشوائي
            'email' => $this->faker->unique()->safeEmail, // بريد إلكتروني فريد
            'password' => bcrypt('password'), // كلمة مرور مشفرة (أو $this->faker->password)
            'slug' => $this->faker->slug, // نص مناسب لـ URL
            'description' => $this->faker->paragraph, // فقرة نصية
            'color' => $this->faker->hexColor, // لون عشوائي بصيغة HEX
            'cover_image' => $this->faker->randomElement(['img/1.jpg', 'img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/6.jpg', 'img/7.jpg', 'img/8.jpg', 'img/10.jpg']),
            'phone' => $this->faker->phoneNumber, // رقم هاتف
            'address' => $this->faker->address, // عنوان كامل
            'active' => true,
            'verified_at' => now(), // تاريخ التحقق (تاريخ حال)
        ];
    }
}

