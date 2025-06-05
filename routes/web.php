<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsalesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilesController;

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/profile/{studentId}', [ProfilesController::class, 'getProfilesById'])->middleware('auth');;

Route::get('/homepage', [ProductsalesController::class, 'showHomepageProducts'])->middleware('auth');

Route::get('/products', [ProductsController::class, 'getAllProducts'])->name('product')->middleware('auth');;

Route::get('/login', [UsersController::class, 'showLogin'])->name('login');

Route::post('/login', [UsersController::class, 'login']);

Route::get('/register', [UsersController::class, 'showRegister'])->name('register');

Route::post('/register', [UsersController::class, 'register']);

Route::post('/logout', [UsersController::class, 'logout'])->name('logout');

Route::post('/profile/update', [UsersController::class, 'updateProfile'])->name('profile.update')->middleware('auth');
