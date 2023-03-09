<?php
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/vehicles', function(){
    return view('vehicles');
});

Route::get('/clients', function(){
    return view('clients');
});

Route::get('/addresses', function(){
    return view('addresses');
});

Route::get('/products', function(){
    return view('products');
});

Route::get('/orders', function(){
    return view('orders');
});

Route::get('/mechanics', function(){
    return view('mechanics');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});