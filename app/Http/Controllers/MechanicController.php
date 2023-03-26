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

    public function create_action(Request $request) {
        //dd($request->all());
        $mechanic = $request->only(['name', 'phone', 'percentage']);
        Mechanic::create($mechanic);
        return redirect(route('mechanics'));
    }

    public function edit(Request $request) {
        $id = $request->id;
        //dd($id);
        $mechanics = Mechanic::find($id);
        if(!$mechanics) {
            return redirect(route('mechanics'));
        }        
        $data['mechanics'] = $mechanics;
        return view('mechanics/edit', $data);
    }

    public function edit_action(Request $request) {
        //dd($request->all());

        $request_data = $request->only(['name', 'phone', 'percentage']);
        $mechanic = Mechanic::find($request->id);
        if(!$mechanic) {
            return 'Erro: Mecânico não existe!';
        }
        //dd($product);
        $mechanic->update($request_data);
        $mechanic->save();
        //dd($product);
        return redirect(route('mechanics'));
    }

    public function delete(Request $request) {
        $id = $request->id;
        $mechanic = Mechanic::find($id);
        if($mechanic) {
            $mechanic->delete();
        }
        return redirect(route('mechanics'));
    }
}
