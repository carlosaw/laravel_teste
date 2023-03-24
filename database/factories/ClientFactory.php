<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
            'cpf' => fake()->numerify('###.###.###-##'),
            'fone' => fake()->numerify('9 ####-####'),
            'email' => fake()->unique()->safeEmail()
        ];
    }

    public $timestamps = false;
}
