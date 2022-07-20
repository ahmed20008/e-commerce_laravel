<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
//loginroute
Route::post("/login", [UserController::class, 'login']);
//home page route
Route::get("/", [ProductController::class, 'index']);
// detail page route
Route::get("detail/{id}", [ProductController::class, 'detail']);
// search page route
Route::get("search", [ProductController::class, 'search']);
//add to cart page route
Route::post("add_to_cart", [ProductController::class, 'addToCart']);
// cart list route
Route::get("cartlist", [ProductController::class, 'cartlist']);
//remove  from cart route
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);
//order from cart route
Route::get("ordernow", [ProductController::class, 'orderNow']);
//order place route
Route::post("orderplace", [ProductController::class, 'orderPlace']);
//order from cart route
Route::get("myorders", [ProductController::class, 'myOrders']);