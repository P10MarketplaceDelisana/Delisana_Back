<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Intolerance;
use App\Models\Product;

class IntoleranceProductController extends Controller
{
    public function index(){
        $products = Product::with('intolerances.intolerance')->get();
        return response()->json($products);
    }

    public function show($id){
        $product = Product::with('intolerances.intolerance')->find($id);
        return response()->json($product);
    }
}
