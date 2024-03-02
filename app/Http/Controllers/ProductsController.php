<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();
            return response()->json(['status' => 200, 'data' => $products]);
        } catch (Exception $e) {
            return response()->json(['status' => 204, 'message' => $e->getMessage()], 204);
        }
    }

    public function show($id)
    {
       
            $product = Product::find($id);
            if(!$product){
            return response()->json(['error' => 'Product not found'], 404);
            }
        
            return response()->json($product, 200);
        
    }
}
