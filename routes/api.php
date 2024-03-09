<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IntoleranceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SaleBillController;
use App\Http\Controllers\ProductsController;
use App\Models\Cart;
use App\Models\Product;
use App\Models\SaleBill;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(CategoryController::class)->group(function() {
   Route::get('/categories',  'index' );
   Route::get('/categories/{id}',  'show' );
   Route::post('/categories',  'store' );
     
});

Route::controller(IntoleranceController::class)->group(function() {
    Route::get('/intolerances',  'index' );
    Route::get('/intolerances/{id}',  'show' );
});  

Route::controller(UserController::class)->group(function() {
    Route::get('/users',  'index' );
    Route::get('/users/{id}',  'show' );
});  

Route::controller(SaleBillController::class)->group(function() {
    Route::get('/salesBills',  'index' );
    Route::get('/salesBills/{id}',  'show' );
    
});  

Route::controller(ProductsController::class)->group(function() {
    Route::get('/products',  'index' );
    Route::get('/products/{id}',  'show' );
    Route::post('/products',  'store' );
    //Route::post('/products',  'upload_img' );
    Route::put('/products/{id}',  'update' );
    Route::delete('/products/{id}',  'destroy' );
});  

Route::controller(CartController::class)->group(function(){
    Route::get('/carts', 'index');
    Route::get('/carts/{id}', 'show');
});
