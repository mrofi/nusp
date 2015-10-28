<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapKonstruksiPelaksanaanFisik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_konstruksi_pelaksanaan_fisiks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->date('pekerjaan_persiapan');
            $table->enum('daftar_bahan_material', ['ada', 'tidak ada']);
            $table->enum('daftar_hadir_tenaga_kerja', ['ada', 'tidak ada']);
            $table->enum('penggunaan_alat_berat', ['ada', 'tidak ada']);
            $table->bigInteger('biaya_penggunaan_alat_berat')->unsigned();
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
        Schema::drop('tahap_konstruksi_pelaksanaan_fisiks');
    }
}