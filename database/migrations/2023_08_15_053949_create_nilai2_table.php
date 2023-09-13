<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilai2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai2', function (Blueprint $table) {
            $table->id('id_nilai2');
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->integer('skil_input');
            $table->integer('presentasi_kehadiran');
            $table->integer('nilai_p1');
            $table->integer('nilai_p2');
            $table->integer('data_input');
            $table->integer('pekerjaan');
            $table->integer('total_nilai');
            $table->integer('ket');
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
        Schema::dropIfExists('nilai2');
    }
}
