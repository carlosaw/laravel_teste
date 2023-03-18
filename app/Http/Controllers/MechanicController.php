<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    //
    public function index() {
        $mechanics = Mechanic::all();
        
        return view('mechanics/index', ['mechanics' => $mechanics]);
    }

    public function create(Request $request) {
        return view('mechanics/new');
    }
}
