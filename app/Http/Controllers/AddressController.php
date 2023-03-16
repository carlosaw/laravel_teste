<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    //
    public function index(Request $request) {
        $addresses = Address::all();
        
        return view('addresses', ['addresses' => $addresses]);
    }
}
