<?php

namespace Database\Factories;

use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MaodeobraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mechanic = Mechanic::all()->random();

        return [
            //
            'name' => fake()->text(30),
            'percentage' => rand(10,50),
            'mechanic_id' => $mechanic
        ];
    }

}
