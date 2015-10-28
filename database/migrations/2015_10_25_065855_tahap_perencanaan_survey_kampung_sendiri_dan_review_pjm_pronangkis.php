<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TahapPerencanaanSurveyKampungSendiriDanReviewPjmPronangkis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap_perencanaan_survey_kampung_sendiri_review_pjm_pronangkiss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_wilayah', 20);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
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
        Schema::drop('tahap_perencanaan_survey_kampung_sendiri_review_pjm_pronangkiss');
    }
}
