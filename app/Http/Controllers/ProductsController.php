<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class ProductsController extends Controller
{
public function getAllProducts(){
        $products = products::all();
        return view('productFeat', ['product'=>$products]);
    }
 public function showHomepageProducts()
    {
        $products = products::all();
        return view('home', ['product' => $products]);
    }
}
