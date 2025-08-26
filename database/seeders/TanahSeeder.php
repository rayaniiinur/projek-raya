<?php

namespace Database\Seeders;

use App\Models\Tanah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TanahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tanah::factory()->count(10)->create();
        }
}
