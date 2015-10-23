<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UbahTabelProfilDesaKelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profil_desa_kelurahans', function (Blueprint $table) {
            $table->string('nama_bkm', 50);
            $table->string('status_keberdayaan_bkm');
            $table->decimal('luas_kawasan', 10, 3)->unsigned();
            $table->string('tipografi_karakteristik');
            $table->decimal('koordinat_latitude', 8, 5);
            $table->decimal('koordinat_longitude', 8, 5);
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
            $table->dropColumn('nama_bkm');
            $table->dropColumn('status_keberdayaan_bkm');
            $table->dropColumn('luas_kawasan');
            $table->dropColumn('tipografi_karakteristik');
            $table->dropColumn('koordinat_latitude');
            $table->dropColumn('koordinat_longitude');
        });
    }
}
