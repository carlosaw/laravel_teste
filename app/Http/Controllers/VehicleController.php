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
        $vehicle['client_id'] = 1;
        $dbVehicle = Vehicle::create($vehicle);
        return $dbVehicle;
    }
}
