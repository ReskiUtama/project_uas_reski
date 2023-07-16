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
        Schema::create('table_t_bagian_reski', function (Blueprint $table) {
                $table->id();
                $table->string('bagianid_reski')->primary();
                $table->string('nama_bagian_reski', 45);
                $table->string('kepala_bagian_reski', 45);
                $table->string('telepon_reski', 15);
                $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_bagian_reski');
    }
};
