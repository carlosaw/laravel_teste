<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Address;
use App\Models\Vehicle;

class ClientController extends Controller
{
    //
    public function index(Request $request) {
        $search = request('search');
        if($search) {
            $clients = Client::where([                
                ['name', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $clients = Client::all();
        }               
        return view('clients/index', ['clients' => $clients, 'search' => $search]);
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
        return redirect(route('clients'))->with('alert', 'Adicionado com sucesso!');
    }

    public function edit(Request $request) {
        $id = $request->id;
        //dd($id);
        $clients = Client::find($id);
        if(!$clients) {
            return redirect(route('vehicles'));
        }        
        $data['clients'] = $clients;
        return view('clients/edit', $data);
    }

    public function edit_action(Request $request) {
        //dd($request->all());

        $request_data = $request->only(['name', 'cpf', 'fone', 'email']);
        $client = Client::find($request->id);
        if(!$client) {
            return 'Erro: Cliente não existe!';
        }
        //dd($client);
        $client->update($request_data);
        $client->save();
        //dd($client);
        return redirect(route('clients'))->with('alert', 'Editado com sucesso!');
    }

    public function delete(Request $request) {
        $id = $request->id;
        $client = Client::find($id);
        if($client) {
            $client->delete();
        }
        return redirect(route('clients'))->with('alert', 'Excluído com sucesso!');
    }
}
