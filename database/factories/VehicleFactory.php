<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
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
        // while(count($product->vehicles) == 0) {
        //     $product = Product::all()->random();
        // }

        return [
            //
            'client_id' => $client,
            'product_id' => $product,
            'plate' => fake()->text(8),
            'brand' => fake()->text(8),
            'model' => fake()->text(10),
            'color' => fake()->safeColorName(),
            'year' => rand(1999, 2023),
            'km' => rand(1000, 200000)
        ];
    }

    public $timestamps = false;
}
