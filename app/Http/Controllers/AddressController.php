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
        
        return view('addresses/addresses', ['addresses' => $addresses]);
    }

    public function create(Request $request) {
        $client = Client::all();
        
        $data['clients'] = $client;

        return view('addresses/new', $data);
        
    }
}
