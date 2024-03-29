<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Intolerance;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'image_url' => $this->faker->url(),
            'public_id' => $this->faker->uuid,
            'description' => $this->faker->text(250),
            'category_id' => Category::all()->random()->id,
            'price' => $this->faker->randomFloat(2, 1, 50),

        ];
    }
}
