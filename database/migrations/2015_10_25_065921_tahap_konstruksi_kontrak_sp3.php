<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapKonstruksiKontrakSp3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_konstruksi_kontrak_sp3s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->string('paket_pekerjaan');
            $table->string('no_kontrak', 30);
            $table->date('tanggal_kontrak');
            $table->bigInteger('nilai_kontrak')->unsigned()->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('kontrak_sp3')->unsigned()->nullable(); // file
            $table->integer('ringkasan_kontrak')->unsigned()->nullable(); // file
            $table->date('verified_at')->nullable();
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
        Schema::drop('tahap_konstruksi_kontrak_sp3s');
    }
}
