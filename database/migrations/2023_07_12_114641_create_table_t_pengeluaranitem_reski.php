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
        Schema::create('table_t_pengeluaranitem_reski', function (Blueprint $table) {
            $table->id('id');
            $table->string('nobk_reski');
            $table->string('barangid_reski', 45);
            $table->integer('jumlah_reski');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_pengeluaranitem_reski');
    }
};
