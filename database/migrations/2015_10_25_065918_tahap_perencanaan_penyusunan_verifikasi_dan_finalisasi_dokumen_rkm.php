<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPerencanaanPenyusunanVerifikasiDanFinalisasiDokumenRkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_perencanaan_verifikasi_finalisasi_dokumen_rkms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('hasil_verifikasi', ['layak', 'tidak layak']);
            $table->text('catatan');
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
        Schema::drop('tahap_perencanaan_verifikasi_finalisasi_dokumen_rkms');
    }
}
