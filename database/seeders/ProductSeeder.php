<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Intolerance;
use App\Models\IntoleranceProduct;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Primero, crea algunos productos utilizando la factoría de Product
        $products = Product::factory(10)->create();
/*
        // Luego, para cada producto, adjunta algunas intolerancias aleatorias
        $products->each(function ($product) {
            $intolerances = Intolerance::all()->random(rand(2, 3));
foreach ($intolerances as $intolerance) {
    // Comprueba si la relación ya existe antes de intentar insertarla
    if (!$product->intolerances()->where('intolerance_id', $intolerance->id)->exists()) {
        $product->intolerances()->attach($intolerance->id);
    } 
}
});  */
}
}

