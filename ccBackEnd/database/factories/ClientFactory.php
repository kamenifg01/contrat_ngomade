<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->firstname(20),
            'numero' => rand(2020300, 2030400),
            "ville" => $this->faker->city(),
            'telephone' => $this->faker->phoneNumber()
        ];
    }
}
