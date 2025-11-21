<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Resep::create([
        'kunjungan_id' => 1,
        'obat_id' => 1,
        'jumlah' => 10,
        'aturan_pakai' => '3x sehari setelah makan'
    ]);
}

}
