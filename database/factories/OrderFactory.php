<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Product;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = Client::all()->random();
        // while(count($client->vehicles) == 0) {
        //     $client = Client::all()->random();
        // }
        
        $product = Product::all()->random();
        
        $vehicle = Vehicle::all()->random();

        return [
            //
            'client_id' => $client,
            'product_id' => $product,
            'vehicle_id' => $vehicle,
            'mechanic_id' => 1
        ];
    }

    public $timestamps = false;
}
