<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\products;

class CartController extends Controller
{

    public function addToCart(Request $request){
        $studentId = Auth::id(); 
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        cart::insert([
            'student_id' => $studentId,
            'product_id' => $productId,
            'quantity' => $quantity,
            'created_at' => now(),
            'updated_at' => now(),
        ]); 
    

        return redirect('/cart')->with('success', 'Product added to cart.');
    }
    

    public function viewCart()
    {
        $cartItems = Cart::with('product')->where('student_id', Auth::id())->get();
        return view('cart', compact('cartItems'));
    }
}
