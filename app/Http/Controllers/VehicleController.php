<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //
    public function index(Request $request) {
        return view('vehicles');
    }

    public function create(Request $request) {
        return view('vehicles/create');
    }
}
