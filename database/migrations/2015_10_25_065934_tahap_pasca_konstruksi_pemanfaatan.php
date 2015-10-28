<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPascaKonstruksiPemanfaatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_pasca_konstruksi_pemanfaatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->text('jenis_kegiatan');
            $table->integer('jumlah_kk')->unsigned();
            $table->integer('jumlah_kk_miskin')->unsigned();
            $table->integer('jumlah_pemanfaat')->unsigned();
            $table->integer('jumlah_perempuan')->unsigned();
            $table->integer('jumlah_warga_miskin')->unsigned();
            $table->text('realisasi_jenis_kegiatan');
            $table->integer('realisasi_jumlah_kk')->unsigned();
            $table->integer('realisasi_jumlah_kk_miskin')->unsigned();
            $table->integer('realisasi_jumlah_pemanfaat')->unsigned();
            $table->integer('realisasi_jumlah_perempuan')->unsigned();
            $table->integer('realisasi_jumlah_warga_miskin')->unsigned();
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
        Schema::drop('tahap_pasca_konstruksi_pemanfaatans');
    }
}