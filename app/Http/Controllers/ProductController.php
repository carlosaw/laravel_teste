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
}
