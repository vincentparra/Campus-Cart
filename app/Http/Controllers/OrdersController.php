<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function showOrders()
    {
        $orders = Order::with('product')->get(); 
        return view('', ['orders'=>$orders]);
    }
}
