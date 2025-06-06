<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $studentId = auth()->id() ?? 1;

        $cart = Cart::with('product')
            ->where('student_id', $studentId)
            ->get();

        $cart = $cart->map(function ($item) {
            return [
                'name' => $item->product->productName,
                'price' => $item->product->price,
                'quantity' => $item->quantity,
                'img' => $item->product->imgDestination
            ];
        });

        return view('checkout', compact('cart'));
    
    }

}
