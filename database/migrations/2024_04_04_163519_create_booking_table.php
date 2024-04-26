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
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id_booking');
            $table->date('tanggal');
            $table->time('jam');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_customer');
            $table->timestamps();
            $table->foreign('id_menu')->references('id_menu')->on('menu')->onUpdate('cascade');
            $table->foreign('id_customer')->references('id_customer')->on('customer')->onUpdate('cascade');
            // $table->index('id_telp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
