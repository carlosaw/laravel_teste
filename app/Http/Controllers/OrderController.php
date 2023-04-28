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
            $orders = Order::where([
                ['id', 'like', '%'.$search.'%']
            ])->get();            
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
        $orders = Order::all();
        $vehicles = Vehicle::all();        
        $clients = Client::all();
        $mechanics = Mechanic::all();
        $data['orders'] = $orders;
        $data['clients'] = $clients;
        $data['vehicles'] = $vehicles;
        $data['mechanics'] = $mechanics;
        
        return view('orders/new', $data);        
    }
    
    public function create_action(Request $request) {
        dd($request->all());
        $validator = $request->validate([

            'client_id' => $request->clients->id,
            'vehicle_id' => '',
            'mechanic_id' => ''
          ]);
        //dd($request->all());
        $order = $request->only(['client_id', 'vehicle_id', 'mechanic_id', 'due_date']);
        Order::create($order);
        return redirect(route('orders'))->with('alert', '✔');
    }
}
