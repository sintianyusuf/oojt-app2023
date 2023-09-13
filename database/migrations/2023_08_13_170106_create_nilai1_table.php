<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilai1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai1', function (Blueprint $table) {
            $table->id('id_nilai1');
            $table->string('nama_mahasiswa');
            $table->integer('nk1');
            $table->integer('nk2');
            $table->integer('nk3');
            $table->integer('nk4');
            $table->integer('nk5');
            $table->integer('jumlah');
            $table->integer('ip');
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
        Schema::dropIfExists('nilai1');
    }
}
