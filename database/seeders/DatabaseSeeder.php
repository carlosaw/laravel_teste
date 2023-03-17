<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Mechanic;
use App\Models\Order;
use Database\Factories\OrderFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //UserSeeder::class,
            //AddressSeeder::class,
            //ClientSeeder::class,
            //ProductSeeder::class,
            //VehicleSeeder::class
        ]);
        Address::factory(55)->create();
        User::factory(5)->create();
        Client::factory(50)->create();
        Product::factory(80)->create();
        Vehicle::factory(25)->create();
        Mechanic::factory(25)->create();
        Order::factory(75)->create();
        //Order::factory(3)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
