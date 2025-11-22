<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RumahSakit;

class PoliklinikFactory extends Factory
{
    public function definition(): array
    {
        return [
            'rumah_sakit_id' => RumahSakit::inRandomOrder()->first()->id, // ambil rumah sakit acak
            'nama' => fake()->randomElement([
                'Poli Umum',
                'Poli Gigi',
                'Poli Anak',
                'Poli Bedah',
                'Poli Kulit & Kelamin',
                'Poli Saraf',
                'Poli Mata',
                'Poli THT',
                'Poli Kandungan',
                'Poli Jantung'
            ]),
        ];
    }
}
