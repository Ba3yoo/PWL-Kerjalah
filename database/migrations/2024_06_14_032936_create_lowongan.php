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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lowongan')->constrained();
            $table->string('jabatan');
            $table->integer('jumlah_lowongan');
            $table->integer('gaji');
            $table->text('deskripsi');
            $table->integer('jam_kerja');
            $table->string('domisili');
            $table->string('pengalaman_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
