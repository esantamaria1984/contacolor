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
        $faker = \Faker\Factory::create('es_ES');

        return [
            'name' => $faker->company(),
            'cif' => strtoupper($faker->bothify('B########')),
            'adress' => $faker->address(),
            'phone' => $faker->numerify('6########'),
            'contact' => $faker->name(),
            'phoneContact' => $faker->numerify('6########')
        ];
    }
}
