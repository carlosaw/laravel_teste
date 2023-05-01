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
            $orders = Order::where([
                ['id', 'like', '%' . $search . '%']
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

    public function create(Request $request)
    {
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

    public function create_action(Request $request)
    {

        //dd($request->all());
        $validator = $request->validate([
            'client_id' => 'required',
            'vehicle_id' => 'required',
            'mechanic_id' => 'required'
        ]);
        //dd($validator);
        $order = $request->only(['client_id', 'vehicle_id', 'mechanic_id']);
        Order::create($order);
        return redirect(route('orders'))->with('alert', '✔');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        //dd($id);
        $orders = Order::find($id);
        if (!$orders) {
            return redirect(route('orders'));
        }

        $clients = Client::all();
        $vehicles = Vehicle::all();
        $mechanics = Mechanic::all();
        $data['orders'] = $orders;
        $data['clients'] = $clients;
        $data['vehicles'] = $vehicles;
        $data['mechanics'] = $mechanics;

        return view('orders/edit', $data);
    }

    public function edit_action(Request $request)
    {
        //dd($request->all());

        $request_data = $request->only(['client_id', 'vehicle_id', 'mechanic_id']);
        $order = Order::find($request->id);
        if (!$order) {
            return 'Erro: Ordem de Serviço não existe!';
        }
        //dd($request_data);
        $order->update($request_data);
        //dd($request_data);
        $order->save();
        //dd($order);
        return redirect(route('orders'))->with('alert', '✔');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $order = Order::find($id);
        if ($order) {
            $order->delete();
        }
        return redirect(route('orders'))->with('alert', '✔');
    }
}
