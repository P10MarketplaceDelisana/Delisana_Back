<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return response()->json(['carts' => $carts], 200);
    }

    public function show(Cart $id)
    {
        $carts = Cart::find($id);
        return response()->json(['carts' => $carts], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'sales_bill_id' => 'nullable|exists:sales_bills,id',
            'product_id' => 'required|exists:products,id',
            'product_price' => 'required|numeric',
            'number' => 'required|numeric'
        ]);

        $cart = Cart::create($request->all());

        return response()->json(['cart' => $cart], 201);
    }

    public function update(Request $request, Cart $cart)
    {
        $request->validate([
            'user_id' => 'exists:users,id',
            'sales_bill_id' => 'nullable|exists:sales_bills,id',
            'product_id' => 'exists:products,id',
            'product_price' => 'numeric',
            'number' => 'numeric'
        ]);

        $cart->update($request->all());

        return response()->json(['cart' => $cart], 200);
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return response()->json(null, 204);
} 
