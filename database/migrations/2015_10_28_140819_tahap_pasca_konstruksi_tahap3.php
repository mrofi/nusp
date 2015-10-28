<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPascaKonstruksiTahap3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_pasca_konstruksi_tahap3s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->string('no_spm', 30);
            $table->date('tanggal_spm');
            $table->string('no_sp2d', 30);
            $table->date('tanggal_sp2d');
            $table->integer('jumlah')->unsigned();
            $table->integer('file_spm')->unsigned()->nullable();
            $table->integer('file_sp2d')->unsigned()->nullable();
            $table->integer('file_berita_acara')->unsigned()->nullable();
            $table->integer('file_kuitansi')->unsigned()->nullable();
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
        Schema::drop('tahap_pasca_konstruksi_tahap3s');
    }
}
