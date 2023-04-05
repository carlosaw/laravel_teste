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

        $search = request('search');
        if($search) {
            $clients = Client::all();
            $addresses = Address::where([
                ['street', 'like', '%'.$search. '%']
            ])->get();
        } else { 
            $clients = Client::all();           
            $addresses = Address::all();
        }                
        return view('addresses/index', ['addresses' => $addresses, 'search' => $search, 'clients' => $clients]);


        // $addresses = Address::all();
        // $clients = Client::all();
        // return view('addresses/index', ['addresses' => $addresses], ['clients' => $clients]);
    }

    public function create(Request $request) {
        $clients = Client::all();
        
        $data['clients'] = $clients;

        return view('addresses/new', $data);       
    }

    public function create_action(Request $request) {
        //dd($request->all());
        $address = $request->only(['street', 'number', 'cep', 'district', 'city', 'state', 'client_id']);
        //$address['client_id'] = 1;
        // $dbaddress = Address::create($address);
        Address::create($address);
        return redirect(route('addresses'))->with('alert', 'Adicionado com sucesso!');
    }

    public function edit(Request $request) {
        $id = $request->id;
        //dd($id);
        $addresses = Address::find($id);
        if(!$addresses) {
            return redirect(route('addresses'));
        }
        $data1['addresses'] = $addresses;

        $clients = Client::all();        
        $data['clients'] = $clients;

        return view('addresses/edit', $data, $data1);
    }

    public function edit_action(Request $request) {
        //dd($request->all());

        $request_data = $request->only(['street', 'number', 'cep', 'district', 'city', 'state', 'client_id']);
        $address = Address::find($request->id);
        if(!$address) {
            return 'Erro: Endereço não existe!';
        }
        //dd($client);
        $address->update($request_data);
        $address->save();
        //dd($address);
        return redirect(route('addresses'))->with('alert', '✔');
    }

    public function delete(Request $request) {
        $id = $request->id;
        $address = Address::find($id);
        if($address) {
            $address->delete();
        }
        return redirect(route('addresses'))->with('alert', '✔');
    }
}
