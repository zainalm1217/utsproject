<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoliklinikFactory extends Factory
{
    public function definition(): array
    {
        return [
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
            'deskripsi' => fake()->sentence(10),
        ];
    }
}
