<?php
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MechanicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles');
Route::get('/vehicles/new', [VehicleController::class, 'create'])->name('vehicle.create');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');

Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/orders', function(){
    return view('orders');
});

Route::get('/mechanics', [MechanicController::class, 'index'])->name('mechanics');

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});