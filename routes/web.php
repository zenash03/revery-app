<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', [PageController::class,'menuPage'])->name('menu');
Route::get('/home', [PageController::class,'homePage'])->name('landing');
Route::get('/products', [ProductPageController::class,'productsPage'])->name('products');
Route::get('/products/{slug}', [PageController::class, 'productDetailPage'])->name('productDetail');

Route::get('/login', [LoginController::class, 'index'])->name('login');
