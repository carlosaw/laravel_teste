<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function index(Request $request) {
        $clients = Client::all()->take(50);
        
        return view('clients', ['clients' => $clients]);
    }

    public function create(Request $request) {
        return view('clients/create');
    }
}
