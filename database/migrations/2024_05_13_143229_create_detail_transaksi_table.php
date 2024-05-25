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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->string('transaksi_id');
            $table->unsignedBigInteger('menu_id');
            $table->string('nama_treatment')->nullable();
            $table->bigInteger('harga');
            $table->foreign('transaksi_id')
            ->references('id_transaksi')
            ->on('transaksi')
            ->onDelete('cascade');
            $table->foreign('menu_id')
            ->references('id')
            ->on('menu')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
