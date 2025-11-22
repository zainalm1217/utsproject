<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resep;
use App\Models\ResepObat;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 1 resep untuk kunjungan ID 1
        $resep = Resep::create([
            'kunjungan_id' => 1
        ]);

        // Tambah obat ke resep
        ResepObat::create([
            'resep_id' => $resep->id,
            'obat_id' => 1,
            'jumlah' => 10,
            'aturan_pakai' => '3x sehari setelah makan'
        ]);

        ResepObat::create([
            'resep_id' => $resep->id,
            'obat_id' => 2,
            'jumlah' => 5,
            'aturan_pakai' => '2x sehari sebelum tidur'
        ]);
    }
}