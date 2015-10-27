<?php

namespace App\Http\Controllers\Api;

use App\Wilayah as Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class TahapKegiatan extends ApiController
{
	protected $model;

	protected $tahapanPersiapan = [
		\App\TahapPersiapanSosialisasiKelurahan::class,
		\App\TahapPersiapanIdentifikasiKelembagaan::class,
		\App\TahapPersiapanRembugKhususPerempuanPertama::class,
		\App\TahapPersiapanMusyawarahKelurahanPertama::class,
	];
	protected $tahapanPerencanaan = [
		\App\TahapPerencanaanOjtTimSks::class,
		\App\TahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis::class,
		\App\TahapPerencanaanMusyawarahKelurahanKedua::class,
		\App\TahapPerencanaanPenyusunanDokumenNuap::class,
		\App\TahapPerencanaanVerifikasiDanKonsolidasiNuap::class,
		\App\TahapPerencanaanRevisiDokumenNuap::class,
		\App\TahapPerencanaanMusyawarahKelurahanKetiga::class,
		\App\TahapPerencanaanPenyusunanRkm::class,
		\App\TahapPerencanaanVerifikasiFinalisasiDokumenRkm::class,
	];
	protected $tahapanKonstruksi = [
		\App\TahapKonstruksiKontrakSp3::class,
		\App\TahapKonstruksiRembugKhususPerempuanKedua::class,
		\App\TahapKonstruksiMusyawarahKelurahanKeempat::class,
		\App\TahapKonstruksiPelaksanaanFisik::class,
	];
	protected $tahapanPascaKonstruksi = [
		\App\TahapPascaKonstruksiMusyawarahKelurahanKelima::class,
		\App\TahapPascaKonstruksiSerahTerimaPekerjaan::class,
		\App\TahapPascaKonstruksiPemanfaatan::class,
		\App\TahapPascaKonstruksiPemeliharaan::class,
	];

    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

	public function all(Request $request, $kode_wilayah = '')
	{
		return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah)
        {            
        	$persiapan = $this->persiapan($request, $kode_wilayah, true)['persentase'];
        	$perencanaan = $this->perencanaan($request, $kode_wilayah, true)['persentase'];
        	$konstruksi = $this->konstruksi($request, $kode_wilayah, true)['persentase'];
        	$pascaKonstruksi = $this->pascaKonstruksi($request, $kode_wilayah, true)['persentase'];
            $wilayah = Model::get_wilayah($kode_wilayah);
            return compact('persiapan', 'perencanaan', 'konstruksi', 'pascaKonstruksi', 'wilayah');
        });
	}

    public function persiapan(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
        	$tahapan = [];
        	$done = 0;

        	foreach($this->tahapanPersiapan as $tahap)
        	{
        		$class = new \ReflectionClass($tahap);
        		$className = strtolower($class->getShortName());
        		$tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
        		if (count($did)) $done++;
        	}         

        	$persentase = floor($done / count($this->tahapanPersiapan) * 100);

        	$wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah')); 
        });
    }

    public function perencanaan(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
        	$tahapan = [];
        	$done = 0;

        	foreach($this->tahapanPerencanaan as $tahap)
        	{
        		$class = new \ReflectionClass($tahap);
        		$className = strtolower($class->getShortName());
        		$tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
        		if (count($did)) $done++;
        	}         

        	$persentase = floor($done / count($this->tahapanPerencanaan) * 100);
        	
        	$wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah')); 
        });
    }

    public function konstruksi(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
        	$tahapan = [];
        	$done = 0;

        	foreach($this->tahapanKonstruksi as $tahap)
        	{
        		$class = new \ReflectionClass($tahap);
        		$className = strtolower($class->getShortName());
        		$tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
        		if (count($did)) $done++;
        	}         

        	$persentase = floor($done / count($this->tahapanKonstruksi) * 100);

        	$wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah')); 
        });
    }

    public function pascaKonstruksi(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
        	$tahapan = [];
        	$done = 0;

        	foreach($this->tahapanPascaKonstruksi as $tahap)
        	{
        		$class = new \ReflectionClass($tahap);
        		$className = strtolower($class->getShortName());
        		$tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
        		if (count($did)) $done++;
        	}         

        	$persentase = floor($done / count($this->tahapanPascaKonstruksi) * 100);

        	$wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah')); 
        });
    }
}
