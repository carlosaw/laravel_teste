<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
class VehicleController extends Controller
{
    //
    public function index(Request $request) {
        $vehicles = Vehicle::all();
        
        return view('vehicles/vehicles', ['vehicles' => $vehicles]);
    }

    public function create(Request $request) {

        return view('vehicles/new');
    }
}
