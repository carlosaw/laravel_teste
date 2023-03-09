<?php

namespace Database\Factories;

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
        return [
            //
            'street_num' => fake()->text(20),
            'cep' => fake()->numerify('#####-###'),
            'district' => fake()->text(8),
            'city' => fake()->text(8),
            'state' => fake()->text(5)
        ];
    }
    public $timestamps = false;
}
