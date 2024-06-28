<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_buku')->constrained('bukus')->onDelete('cascade'); // Ensure correct table name
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('pinjams');
    }
}
