<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelDataKontrak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kontraks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_kontrak', 30);
            $table->date('tanggal_kontrak');
            $table->date('pelaksanaan_tanggal_mulai');
            $table->date('pelaksanaan_tanggal_selesai');
            $table->string('pelaksanaan_jenis_infrastruktur');
            $table->string('pelaksanaan_volume_unit');
            $table->bigInteger('dana_nilai_blm')->unsigned();
            $table->bigInteger('dana_nilai_swadaya')->unsigned();
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
        Schema::drop('data_kontraks');
    }
}
