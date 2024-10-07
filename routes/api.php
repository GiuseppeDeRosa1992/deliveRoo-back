<?php

use App\Http\Controllers\Api\BraintreeController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\RestaurantApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', [CategoryApiController::class, 'getCategoryAll']);
Route::get('/restaurants', [RestaurantApiController::class, 'getRestaurantsAll']);
Route::get('/restaurant/{restaurant:slug}', [RestaurantApiController::class, 'getSingleRestaurant']);
Route::get('/braintree/token', [BraintreeController::class, 'token']);
Route::post('/braintree/checkout', [BraintreeController::class, 'checkout']);

Route::post('/restaurants-by-category', [RestaurantApiController::class, 'getRestaurantsByCategory']);
