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
       
            $product = Product::with('intolerances')->find($id);
            if($product){
                $intolerancesIds = $product->intolerances->pluck('id')->toArray();
                return response()->json(['intolerances'=>$intolerancesIds], 200);
            }else{
            return response()->json(['error'=>'producto no encontrado'], 404);
            }
          
        
    }
}
