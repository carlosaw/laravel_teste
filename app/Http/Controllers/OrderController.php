<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Vehicle;

class OrderController extends Controller
{
    //
    public function index(Request $request) {
        $search = request('search');
        if($search) {
            $vehicles = Vehicle::all();
            $mechanics = Mechanic::all();
            $clients = Client::all();
            $orders = Order::join('clients', 'clients.id','=','orders.client_id')
            ->orWhere([
                ['clients.name', 'like', '%'.$search.'%']
            ])->get();
            // $orders = Order::join('clients', 'clients.id','=','orders.client_id')
            // ->where([
            //     ['clients.name', 'like', '%'.$search.'%']
            // ])->get();            
        } else {
            $orders = Order::all();
            $clients = Client::all();
            $vehicles = Vehicle::all();
            $mechanics = Mechanic::all();
        }
        //dd($clients);
        return view('orders/index', ['orders' => $orders, 'search' => $search, 'clients' => $clients, 'vehicles' => $vehicles, 'mechanics' => $mechanics]);
    }

    public function create(Request $request) {
        return view('orders/new');
    }
}
