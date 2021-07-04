<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Database\Connectors\PostgresConnector;
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
//serve login page

Route::get('/login', function () {
    return view('login');
});
//login in 
Route::post('/login', [UserController::class, 'login']);
//dashboard
Route::get('/', [ProductController::class, 'index']);
//product detail page
Route::get('/detail/{id}',[ProductController::class, 'detail']);
//search functionality
Route::get('/search', [ProductController::class, 'search']);
//add user_id and Product_id to cart table
Route::post('/add_to_cart', [ProductController::class, 'addToCart']);


Route::get('/logout', [ProductController::class, 'logout']);
//cart list
Route::get('/cartlist',[ProductController::class, 'cartList']);
//remove from cart
Route::get('/removecart/{$id}', [ProductController::class, 'removeCart']);
//ordernow
Route::get('/ordernow', [ProductController::class, 'orderNow']);
//orderplace
Route::post('/orderplace', [ProductController::class, 'orderPlace']);
//myorders
Route::get('/myorders', [ProductController::class, 'myOrders']);
//register form
Route::get('/register', [ProductController::class, 'registerForm']);
//register
Route::post('/register',[ProductController::class, 'register']);
















