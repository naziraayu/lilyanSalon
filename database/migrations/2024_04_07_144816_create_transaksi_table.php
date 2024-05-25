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
            $table->string('id_transaksi')->primary()->unique();
            $table->bigInteger('grand_total')->nullable();
            $table->bigInteger('kembalian')->nullable();
            $table->bigInteger('bayar')->nullable();
            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')
            ->references('id')
            ->on('booking')
            ->onDelete('cascade');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')
            ->references('id')
            ->on('menu')
            ->onDelete('cascade');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')
            ->references('id')
            ->on('customer')
            ->onDelete('cascade');
            $table->timestamps();
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
