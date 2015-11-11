<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis extends BaseApiModel
{
    protected $table = 'tahap_perencanaan_survey_kampung_sendiri_review_pjm_pronangkiss';
    
    protected $fillable = ['kode_wilayah', 'tanggal_mulai', 'tanggal_selesai'];

    protected $forms = [
        'kode_wilayah' => 'required|type:hidden',
        'tanggal_mulai' => 'required|type:date',
        'tanggal_selesai' => 'required|type:date',
    ];

    protected $rules = [
        'kode_wilayah' => 'required|numeric',
        'tanggal_mulai' => 'required',
        'tanggal_selesai' => 'required',
    ];

    protected $attributes = [
        'kode_wilayah' => '',
        'tanggal_mulai' => '',
        'tanggal_selesai' => '',
    ];

    public static $title = 'Survey Kampung Sendiri &amp; Review RJM Pronangkis';

    public function getWilayahAttribute()
    {
        return Wilayah::get_desa_kel($this->kode_wilayah);
    }
}

