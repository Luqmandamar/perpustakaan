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
            $table->string("jenis_buku");
            $table->string("penerbit");
            $table->string("pengarang");
            $table->string("sinopsis");
            $table->integer("no_buku");
            $table->integer("tahun_buku");
            $table->unsignedBigInteger("id_kategori");

            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris')->onDelete('cascade');
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
