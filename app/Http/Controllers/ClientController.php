<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Address;

class ClientController extends Controller
{
    //
    public function index(Request $request) {
        $clients = Client::all();
        
        return view('clients/index', ['clients' => $clients]);
    }

    public function create(Request $request) {
        // $addresses = Address::all();
        
        // $data['addresses'] = $addresses;

        return view('clients/new');
        
    }

    public function create_action(Request $request) {
        //dd($request->all());
        $client = $request->only(['name', 'cpf', 'fone', 'email']);
        Client::create($client);
        return redirect(route('clients'));
    }
}
