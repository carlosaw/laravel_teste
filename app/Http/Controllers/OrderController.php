<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index(Request $request) {
        $orders = Order::all();

        return view('orders/index', ['orders', $orders]);
    }

    public function create(Request $request) {
        return view('orders/new');
    }
}
