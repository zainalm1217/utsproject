<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    \App\Models\Pasien::create([
        'nama' => 'Budi Santoso',
        'tanggal_lahir' => '1990-05-10',
        'alamat' => 'Jl. Anggrek No. 5',
        'telepon' => '081234567890'
    ]);

    \App\Models\Pasien::create([
        'nama' => 'Siti Aminah',
        'tanggal_lahir' => '1985-11-22',
        'alamat' => 'Jl. Melati No. 8',
        'telepon' => '081298765432'
    ]);
}

}
