
 $table->string('nip');
            $table->string('nama');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('jabatan');
            $table->int('jam_kerja');<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('nip')->unique();
            $table->string('nama');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('jabatan');
            $table->integer('jam_kerja')->nullable;
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
        Schema::dropIfExists('gajis');
    }
}
