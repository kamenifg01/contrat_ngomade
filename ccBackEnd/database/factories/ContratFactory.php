<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => 'CDI',
            'numero' => 'CDI'.rand(1020, 1040),
            'duree' => rand(1, 10),
            'dateSignature' => now(),
            'id_client' => rand(1, 30),
        ];
    }
}
