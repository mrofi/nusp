<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPerencanaanPembentukanKpp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_perencanaan_pembentukan_kpps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->date('tanggal_pembentukan');
            $table->string('nama_kpp', 50);
            $table->integer('jumlah_pengurus_kpp')->unsigned();
            $table->integer('jumlah_perempuan_pengurus_kpp')->unsigned();
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
        Schema::drop('tahap_perencanaan_pembentukan_kpps');
    }
}
