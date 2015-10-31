<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UbahTabelProfilDesaKelurahanAddColumPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profil_desa_kelurahans', function (Blueprint $table) {
            $table->integer('pendidikan_sd')->unsigned();
            $table->integer('pendidikan_smp')->unsigned();
            $table->integer('pendidikan_sma')->unsigned();
            $table->integer('pendidikan_perguruan_tinggi')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profil_desa_kelurahans', function (Blueprint $table) {
            $table->dropColumn('pendidikan_sd');
            $table->dropColumn('pendidikan_smp');
            $table->dropColumn('pendidikan_sma');
            $table->dropColumn('pendidikan_perguruan_tinggi');
        });
    }
}
