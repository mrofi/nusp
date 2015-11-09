<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPerencanaanMusyawarahKelurahanKetiga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_perencanaan_musyawarah_kelurahan_ketigas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('jumlah_peserta_laki-laki')->unsigned();
            $table->integer('jumlah_peserta_perempuan')->unsigned();
            $table->integer('jumlah_peserta_warga_miskin')->unsigned();
            $table->integer('foto_id')->unsigned()->nullable();
            $table->integer('file_id')->unsigned()->nullable();
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
        Schema::drop('tahap_perencanaan_musyawarah_kelurahan_ketigas');
    }
}
