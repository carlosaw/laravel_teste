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
  public function index(Request $request)
  {
    $search = request('search');
    if ($search) {
      $vehicles = Vehicle::all();
      $mechanics = Mechanic::all();
      $clients = Client::all();

      $orders = Order::join('clients', 'clients.id', '=', 'orders.client_id')
        ->where([
          ['clients.name', 'like', '%' . $search . '%'],
        ])->orWhere([
          ['orders.client_id', 'like', '%' . $search . '%']
        ])->get();
    } else {
      $orders = Order::all();
      $clients = Client::all();
      $vehicles = Vehicle::all();
      $mechanics = Mechanic::all();
    }

    return view('orders/index', ['orders' => $orders, 'search' => $search, 'clients' => $clients, 'vehicles' => $vehicles, 'mechanics' => $mechanics]);
  }

  public function create(Request $request)
  {
    return view('orders/new');
  }

  public function edit(Request $request)
  {
    $id = $request->id;
    //dd($id);
    $orders = Order::find($id);
    if (!$orders) {
      return redirect(route('orders'));
    }
    
    $data1['orders'] = $orders;

    $clients = Client::all();
    $dataClient['clients'] = $clients;

    return view('orders/edit', $data1, $dataClient);
  }
}
