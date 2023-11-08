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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->date('tgl_lahir');
            $table->string('alamat',50);
            $table->string('agama', 50);
            $table->string('universitas', 50);
            $table->string('fakultas', 50);
            $table->string('prodi', 50);
            $table->char('nim',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
