<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SaleBill;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleBill>
 */
class SaleBillFactory extends Factory
{
    protected $model = SaleBill::class;

    public function definition()
    {
        return [
            'user_id' =>  User::all()->random()->id,
            'total_price' => $this->faker->randomFloat(2, 10, 100),
            'bill_status' => $this->faker->boolean,
        ];
    }
}