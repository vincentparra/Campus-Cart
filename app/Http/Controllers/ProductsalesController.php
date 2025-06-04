<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productsales;
class ProductsalesController extends Controller
{
    public function showHomepageProducts()
    {
        $products = productsales::all();
        return view('home', ['product' => $products]);
    }
}
