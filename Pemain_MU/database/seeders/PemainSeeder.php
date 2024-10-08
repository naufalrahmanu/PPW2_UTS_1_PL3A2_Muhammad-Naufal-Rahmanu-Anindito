<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for( $i = 0; $i < 10; $i++) {
            Pemain::create([
                'nama' => fake()->name(),
                'nomor_punggung' => fake()->numberBetween(1, 11),
                'posisi' => fake()->jobTitle(),
                'created_at' => fake()->date(),
                'updated_at' => fake()->date(),
            ]);
        }
    }
}
