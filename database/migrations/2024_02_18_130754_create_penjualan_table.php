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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->bigIncrements('penjualan_id'); // Kolom ini merupakan primary key dengan auto increment
            $table->date('tanggal_penjualan');
            $table->decimal('total_harga', 10, 2);
            $table->unsignedBigInteger('pelanggan_id'); // Kolom ini bukan primary key dengan auto increment
            $table->foreign('pelanggan_id')->references('pelanggan_id')->on('pelanggan'); // Contoh foreign key ke tabel pelanggan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
