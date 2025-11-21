<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Obat::create([
        'nama_obat' => 'Paracetamol',
        'stok' => 100,
        'harga' => 5000
    ]);

    \App\Models\Obat::create([
        'nama_obat' => 'Amoxicillin',
        'stok' => 200,
        'harga' => 8000
    ]);
}

}
