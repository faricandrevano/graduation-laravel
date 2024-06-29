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
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100)->nullable()->default('text');
            $table->string('tempat_lahir', 100)->nullable()->default('text');
            $table->string('tanggal_lahir', 100)->nullable()->default('text');
            $table->string('nis', 100)->nullable()->default('text');
            $table->string('nisn', 100)->nullable()->default('text');
            $table->string('tahun_lulus', 100)->nullable()->default('text');
            $table->enum('status', ['lulus', 'tidak'])->nullable();
            $table->string('jurusan', 100)->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
