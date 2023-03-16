<?php
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');

Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');

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