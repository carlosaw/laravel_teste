<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Client;
use App\Models\Vehicle;
use App\Models\Mechanic;
use App\Models\Order;
use App\Models\Product;
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
        
        //User::factory(1)->create();
        Client::factory(25)->create();
        Address::factory(25)->create();
        Product::factory(25)->create();
        Vehicle::factory(25)->create();
        Mechanic::factory(3)->create();
        Order::factory(25)->create();
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
