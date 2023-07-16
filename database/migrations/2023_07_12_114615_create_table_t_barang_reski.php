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
        Schema::create('table_t_barang_reski', function (Blueprint $table) {
            $table->string('barangid_reski')->primary();
            $table->string('nama_barang_reski', 45);
            $table->string('harga_reski', 45);
            $table->string('kategoriid_reski', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_barang_reski');
    }
};
