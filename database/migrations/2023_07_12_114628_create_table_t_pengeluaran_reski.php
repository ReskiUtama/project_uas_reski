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
        Schema::create('table_t_pengeluaran_reski', function (Blueprint $table) {
            $table->string('nobk_reski')->primary();
            $table->date('tanggal_reski');
            $table->date('noref_reski');
            $table->string('bagianid_reski', 15);
            $table->string('petugasid_reski', 5);
            $table->string('keterangan_reski', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_pengeluaran_reski');
    }
};
