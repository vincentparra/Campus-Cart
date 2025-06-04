<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsalesController;

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/homepage', [ProductsalesController::class, 'showHomepageProducts']);

Route::get('/products', [ProductsController::class, 'getAllProducts'])->name('product');
