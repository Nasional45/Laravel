<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_peminjaman')->unique();
            $table->string('nama_peminjam');
            $table->string('tanggal_peminjaman');
            $table->string('tanggal_kembali');
            $table->integer('denda_peminjaman');
            $table->string('keterangan_peminjaman')->nullable; 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_bukus');
    }
}
