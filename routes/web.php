<?php
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles');
Route::get('/vehicles/new', [VehicleController::class, 'create'])->name('vehicle.create');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/clients/new', [ClientController::class, 'create'])->name('client.create');

Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');
Route::get('/addresses/new', [AddressController::class, 'create'])->name('address.create');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/new', [ProductController::class, 'create'])->name('product.create');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orders/new', [OrderController::class, 'create'])->name('order.create');

Route::get('/mechanics', [MechanicController::class, 'index'])->name('mechanics');
Route::get('/mechanics/new', [MechanicController::class, 'create'])->name('mechanic.create');

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});