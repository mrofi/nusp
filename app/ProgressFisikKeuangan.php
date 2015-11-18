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
	    'swadaya_in_kind_lahan_m2',
	    'swadaya_in_kind_lahan_rp',
	    'swadaya_in_kind_hok',
	    'swadaya_in_kind_hok_rp',
	];

	protected $forms = [
		'kode_wilayah' => 'required|type:hidden',
	    'jenis_infrastruktur' => 'required|type:string',
	    'dimensi' => 'required|type:string',
	    'rab_blm_pekerjaan_sipil' => 'required|type:currency',
	    'rab_blm_operasional' => 'required|type:currency',
	    'rab_swadaya_pekerjaan_sipil' => 'required|type:currency',
	    'rab_swadaya_operasional' => 'required|type:currency',
	    'swadaya_in_kind_material' => 'required|type:string',
	    'swadaya_in_kind_material_rp' => 'required|type:currency',
	    'swadaya_in_kind_lahan_m2' => 'required|type:numeric',
	    'swadaya_in_kind_lahan_rp' => 'required|type:currency',
	    'swadaya_in_kind_hok' => 'required|type:numeric',
	    'swadaya_in_kind_hok_rp' => 'required|type:currency',
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
	    'swadaya_in_kind_lahan_m2' => 'required|numeric',
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
	    'swadaya_in_kind_lahan_m2' => '0',
	    'swadaya_in_kind_lahan_rp' => '0',
	    'swadaya_in_kind_hok' => '0',
	    'swadaya_in_kind_hok_rp' => '0',
	];
}
