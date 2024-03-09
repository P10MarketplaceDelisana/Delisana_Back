<?php

namespace Database\Factories;
use App\Models\Intolerance;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IntoleranceProduct>
 */
class IntoleranceProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'intolerance_id' => Intolerance::factory(),
            'product_id' => Product::factory(),
        ];
    }
}
