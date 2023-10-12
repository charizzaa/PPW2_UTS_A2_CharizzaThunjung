<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pemain'=>$this->faker->words(2,true),
            'no_punggung'=>$this->faker->numerify('##'),
            'posisi'=>$this->faker->randomElement(['Goalkeeper', 'Defenders', 'Midfielders', 'Forwards', 'Wing Back', 'Striker']),
        ];
    }
}
