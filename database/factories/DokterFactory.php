<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Poliklinik;

class DokterFactory extends Factory
{
    public function definition(): array
    {
        return [
            'poliklinik_id' => Poliklinik::inRandomOrder()->value('id') ?? 1,
            'nama' => $this->faker->name(),
            'spesialis' => $this->faker->randomElement([
                'Umum', 'Gigi', 'Anak', 'THT', 'Kandungan', 'Kulit'
            ]),
            'telepon' => $this->faker->phoneNumber(),  // WAJIB ADA
        ];
    }
}