<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\RumahSakit::create([
            'nama' => 'RS Harapan Sehat',
            'alamat' => 'Jl. Merdeka No. 123, Jakarta',
            'telepon' => '021567890'
        ]);
    }

}
