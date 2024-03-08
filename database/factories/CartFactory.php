<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cart;
use App\Models\SaleBill;
use App\Models\User;
use App\Models\Product;


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
            'sales_bill_id' => SaleBill::factory(),
            'product_id' => Product::factory(),
            'product_price' => $this->faker->randomFloat(2, 10, 100),
            'number' => $this->faker->numberBetween(1, 10),
        ];
    }
}
