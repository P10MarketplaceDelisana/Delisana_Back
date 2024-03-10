<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Intolerance;
use Illuminate\Support\Facades\DB;


class IntoleranceProductSeeder extends Seeder
{
    
    public function run()
    {
        $products = Product::all();
        $intolerances = Intolerance::all();
        $now = Carbon::now();

        foreach ($products as $product) {
            // Obtener un número aleatorio de intolerancias para este producto
            $randomIntolerances = $intolerances->random(rand(1, min(3, $intolerances->count())));

            // Adjuntar las intolerancias al producto si no están ya asociadas
            foreach ($randomIntolerances as $intolerance) {
                if (!$product->intolerances()->where('intolerance_id', $intolerance->id)->exists()) {
                    $product->intolerances()->attach($intolerance->id, ['created_at' => $now, 'updated_at' => $now]);
                }
            }
        }
    }
}