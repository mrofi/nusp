<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelProfilDesaKelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_desa_kelurahans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->integer('luas_wilayah')->unsigned(); // dalam stauan ha
            $table->integer('jumlah_penduduk')->unsigned();
            $table->integer('jumlah_penduduk_laki_laki')->unsigned();
            $table->integer('jumlah_penduduk_perempuan')->unsigned();
            $table->integer('jumlah_kk')->unsigned();
            $table->integer('jumlah_kk_miskin')->unsigned();
            $table->integer('jumlah_rw_dusun_lingkungan')->unsigned();
            $table->integer('jumlah_rt')->unsigned();
            $table->integer('jumlah_jamban_kk')->unsigned();
            $table->integer('jumlah_septik_tank')->unsigned();
            $table->integer('jumlah_mck_unit')->unsigned();
            $table->integer('jumlah_mck_bilik')->unsigned();
            $table->integer('jumlah_sumur_gali_unit')->unsigned();
            $table->integer('jumlah_sumur_pompa_unit')->unsigned();
            $table->integer('jumlah_sambungan_pdam_sr')->unsigned();
            $table->integer('jumlah_kran_umum_unit')->unsigned();
            $table->integer('jumlah_pah_unit')->unsigned();
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
        Schema::drop('profil_desa_kelurahans');
    }
}
