<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsalesController;
use App\Http\Controllers\UsersController;
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/homepage', [ProductsalesController::class, 'showHomepageProducts']);

Route::get('/products', [ProductsController::class, 'getAllProducts'])->name('product');


Route::get('/login', [UsersController::class, 'showLogin'])->name('login');
Route::post('/login', [UsersController::class, 'login']);

Route::get('/register', [UsersController::class, 'showRegister'])->name('register');
Route::post('/register', [UsersController::class, 'register']);

Route::post('/logout', [UsersController::class, 'logout'])->name('logout');
