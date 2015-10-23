<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UbahTabelProfilDesaKelurahanDropColumnPenduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profil_desa_kelurahans', function (Blueprint $table) {
            $table->dropColumn('jumlah_penduduk');
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
            $table->integer('jumlah_penduduk')->unsigned();
        });
    }
}
