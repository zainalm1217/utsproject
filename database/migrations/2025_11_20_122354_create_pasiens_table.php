<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id')->nullable()->constrained('dokters')->cascadeOnDelete();
            $table->foreignId('poliklinik_id')->nullable()->constrained('polikliniks')->cascadeOnDelete();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
