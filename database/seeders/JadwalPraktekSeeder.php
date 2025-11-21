<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalPraktekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\JadwalPraktek::create([
        'dokter_id' => 1,
        'hari' => 'Senin',
        'jam_mulai' => '08:00',
        'jam_selesai' => '12:00'
    ]);

    \App\Models\JadwalPraktek::create([
        'dokter_id' => 2,
        'hari' => 'Selasa',
        'jam_mulai' => '09:00',
        'jam_selesai' => '13:00'
    ]);
}

}
