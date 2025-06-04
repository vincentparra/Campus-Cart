<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
Route::get('/homepage', function () {
    return view('home');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/products', [ProductsController::class, 'getAllProducts'])->name('product');
