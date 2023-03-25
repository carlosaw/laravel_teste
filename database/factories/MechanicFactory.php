<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MechanicFactory extends Factory
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
            'name' => fake()->text(12),
            'phone' => fake()->numerify('# ####-####'),
            'percentage' => rand(50, 55),
            // 'vehicle_id' => Vehicle::all()->random(),
            // 'client_id' => Client::all()->random()
        ];
    }

    public $timestamps = false;
}
