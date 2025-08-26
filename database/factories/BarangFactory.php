<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ruangan;
use App\Models\Kategori;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nama_barang' => fake()->word(),
        'kode_inventaris' => fake()->word(),
        'kategori_id' => Kategori::factory(),
        'ruangan_id' => Ruangan::factory(),
        'tahun_pengadaan' => fake()->year(),
        'sumber_dana' => fake()->word(),
        'kondisi' => fake()->word()
        ];
    }
}
