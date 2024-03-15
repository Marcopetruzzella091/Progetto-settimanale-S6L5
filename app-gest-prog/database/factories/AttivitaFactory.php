<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Progetto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attivita>
 */
class AttivitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomeAttività' => fake()->text(20),
            'descrizioneAttività' => fake()->text(100),
            'statoAttività' => fake()->text(20),
            'progetto_id' => Progetto::get()->random()->id,
            'created_at' => fake()->datetime()
            //
        ];
    }
}
