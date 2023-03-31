<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Vehicle;
class VehicleController extends Controller
{
    //
    public function index(Request $request) {
        $vehicles = Vehicle::all();
        
        return view('vehicles/index', ['vehicles' => $vehicles]);
    }

    public function create(Request $request) {
        $clients = Client::all();
        
        $data['clients'] = $clients;

        return view('vehicles/new', $data);
    }

    public function create_action(Request $request) {
        //dd($request->all());
        $vehicle = $request->only(['plate', 'brand', 'model', 'color', 'year', 'km', 'client_id']);
        Vehicle::create($vehicle);
        return redirect(route('vehicles'));
    }

    public function edit(Request $request) {
        $id = $request->id;
        //dd($id);
        $vehicles = Vehicle::find($id);
        if(!$vehicles) {
            return redirect(route('vehicles'));
        }
        $data1['vehicles'] = $vehicles;

        $clients = Client::all();        
        $data['clients'] = $clients;

        return view('vehicles/edit', $data, $data1);
    }

    public function edit_action(Request $request) {
        //dd($request->all());

        $request_data = $request->only(['plate', 'brand', 'model', 'color', 'year', 'km', 'client_id']);
        $vehicle = Vehicle::find($request->id);
        if(!$vehicle) {
            return 'Erro: Veículo não existe!';
        }
        //dd($vehicle);
        $vehicle->update($request_data);
        $vehicle->save();
        //dd($vehicle);
        return redirect(route('vehicles'));
    }

    public function delete(Request $request) {
        $id = $request->id;
        $vehicle = Vehicle::find($id);
        if($vehicle) {
            $vehicle->delete();
        }
        return redirect(route('vehicles'))->with('href');
    }
}
