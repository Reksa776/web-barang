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
        Schema::create('transaksi_barang_masuk', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->string('tanggal');
            $table->string('nama_barang');
            $table->string('jenis');
            $table->string('merek');
            $table->string('ukuran');
            $table->integer('jumlah');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_barang_masuk');
    }
};
