<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_name' => fake()->company(),
            'shop_number' => fake()->numberBetween(1, 500),
            'shop_address' => fake()->address(),
            'shop_phone' => fake()->phoneNumber(),
            'shop_email' => fake()->safeEmail(),
        ];
    }
}
