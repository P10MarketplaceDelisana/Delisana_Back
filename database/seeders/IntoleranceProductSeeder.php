<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Intolerance;

class IntoleranceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = Product::all();
        $intolerances = Intolerance::all();

        foreach ($products as $product) {
            // Obtener un número aleatorio de intolerancias para este producto
            $randomIntolerances = $intolerances->random(rand(1, min(3, $intolerances->count())));

            // Adjuntar las intolerancias al producto si no están ya asociadas
            foreach ($randomIntolerances as $intolerance) {
                if (!$product->intolerances()->where('intolerance_id', $intolerance->id)->exists()) {
                    $product->intolerances()->attach($intolerance->id);
                }
            }
        }
    }
}