<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPersiapanIdentifikasiKelembagaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_persiapan_identifikasi_kelembagaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->string('nama_bkm', 50);
            $table->date('tanggal_pembentukan');
            $table->string('nama_koordinator', 50);
            $table->integer('jumlah_pengurus_bkm');
            $table->integer('jumlah_perempuan_pengurus_bkm');
            $table->string('alamat_bkm');
            $table->string('telepon_hp', 50);
            $table->date('tanggal_pengesahan_notaris');
            $table->string('nomor_pengesahan', 30);
            $table->string('nama_notaris', 50);
            $table->string('nama_bank', 20); 
            $table->string('no_rekening_bank', 20);
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
        Schema::drop('tahap_persiapan_identifikasi_kelembagaans');
    }
}