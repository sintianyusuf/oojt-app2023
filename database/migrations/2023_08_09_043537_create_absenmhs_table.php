<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenmhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenmhs', function (Blueprint $table) {
            $table->id('id_absenmhs');
            $table->unsignedBigInteger('mhs_nim');
            $table->string('tanggal');
            $table->string('gambar');
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
        Schema::table('absenmhs', function (Blueprint $table) {
            $table->dropForeign('mhs_nim');
        });
        Schema::dropIfExists('absenmhs');
    }
}
