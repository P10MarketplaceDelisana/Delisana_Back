<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IntoleranceController;
use App\Http\Controllers\UserController;
use App\Models\Category;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CategoryController::class)->group(function() {
   Route::get('/categories',  'index' );
   Route::get('/categories/{id}',  'show' );
     
});

Route::controller(IntoleranceController::class)->group(function() {
    Route::get('/intolerances',  'index' );
    Route::get('/intolerances/{id}',  'show' );
});  

Route::controller(UserController::class)->group(function() {
    Route::get('/users',  'index' );
    Route::get('/users/{id}',  'show' );
});  