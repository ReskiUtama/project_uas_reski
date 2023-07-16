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
        Schema::create('table_t_petugas_reski', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_petugas_reski', 35);
            $table->string('alamat_reski', 45);
            $table->string('handphone_reski', 15);
            $table->string('password_reski', 10);
            $table->string('level_reski', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_petugas_reski');
    }
};
