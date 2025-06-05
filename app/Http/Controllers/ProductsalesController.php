<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\productsales;
use App\Models\students;
class ProductsalesController extends Controller
{
    public function showHomepageProducts()
    {
        $studentId = Auth::user();
        $products = productsales::all();
        return view('home',['profile'=>$studentId,'product'=>$products]);
    }
}
