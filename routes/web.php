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
Route::post('/vehicles/new_action', [VehicleController::class, 'create_action'])->name('vehicle.create_action');
Route::get('/vehicles/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
Route::get('/vehicles/delete', [VehicleController::class, 'delete'])->name('vehicle.delete');

Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/clients/new', [ClientController::class, 'create'])->name('client.create');
Route::post('/clients/new_action', [ClientController::class, 'create_action'])->name('client.create_action');
Route::get('/clients/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::get('/clients/delete', [ClientController::class, 'delete'])->name('client.delete');

Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');
Route::get('/addresses/new', [AddressController::class, 'create'])->name('address.create');
Route::post('/addressses/new_action', [AddressController::class, 'create_action'])->name('address.create_action');
Route::get('/addresses/edit', [AaddressController::class, 'edit'])->name('address.edit');
Route::get('/addresses/delete', [AddressController::class, 'delete'])->name('address.delete');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/new', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/new_action', [ProductController::class, 'create_action'])->name('product.create_action');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/products/delete', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orders/new', [OrderController::class, 'create'])->name('order.create');
Route::get('/orders/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::get('/orders/delete', [OrderController::class, 'delete'])->name('order.delete');

Route::get('/mechanics', [MechanicController::class, 'index'])->name('mechanics');
Route::get('/mechanics/new', [MechanicController::class, 'create'])->name('mechanic.create');
Route::post('/mechanics/new_action', [MechanicController::class, 'create_action'])->name('mechanic.create_action');
Route::get('/mechanics/edit', [MechanicController::class, 'edit'])->name('mechanic.edit');
Route::get('/mechanics/delete', [MechanicController::class, 'delete'])->name('mechanic.delete');

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});