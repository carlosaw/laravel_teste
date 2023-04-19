<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Mechanic;
use App\Models\Product;

class OrderController extends Controller
{
    //
    public function index(Request $request) {
        $search = request('search');
        if($search) {
            $clients = Client::all();
            $orders = Order::where([
                ['id', 'like', '%'.$search. '%']
            ])->get();
        } else {
            $orders = Order::all();
            $clients = Client::all();
        }
                
        return view('orders/index', ['orders' => $orders, 'search' => $search, 'clients' => $clients]);
    }

    public function create(Request $request) {
        return view('orders/new');
    }
}
