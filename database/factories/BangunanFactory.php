<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tanah;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bangunan>
 */
class BangunanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nama_bangunan' => fake()->word(),
        'kode_bangunan' => fake()->word(),
        'tanah_id' => Tanah::factory(),
        ];
    }
}
