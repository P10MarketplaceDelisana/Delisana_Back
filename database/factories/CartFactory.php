<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cart;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Cart::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'sales_bill_id' => \App\Models\SaleBill::factory(),
            'product_id' => \App\Models\Product::factory(),
            'product_price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
