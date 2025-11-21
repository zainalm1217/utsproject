<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    \App\Models\Kunjungan::create([
        'pasien_id' => 1,
        'dokter_id' => 1,
        'tanggal_kunjungan' => '2025-01-20',
        'keluhan' => 'Demam dan pusing',
        'diagnosa' => 'Flu biasa'
    ]);
}

}
