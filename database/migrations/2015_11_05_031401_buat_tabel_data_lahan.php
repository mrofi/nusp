<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelDataLahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lahans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->string('nama_rt_rw', 20);
            $table->string('jenis_infrastruktur');
            $table->decimal('lahan_luas_m2', 8,3)->unsigned();
            $table->string('lahan_status');
            $table->enum('lahan_surat_hibah', ['ada', 'tidak ada']);
            $table->string('lahan_akses_jalan');
            $table->decimal('koordinat_latitude', 8, 5);
            $table->decimal('koordinat_longitude', 8, 5);
            $table->integer('pemanfaat_jumlah_kk')->unsigned();
            $table->integer('pemanfaat_jumlah_kk_miskin')->unsigned();
            $table->integer('pemanfaat_jumlah_jiwa')->unsigned();
            $table->integer('pemanfaat_jumlah_perempuan')->unsigned();
            $table->integer('pemanfaat_jumlah_miskin')->unsigned();
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
        Schema::drop('data_lahans');
    }
}
