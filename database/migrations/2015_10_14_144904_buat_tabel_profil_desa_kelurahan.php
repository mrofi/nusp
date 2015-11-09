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
            $table->decimal('luas_wilayah', 10, 3)->unsigned(); // dalam stauan ha
            // $table->integer('jumlah_penduduk')->unsigned();
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
            // $table->integer('jumlah_sambungan_pdam_sr')->unsigned();
            $table->integer('jumlah_kran_umum_unit')->unsigned();
            $table->integer('jumlah_pah_unit')->unsigned();

            $table->string('nama_bkm', 50);
            $table->string('status_keberdayaan_bkm');
            $table->decimal('luas_kawasan', 10, 3)->unsigned();
            $table->string('tipografi_karakteristik');
            $table->decimal('koordinat_latitude', 8, 5);
            $table->decimal('koordinat_longitude', 8, 5);

            $table->integer('pendidikan_sd')->unsigned();
            $table->integer('pendidikan_smp')->unsigned();
            $table->integer('pendidikan_sma')->unsigned();
            $table->integer('pendidikan_perguruan_tinggi')->unsigned();

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
        Schema::drop('profil_desa_kelurahans');
    }
}
