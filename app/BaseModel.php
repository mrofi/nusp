<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $class_name = null;

    protected $fillable = [];

    protected $forms = [];

    protected $dependencies = [];
    
    protected $rules = [];
    
    protected $error_messages = [];
    
    protected $attributes = [];
    
    public $additionalAttributes = [];

    protected $init_data = [];

    public function get_dependencies()
    {
        return $this->dependencies;
    }

    public function get_forms()
    {
        return $this->forms;
    }

    protected function get_model_config()
    {
        if ($this->class_name !== null) return;
        $class = new \ReflectionClass($this);
        $className = strtolower($class->getShortName());
        if ($attributes = config("nusp.model.{$className}.attributes")) $this->attributes = $attributes;
        if ($init_data = config("nusp.model.{$className}.init_data")) $this->init_data = $init_data;
        if ($error_messages = config("nusp.model.{$className}.error_messages")) $this->error_messages = $error_messages;

        $this->class_name = $className;
    }
    
    public function get_rules($id = 'null')
    {
        $rules = json_encode($this->rules);
        $rules = str_replace('__id__', $id, $rules);
        $rules = json_decode($rules, true);
        
        return $rules;
    }
    
    public function get_error_messages()
    {
        $this->get_model_config();
        return $this->error_messages;
    }
    
    public function get_attributes()
    {
        $this->get_model_config();
        return $this->attributes;
    }

    public function get_init_data()
    {
        $this->get_model_config();
        return $this->init_data;
    }

    public function get_fields()
    {
        return $this->fillable;
    }

    public function excelDataKabKota()
    {

        $allData = [];

        foreach(self::all()->toArray() as $data) 
        {
            $allData[$data['kode_wilayah']] = $data;
        }

        $wilayah =  auth()->user()->wilayah;
        // return $wilayah;

        $datas = [];

        $no = 0;

        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;

            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                $data = isset($allData[$kabKota['kode']]) ? $allData[$kabKota['kode']] : [];

                if (count($data)) $data = array_combine($this->get_captions(), array_only($data, $this->get_fields()));

                $newKabKota = array_merge(['No' => ++$no, 'Propinsi' => $propinsi['nama_wilayah'], 'Kabupaten / Kota' => $kabKota['nama_wilayah']], $data);
                
                $datas[] = $newKabKota;
            }
        }

        return $datas;
    }

    public function excelDesaKel()
    {

        $allData = [];

        foreach(self::all()->toArray() as $data) 
        {
            $allData[$data['kode_wilayah']] = $data;
        }

        $wilayah =  auth()->user()->wilayah;
        
        $datas = [];
        
        $no = 0;
        
        foreach ($wilayah as $kode_p => $propinsi) 
        {
            if (!isset($propinsi['kabKotas'])) continue;

            foreach ($propinsi['kabKotas'] as $kode_kk => $kabKota) 
            {
                if (!isset($kabKota['kecs'])) continue;

                foreach ($kabKota['kecs'] as $kode_k => $kec) 
                {
                    if (!isset($kec['desaKels'])) continue;

                    foreach ($kec['desaKels'] as $kode_dk => $desaKel) 
                    {
                        $data = isset($allData[$desaKel['kode']]) ? $allData[$desaKel['kode']] : [];

                        if (count($data)) $data = array_combine($this->get_captions(), array_only($data, $this->get_fields()));
                        
                        $newDesaKel = array_merge(['No' => ++$no, 'Propinsi' => $propinsi['nama_wilayah'], 'Kabupaten / Kota' => $kabKota['nama_wilayah'], 'Kecamatan' => isset($kec['nama_wilayah']) ? $kec['nama_wilayah'] : '', 'Desa / Kelurahan' => $desaKel['nama_wilayah']], $data);
                
                        $datas[] = $newDesaKel;
                    }
                }
            }

        }

        return $datas;
    }

    public function get_caption($key='')
    {
        if (!isset($this->forms[$key])) return ucwords(nusp_studlyToStr($key));

        $forms = explode('|', $this->forms[$key]);

        $formats = [];

        foreach ($forms as $form)
        {
            $f = explode(':', $form);

            if (count($f) == 2) 
            {
                $formats[$f[0]] = strip_tags( html_entity_decode($f[1]) );
            }
        }

        extract($formats);

       return $caption = isset($caption) ? $caption : ucwords(nusp_studlyToStr($key));
    }

    public function get_captions()
    {
        $captions = [];

        foreach ($this->fillable as $key) 
        {
            $captions[] = $this->get_caption($key);
        }

        return $captions;
    }
}
