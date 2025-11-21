<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    \App\Models\Dokter::create([
        'nama' => 'Dr. Andi Wijaya',
        'spesialis' => 'Umum',
        'poliklinik_id' => 1
    ]);

    \App\Models\Dokter::create([
        'nama' => 'Drg. Rina Lestari',
        'spesialis' => 'Gigi',
        'poliklinik_id' => 2
    ]);
}

}
