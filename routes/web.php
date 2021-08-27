<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('layouts/layout-admin');
});
Route::get('/login', function () {
    return view('login/login');
});
Route::post('login', [UserController::class, 'authenticate']);

Route::resource('products', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('customer', CustomerController::class);
Route::resource('order', OrderController::class);
Route::resource('banner', BannerController::class);
Route::resource('profile', ProfileController::class);
Route::get('logout', [UserController::class, 'logout']);
