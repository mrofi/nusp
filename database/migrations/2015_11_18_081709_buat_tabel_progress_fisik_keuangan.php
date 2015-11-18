<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelProgressFisikKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_fisik_keuangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->string('jenis_infrastruktur');
            $table->string('dimensi', 20);
            $table->bigInteger('rab_blm_pekerjaan_sipil')->unsigned();
            $table->bigInteger('rab_blm_operasional')->unsigned();
            $table->bigInteger('rab_swadaya_pekerjaan_sipil')->unsigned();
            $table->bigInteger('rab_swadaya_operasional')->unsigned();
            $table->text('swadaya_in_kind_material');
            $table->bigInteger('swadaya_in_kind_material_rp')->unsigned();
            $table->decimal('swadaya_in_kind_lahan_m2', 12, 3);
            $table->bigInteger('swadaya_in_kind_lahan_rp')->unsigned();
            $table->integer('swadaya_in_kind_hok')->unsigned();
            $table->bigInteger('swadaya_in_kind_hok_rp')->unsigned();
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
        Schema::drop('progress_fisik_keuangans');
    }
}
