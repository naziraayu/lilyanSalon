<?php

use App\Models\Customer;
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
            $table->id();
            $table->date('tanggal');
            $table->string('jam');
            $table->string('service');
            $table->string('kecamatan')->nullable();
            $table->string('alamat')->nullable();
            $table->bigInteger('akomodasi');
            $table->string('status');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')
            ->references('id')
            ->on('menu')
            ->onDelete('cascade');
            $table->timestamps();
            $table->foreign('customer_id')
            ->references('id')
            ->on('customer')
            ->onDelete('cascade');
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
