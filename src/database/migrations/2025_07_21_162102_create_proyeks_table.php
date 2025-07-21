<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->string('klien')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('deadline')->nullable();
            $table->decimal('anggaran', 15, 2)->nullable();
            $table->string('status')->default('berjalan'); // contoh: selesai, berjalan, tertunda
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyek');
    }
};
