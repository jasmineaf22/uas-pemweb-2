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
            $table->id('id_buku');
            $table->timestamps();
            $table->string('judul', 100);
            $table->string('penulis', 100);
            $table->string('foto', 255);
            
            // Change the data type to unsignedBigInteger to match the referenced column
            $table->unsignedBigInteger('id_kategori');
            
            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris');
            
            $table->string('sinopsis', 255);
            $table->string('tahun_terbit', 4);
        });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
