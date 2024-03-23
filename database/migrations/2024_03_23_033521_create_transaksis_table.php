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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id("id_peminjaman");
            $table->unsignedBigInteger("id_anggota");
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota_perpustakaans')->onDelete('cascade');
            $table->string("kode_buku");
            $table->date("tanggal_pinjam");
            $table->date("tanggal_kembali");
            $table->enum("status_buku",['sudah kembali','belum kembali']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
