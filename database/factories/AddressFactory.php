<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = Client::all()->random();
        // while(count($client->address) == 0) {
        //     $client = Client::all()->random();
        // }
        return [
            //
            'client_id' => $client,
            'street' => fake()->text(20),
            'number' => fake()->numerify('###'),
            'cep' => fake()->numerify('#####-###'),
            'district' => fake()->text(8),
            'city' => fake()->text(8),
            'state' => fake()->text(5)
        ];
    }
    public $timestamps = false;
}
