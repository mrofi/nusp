<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelLaporanProgressFisikKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_progress_fisik_keuangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->integer('progress_fisik_keuangan_id')->unsigned();
            $table->date('periode');
            $table->bigInteger('blm')->unsigned();
            $table->bigInteger('swadaya')->unsigned();
            $table->text('swadaya_in_kind_material');
            $table->bigInteger('swadaya_in_kind_material_rp')->unsigned();
            $table->decimal('swadaya_in_kind_lahan_m2', 12, 3);
            $table->bigInteger('swadaya_in_kind_lahan_rp')->unsigned();
            $table->integer('swadaya_in_kind_hok')->unsigned();
            $table->bigInteger('swadaya_in_kind_hok_rp')->unsigned();
            $table->decimal('progress_fisik_persentase', 5, 2);
            $table->integer('tenaga_kerja_laki_laki')->unsigned();
            $table->integer('tenaga_kerja_perempuan')->unsigned();
            $table->integer('hari_orang_kerja')->unsigned();
            $table->integer('jumlah_insentif')->unsigned();
            $table->enum('laporan_penggunaan_material', ['ada', 'tidak ada']);
            $table->enum('daftar_peserta_hadir', ['ada', 'tidak ada']);
            $table->enum('pencatatan_dalam_bku', ['ada', 'tidak ada']);
            $table->enum('kelengkapan_bukti_lainnya', ['ada', 'tidak ada']);
            $table->text('masalah_pelaksanaan');
            $table->text('tindak_lanjut');
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
        Schema::drop('laporan_progress_fisik_keuangans');
    }
}
