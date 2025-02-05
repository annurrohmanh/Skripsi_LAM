<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asosiasi_keanggotaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen_dtpr');
            $table->string('nidn')->unique();
            $table->string('tanggal_lahir');
            $table->string('bukti_sertifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asosiasi_keanggotaan');
    }
};
