<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressFisikKeuangan extends BaseApiModel
{
	protected $fillable = [
	    'kode_wilayah',
	    'jenis_infrastruktur',
	    'dimensi',
	    'rab_blm_pekerjaan_sipil',
	    'rab_blm_operasional',
	    'rab_swadaya_pekerjaan_sipil',
	    'rab_swadaya_operasional',
	    'swadaya_in_kind_material',
	    'swadaya_in_kind_material_rp',
	    'swadaya_in_kind_lahan_ha',
	    'swadaya_in_kind_lahan_rp',
	    'swadaya_in_kind_hok',
	    'swadaya_in_kind_hok_rp',
	];

	protected $forms = [
		'kode_wilayah' => 'required|type:hidden',
	    'jenis_infrastruktur' => 'required|type:string',
	    'dimensi' => 'required|type:string',
	    'rab_blm_pekerjaan_sipil' => 'required|type:currency|caption:BLM Pekerjaan Sipil',
	    'rab_blm_operasional' => 'required|type:currency|caption:BLM Pekerjaan Operasional',
	    'rab_swadaya_pekerjaan_sipil' => 'required|type:currency|caption:Swadaya Pekerjaan Sipil',
	    'rab_swadaya_operasional' => 'required|type:currency|caption:Swadaya Operasional',
	    'swadaya_in_kind_material' => 'required|type:string|caption:Jenis Material',
	    'swadaya_in_kind_material_rp' => 'required|type:currency|caption:Nilai Material',
	    'swadaya_in_kind_lahan_ha' => 'required|type:decimal|caption:Luas Lahan (Ha)',
	    'swadaya_in_kind_lahan_rp' => 'required|type:currency|caption:Nilai Lahan (Rp)',
	    'swadaya_in_kind_hok' => 'required|type:numeric|caption:HOK',
	    'swadaya_in_kind_hok_rp' => 'required|type:currency|caption:Nilai HOK',
	];

	protected $rules = [
		'kode_wilayah' => 'required|numeric',
	    'jenis_infrastruktur' => 'required',
	    'dimensi' => 'required',
	    'rab_blm_pekerjaan_sipil' => 'required|numeric',
	    'rab_blm_operasional' => 'required|numeric',
	    'rab_swadaya_pekerjaan_sipil' => 'required|numeric',
	    'rab_swadaya_operasional' => 'required|numeric',
	    'swadaya_in_kind_material' => 'required',
	    'swadaya_in_kind_material_rp' => 'required|numeric',
	    'swadaya_in_kind_lahan_ha' => 'required|numeric',
	    'swadaya_in_kind_lahan_rp' => 'required|numeric',
	    'swadaya_in_kind_hok' => 'required|numeric',
	    'swadaya_in_kind_hok_rp' => 'required|numeric',
	];

	protected $attributes = [
		'kode_wilayah' => '',
	    'jenis_infrastruktur' => '',
	    'dimensi' => '',
	    'rab_blm_pekerjaan_sipil' => '0',
	    'rab_blm_operasional' => '0',
	    'rab_swadaya_pekerjaan_sipil' => '0',
	    'rab_swadaya_operasional' => '0',
	    'swadaya_in_kind_material' => '',
	    'swadaya_in_kind_material_rp' => '0',
	    'swadaya_in_kind_lahan_ha' => '0',
	    'swadaya_in_kind_lahan_rp' => '0',
	    'swadaya_in_kind_hok' => '0',
	    'swadaya_in_kind_hok_rp' => '0',
	];
}
