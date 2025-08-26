<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bangunan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ruangan>
 */
class RuanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nama_ruangan' => fake()->word(),
        'kode_ruangan' => fake()->word(),
        'bangunan_id' =>  Bangunan::factory(),
        ];
    }
}
