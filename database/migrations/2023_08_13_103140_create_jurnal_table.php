<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->id('id_jurnal');
            $table->unsignedBigInteger('mhs_nim');
            $table->string('hari_tanggal');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('mhs_nim')->references('nim')->on('mahasiswa')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jurnal', function (Blueprint $table) {
            $table->dropForeign('mhs_nim');
        });
        Schema::dropIfExists('jurnal');
    }
}
