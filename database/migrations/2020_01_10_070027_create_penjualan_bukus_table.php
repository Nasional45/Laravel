<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_buku')->unique();
            $table->string('judul_buku');
            $table->integer('harga_buku');
            $table->string('genre_buku');
            $table->date('waktu_penjualan')->nullable;      
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
        Schema::dropIfExists('penjualan_bukus');
    }
}
