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
        
        return view('products/products', ['products' => $products]);
    }
    public function create(Request $request) {
        return view('products/new');
    }
}
