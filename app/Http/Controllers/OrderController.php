<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = request('order') == 'asc' ? 'desc' : 'asc';
        $orders = Order::sort($order)->paginate(20);
        return view('orders', compact('orders', 'order'));
    }
}

