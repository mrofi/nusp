<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPascaKonstruksiSerahTerimaPekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_pasca_konstruksi_serah_terima_pekerjaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->date('tppi_ke_bkm');
            $table->date('bkm_ke_staker_ppk_nusp_2');
            $table->date('ppk_ke_kpp');
            $table->integer('foto_id')->unsigned()->nullable();
            $table->integer('file_tppi_ke_bkm')->unsigned()->nullable();
            $table->integer('file_bkm_ke_staker_ppk_nusp_2')->unsigned()->nullable();
            $table->integer('file_ppk_ke_kpp')->unsigned()->nullable();
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
        Schema::drop('tahap_pasca_konstruksi_serah_terima_pekerjaans');
    }
}

