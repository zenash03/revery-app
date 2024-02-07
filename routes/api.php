<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['prefix'=> 'public'], function () {
//     Route::resource('products', ProductController::class)->except(['store', 'update', 'delete']);
//     Route::resource('categories', CategoryController::class)->except(['store', 'update', 'delete']);
// });

// Route::group(['prefix'=> 'public'], function () {
//     Route::resource('products', ProductController::class);
//     Route::resource('categories', CategoryController::class);
// });


// Route::middleware('auth:api')->group(function () {
//     Route::resource('categories', CategoryController::class);
//     Route::resource('products', ProductController::class);
// });

// Route::middleware('auth:santrum')->prefix('public')->group(function () {
//     Route::get('', CategoryController::class)->name('');
// });

// Route::group(['prefix'=> 'public'], function ($request) {
//     // Route::resource('products', ProductController::class)->except(['store', 'update', 'delete']);
//     Route::resource('categories', CategoryController::class);
// });

Route::post("login", [AuthController::class,"signin"]);
Route::post("register", [AuthController::class,"signup"]);
Route::post("logout", [AuthController::class,"logout"]);

Route::middleware("auth:sanctum")->group(function () {
    Route::resource("categories", CategoryController::class);
    Route::resource("products", ProductController::class);
    // Route::get("/products/{slug}", ProductController::class, 'ProductController@showBySlug');
});
