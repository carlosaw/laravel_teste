<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    //
    public function index(Request $request) {
        $products = Product::all();
        
        return view('products/index', ['products' => $products]);
    }

    public function create(Request $request) {
        return view('products/new');
    }

    public function create_action(Request $request) {
        //dd($request->all());
        $product = $request->only(['name', 'value', 'quantity']);
        Product::create($product);
        return redirect(route('products'));
    }

    public function edit(Request $request) {
        $id = $request->id;
        //dd($id);
        $products = Product::find($id);
        if(!$products) {
            return redirect(route('products'));
        }        
        $data['products'] = $products;
        return view('products/edit', $data);
    }

    public function edit_action(Request $request) {
        //dd($request->all());

        $request_data = $request->only(['name', 'value', 'quantity']);
        $product = Product::find($request->id);
        if(!$product) {
            return 'Erro: Produto não existe!';
        }
        //dd($product);
        $product->update($request_data);
        $product->save();
        //dd($product);
        return redirect(route('products'));
    }

    public function delete(Request $request) {
        $id = $request->id;
        $product = Product::find($id);
        if($product) {
            $product->delete();
        }
        return redirect(route('products'))->with('alert', 'Excluído com sucesso!');
    }
}
