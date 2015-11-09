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
        \App\TahapPerencanaanPelatihanBkm::class,
        \App\TahapPerencanaanSurveyKampungSendiriReviewPjmPronangkis::class,
        \App\TahapPerencanaanRembugKhususPerempuanKedua::class,
        \App\TahapPerencanaanMusyawarahKelurahanKedua::class,
        \App\TahapPerencanaanPenyusunanDokumenNuap::class,
        \App\TahapPerencanaanVerifikasiDanKonsolidasiNuap::class,
        \App\TahapPerencanaanRevisiDokumenNuap::class,
        \App\TahapPerencanaanMusyawarahKelurahanKetiga::class,
        \App\TahapPerencanaanPenyusunanRkm::class,
        \App\TahapPerencanaanVerifikasiFinalisasiDokumenRkm::class,
        \App\TahapPerencanaanPembentukanTppi::class,
        \App\TahapPerencanaanPembentukanKpp::class,
    ];
    protected $tahapanKonstruksi = [
        \App\TahapKonstruksiKontrakSp3::class,
        \App\TahapKonstruksiRembugKhususPerempuanKetiga::class,
        \App\TahapKonstruksiMusyawarahKelurahanKeempat::class,
        \App\TahapKonstruksiPelaksanaanFisik::class,
        \App\TahapKonstruksiTahap1::class,
        \App\TahapKonstruksiTahap2::class,
    ];
    protected $tahapanPascaKonstruksi = [
        \App\TahapPascaKonstruksiMusyawarahKelurahanKelima::class,
        \App\TahapPascaKonstruksiSerahTerimaPekerjaan::class,
        \App\TahapPascaKonstruksiPemanfaatan::class,
        \App\TahapPascaKonstruksiPemeliharaan::class,
        \App\TahapPascaKonstruksiTahap3::class,
    ];

    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    //tahapan[persiapan][tahapansss]

    public function index(Request $request)
    {
    	$tahapans = [];
    	// persiapan
        $counter = [];
        foreach($this->tahapanPersiapan as $tahap)
        {
            $class = new \ReflectionClass($tahap);
            $className = $class->getShortName();
            $tahapan = with(new $tahap)->all()->toArray();
    		foreach ($tahapan as $t) 
    		{
                $t['title'] = $tahap::$title;
                $tahapans[$t['kode_wilayah']]['persiapan'][$className] = $t;
                if (!isset($persentase[$t['kode_wilayah']])) $persentase[$t['kode_wilayah']] = [];
                if (!isset($counter[$t['kode_wilayah']])) $counter[$t['kode_wilayah']] = 0;
                $counter[$t['kode_wilayah']]++;
                $persentase[$t['kode_wilayah']]['persiapan'] = floor($counter[$t['kode_wilayah']] / count($this->tahapanPersiapan) * 100);
    		}
    	}  

        // perencanaan
        $counter = [];
    	foreach($this->tahapanPerencanaan as $tahap)
    	{
    		$class = new \ReflectionClass($tahap);
    		$className = $class->getShortName();
    		$tahapan = with(new $tahap)->all();
    		foreach ($tahapan as $t) 
    		{
                $t['title'] = $tahap::$title;
    			$tahapans[$t['kode_wilayah']]['perencanaan'][$className] = $t;
                if (!isset($persentase[$t['kode_wilayah']])) $persentase[$t['kode_wilayah']] = [];
                if (!isset($counter[$t['kode_wilayah']])) $counter[$t['kode_wilayah']] = 0;
                $counter[$t['kode_wilayah']]++;
                $persentase[$t['kode_wilayah']]['perencanaan'] = floor($counter[$t['kode_wilayah']] / count($this->tahapanPerencanaan) * 100);
            }
    	}         

    	// konstruksi
        $counter = [];
    	foreach($this->tahapanKonstruksi as $tahap)
    	{
    		$class = new \ReflectionClass($tahap);
    		$className = $class->getShortName();
    		$tahapan = with(new $tahap)->all();
    		foreach ($tahapan as $t) 
    		{
                $t['title'] = $tahap::$title;
    			$tahapans[$t['kode_wilayah']]['konstruksi'][$className] = $t;
                if (!isset($persentase[$t['kode_wilayah']])) $persentase[$t['kode_wilayah']] = [];
                if (!isset($counter[$t['kode_wilayah']])) $counter[$t['kode_wilayah']] = 0;
                $counter[$t['kode_wilayah']]++;
                $persentase[$t['kode_wilayah']]['konstruksi'] = floor($counter[$t['kode_wilayah']] / count($this->tahapanKonstruksi) * 100);
    		}
    	}  

    	// persiapan
        $counter = [];
    	foreach($this->tahapanPascaKonstruksi as $tahap)
    	{
    		$class = new \ReflectionClass($tahap);
    		$className = $class->getShortName();
    		$tahapan = with(new $tahap)->all();
    		foreach ($tahapan as $t) 
    		{
                $t['title'] = $tahap::$title;
    			$tahapans[$t['kode_wilayah']]['pasca_konstruksi'][$className] = $t;
                if (!isset($counter[$t['kode_wilayah']])) $counter[$t['kode_wilayah']] = 0;
                if (!isset($persentase[$t['kode_wilayah']])) $persentase[$t['kode_wilayah']] = [];
                $counter[$t['kode_wilayah']]++;
                $persentase[$t['kode_wilayah']]['pasca_konstruksi'] = floor($counter[$t['kode_wilayah']] / count($this->tahapanPascaKonstruksi) * 100);
    		}
    	}  

        $wilayah =  auth()->user()->wilayah;
        // return $wilayah;

        $propinsis = [];
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;
            $kabKotas = [];
            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                if (!isset($kabKota['kecs'])) continue;
                $desaKels = [];
                foreach ($kabKota['kecs'] as $kode_k => $kec) 
                {
                    if (!isset($kec['desaKels'])) continue;
                    foreach ($kec['desaKels'] as $kode_dk => $desaKel) 
                    {
                        $newDesaKel = ['desaKel' => $desaKel['nama_wilayah'], 'slug' => str_slug('wilayah '.$desaKel['nama_wilayah'], '-'), 'id' => $desaKel['kode'], 'role_id' => $desaKel['role_id'], 'tahapan' =>  array_key_exists($desaKel['kode'], $tahapans) ? $tahapans[$desaKel['kode']] : []];
                        $newDesaKel['tahapan']['persentase'] = isset($persentase[$desaKel['kode']]) ? $persentase[$desaKel['kode']] : [];
                        $desaKels[] = $newDesaKel;
                    }
                }

                $newKabKota = ['kabKota' => $kabKota['nama_wilayah'], 'slug' => str_slug($kabKota['nama_wilayah']), 'id' => $kabKota['kode'], 'role_id' => $kabKota['role_id'], 'desaKels' => $desaKels];
                
                $kabKotas[] = $newKabKota;
            }

            $newPropinsi = ['propinsi' => $propinsi['nama_wilayah'], 'slug' => str_slug('propinsi '.$propinsi['nama_wilayah']), 'id' => $propinsi['kode'], 'role_id' => $propinsi['role_id'], 'kabKotas' => $kabKotas];

            $propinsis[] = $newPropinsi;
        }

        return $propinsis;
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
            $allowEdit = auth()->user()->hasRole(1, $kode_wilayah);
            return compact('persiapan', 'perencanaan', 'konstruksi', 'pascaKonstruksi', 'wilayah', 'allowEdit');
        });
	}

    public function persiapan(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
            $allowEdit = auth()->user()->hasRole(1, $kode_wilayah);

            $allowVerify = auth()->user()->hasRole(3, $kode_wilayah);

            $tahapan = [];
            $done = 0;

            foreach($this->tahapanPersiapan as $tahap)
            {
                $class = new \ReflectionClass($tahap);
                $className = strtolower($class->getShortName());
                $tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
                if (count($did)) 
                {
                    if ($did->verified_at == null && !$allowEdit && !$allowVerify) 
                    {
                        $tahapan[$className] = null;
                    }
                    else
                    {
                        $done++;
                    }
                }
            }         

            $persentase = floor($done / count($this->tahapanPersiapan) * 100);

            $wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah', 'allowEdit', 'allowVerify')); 
        });
    }

    public function perencanaan(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
            $allowEdit = auth()->user()->hasRole(1, $kode_wilayah);

            $allowVerify = auth()->user()->hasRole(3, $kode_wilayah);

            $tahapan = [];
            $done = 0;

            foreach($this->tahapanPerencanaan as $tahap)
            {
                $class = new \ReflectionClass($tahap);
                $className = strtolower($class->getShortName());
                $tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
                if (count($did)) 
                {
                    if ($did->verified_at == null && !$allowEdit && !$allowVerify) 
                    {
                        $tahapan[$className] = null;
                    }
                    else
                    {
                        $done++;
                    }
                }
            }         

            $persentase = floor($done / count($this->tahapanPerencanaan) * 100);
            
            $wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah', 'allowEdit', 'allowVerify')); 
        });
    }

    public function konstruksi(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
            $allowEdit = auth()->user()->hasRole(1, $kode_wilayah);
            
            $allowVerify = auth()->user()->hasRole(3, $kode_wilayah);
            
            $tahapan = [];
            $done = 0;

            foreach($this->tahapanKonstruksi as $tahap)
            {
                $class = new \ReflectionClass($tahap);
                $className = strtolower($class->getShortName());
                $tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
                if (count($did)) 
                {
                    if ($did->verified_at == null && !$allowEdit && !$allowVerify) 
                    {
                        $tahapan[$className] = null;
                    }
                    else
                    {
                        $done++;
                    }
                }
            }         

            $persentase = floor($done / count($this->tahapanKonstruksi) * 100);

            $wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah', 'allowEdit', 'allowVerify')); 
        });
    }

    public function pascaKonstruksi(Request $request, $kode_wilayah = '', $tanpa_wilayah = false)
    {

    	return $this->userAuthorize(null, $kode_wilayah, function() use ($request, $kode_wilayah, $tanpa_wilayah)
        {   
            $allowEdit = auth()->user()->hasRole(1, $kode_wilayah);
            
            $allowVerify = auth()->user()->hasRole(3, $kode_wilayah);
            
            $tahapan = [];
            $done = 0;

            foreach($this->tahapanPascaKonstruksi as $tahap)
            {
                $class = new \ReflectionClass($tahap);
                $className = strtolower($class->getShortName());
                $tahapan[$className] = $did = with(new $tahap)->where('kode_wilayah', $kode_wilayah)->first();
                if (count($did)) 
                {
                    if ($did->verified_at == null && !$allowEdit && !$allowVerify) 
                    {
                        $tahapan[$className] = null;
                    }
                    else
                    {
                        $done++;
                    }
                }
            }         

            $persentase = floor($done / count($this->tahapanPascaKonstruksi) * 100);

            $wilayah = ($tanpa_wilayah) ?: Model::get_wilayah($kode_wilayah);

            return array_merge($tahapan, compact('persentase', 'wilayah', 'allowEdit', 'allowVerify')); 
        });
    }
}
