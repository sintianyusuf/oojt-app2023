<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratizinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratizin', function (Blueprint $table) {
            $table->id('id_suratizin');
            $table->unsignedBigInteger('mhs_nim');
            $table->string('tanggal');
            $table->string('status');
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
        Schema::table('suratizin', function (Blueprint $table) {
            $table->dropForeign('mhs_nim');
        });
        Schema::dropIfExists('suratizin');
    }
}
