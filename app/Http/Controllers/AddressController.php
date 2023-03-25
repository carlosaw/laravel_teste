<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Client;

class AddressController extends Controller
{
    //
    public function index(Request $request) {
        $addresses = Address::all();
        
        return view('addresses/index', ['addresses' => $addresses]);
    }

    public function create(Request $request) {
        $clients = Client::all();
        
        $data['clients'] = $clients;

        return view('addresses/new', $data);       
    }

    public function create_action(Request $request) {
        //dd($request->all());
        $address = $request->only(['street', 'number', 'cep', 'district', 'city', 'state', 'client_id']);
        $address['client_id'] = 1;
        // $dbaddress = Address::create($address);
        Address::create($address);
        return redirect(route('addresses'));
    }
}
