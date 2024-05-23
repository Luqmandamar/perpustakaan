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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string("judul_buku");
            $table->string("kode_buku",20);
            $table->string("penerbit");
            $table->string("pengarang");
            $table->string("judul_seri");
            $table->string("no_panggil",100);
            $table->string("tahun_buku",4);
            $table->text("deskripsi_fisik");
            $table->string("bahasa");
            $table->string("isbn_issn");
            $table->unsignedBigInteger("id_kategori");
            $table->unsignedBigInteger("id_lokasi");

            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris')->onDelete('cascade');
            $table->foreign('id_lokasi')->references('id')->on('lokasis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
