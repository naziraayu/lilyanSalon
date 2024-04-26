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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->bigInteger('grand_total');
            $table->bigInteger('kembalian');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_booking');
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menu')->onUpdate('cascade');
            $table->foreign('id_booking')->references('id_booking')->on('booking')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
