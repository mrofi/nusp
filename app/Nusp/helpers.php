<?php

function nusp_arrayMapRecursive($callback, $array) 
{
    foreach ($array as $key => $value) {
        if (is_array($array[$key])) {
            $array[$key] = nusp_arrayMapRecursive($callback, $array[$key]);
        }
        else {
            $array[$key] = call_user_func($callback, $array[$key]);
        }
    }
    return $array;
}

function nusp_password($password = null)
{
    $salt = config('nusp.salt');
    if ($password == null) $password = str_random(5);
    
    return sha1(str_replace('__password__', $password, $salt));
}

function nusp_dateToShow($date = null)
{
    if ($date == null) $date = \Carbon::now()->format('Y-m-d');
    $date = \Carbon::createFromFormat('Y-m-d', $date);
    return $date->format(config('nusp.phpdateformat'));
}

function nusp_dateTimeToShow($date)
{
    $date = \Carbon::createFromFormat('Y-m-d H:i:s', $date);
    return $date->format(config('nusp.phpdatetimeformat'));
}

function nusp_dateToDB($date)
{
    $date = \Carbon::createFromFormat(config('nusp.phpdateformat'), $date);
    return $date->toDateString();
}

function nusp_dateTimeToDB($date)
{
    $date = \Carbon::createFromFormat(config('nusp.phpdateformat'), $date);
    return $date->toDateTimeString();
}

function nusp_isRound($value)
{
    if (!is_numeric($value)) return false;
    return floor($value) == $value;
}

function nusp_round($value, $decimal = ',')
{
    $value = nusp_isRound($value) ? floor($value) : (!is_numeric($value) ? $value : floatval($value));   
    return preg_replace('/\./', $decimal, $value); 
}

function nusp_theme($theme = null)
{
    if ($theme == null) return config('nusp.theme');
    
    config(['nusp.theme' => $theme]);
}

function nusp_getThemeView($file = 'template')
{
    $theme = config('nusp.theme');
    return "themes.{$theme}.{$file}";
}

function nusp_asset($location = '')
{
    $location = (('' == $s = config('nusp.subfolder')) ? '' : '/'.$s).'/'.$location;
    // return (Request::secure()) ? secure_asset($location) : asset($location);

    return $location;
}

function nusp_themeAsset($location = '')
{
    $subfolder = ('' == $s = config('nusp.subfolder')) ? '' : $s.'/';
    $location =  '/'.$subfolder.'themes/'.config('nusp.theme').'/'.$location;
    // return (Request::secure()) ? secure_asset($location) : asset($location);

    return $location;
}

function nusp_alphaToNumber($dest)
{
    if ($dest)
        return ord(strtolower($dest)) - 96;
    else
        return 0;
}

function nusp_toCurrency($num, $str = 'Rp. ')
{
    $num = intval(preg_replace('/,.*|[^0-9]/', '', ceil($num)));
    return $str.strrev(implode('.',str_split(strrev(strval($num)),3)));
}

function nusp_activeMenu($page, $thePage)
{
    if ($page == $thePage) return 'active';
}

function nusp_studlyToStr($studly = '')
{
    return implode(' ', explode('_', $studly));
}

function nusp_form($name, $format = '', $bsCols = '')
{
    if ($format == '') return '';

    $formats = ['required' => false];

    foreach(explode('|', $format) as $f)
    {
        if ($f == 'required') 
        {
            $formats['required'] = true;
            continue;
        }
        
        $f = explode(':', $f);
        
        if (count($f) == 2) 
        {
            $formats[$f[0]] = $f[1];
        }
    }

    extract($formats);

    if (!isset($type)) return '';

    if (!isset($caption)) $caption = ucwords(nusp_studlyToStr($name));

    if (!isset($default)) $default = '';

    $label = '<label class="control-label col-sm-4" for="'.$name.'">'.$caption.'</label>';

    $caption = strip_tags($caption);

    if ($type == 'hidden')
    {
        return \Form::hidden($name, $default, ['id' => $name]);
    }

    if ($type == 'numeric') 
    {
        if ($bsCols == '') $bsCols = 'col-sm-4';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    '.\Form::text($name, $default, ['id' => $name, 'class' => 'form-control input-mask-numeric', 'placeholder' => $caption]).'
                </div>
            </div>
        ';
    }

    if ($type == 'decimal') 
    {
        if ($bsCols == '') $bsCols = 'col-sm-4';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    '.\Form::text($name, $default, ['id' => $name, 'class' => 'form-control input-mask-decimal', 'placeholder' => $caption]).'
                </div>
            </div>
        ';
    }

    if ($type == 'currency') 
    {
        if ($bsCols == '') $bsCols = 'col-sm-4';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    '.\Form::text($name, $default, ['id' => $name, 'class' => 'form-control input-mask-currency', 'placeholder' => $caption]).'
                </div>
            </div>
        ';
    }

    if ($type == 'string')
    {
        if ($bsCols == '') $bsCols = 'col-sm-6';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    '.\Form::text($name, $default, ['id' => $name, 'class' => 'form-control', 'placeholder' => $caption]).'
                </div>
            </div>
        ';
    }

    if ($type == 'text') {
        if ($bsCols == '') $bsCols = 'col-sm-7';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    '.\Form::textarea($name, $default, ['id' => $name, 'class' => 'form-control', 'placeholder' => $caption]).'
                </div>
            </div>
        ';
    }

    if ($type == 'date') {
        if ($bsCols == '') $bsCols = 'col-sm-4';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    '.\Form::text($name, $default, ['data-provide' => 'datepicker', 'id' => $name, 'class' => 'form-control input-date', 'placeholder' => $caption, 'autocomplete' => 'off']).'
                </div>
            </div>
        ';
    }

    if ($type == 'combo') {
        if ($bsCols == '') $bsCols = 'col-sm-4';
        $list = [];
        if (isset($value)) 
        {
            $values = explode(',', $value);
            foreach ($values as $v) 
            {
                $av = explode('=', $v);
                $list[$av[0]] = count($av) > 1 ? $av[1] : $av[0];

            }
        }
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    '.\Form::select($name, $list, $default, ['id' => $name, 'class' => 'form-control', 'placeholder' => $caption]).'
                </div>
            </div>
        ';
    }

    if ($type == 'image') {
        if ($bsCols == '') $bsCols = 'col-sm-4';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    <input type="hidden" name="foto_id" id="foto_id">           
                    <div class="fileinput fileinput-new" data-provides="fileinput" data-action="'.nusp_asset('api/foto').'" data-target="#foto_id">
                        <div class="fileinput-preview thumbnail hide" data-trigger="fileinput" style="max-height: 150px;"> </div>
                        <div>
                            <span class="btn btn-default btn-file" style="background-color: #fff; border: 0">
                                <span class="fileinput-new">Pilih Foto</span>
                                <span class="fileinput-exists hide">Ganti</span>
                                <input type="file">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists hide" data-dismiss="fileinput">Hapus</a>
                        </div>
                    </div>
                    <div class="progress-upload hide">
                        <div class="progress progress-xxs">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                        <div class="text-center progress-status">Sedang mengupload...</div>
                    </div>
                </div>
            </div>
        ';
    }

    if ($type == 'file') {
        if ($bsCols == '') $bsCols = 'col-sm-4';
        return '
            <div class="form-group">
                '.$label.'
                <div class="'.$bsCols.'">
                    <p class="form-control-static file-placer hide" id="file"></p>
                    <input type="hidden" name="file_id" id="file_id">           
                    <div class="fileinput fileinput-new" data-provides="fileinput" data-action="'.nusp_asset('api/file').'" data-target="#file_id">
                      <div class="fileinput-preview thumbnail hide" data-trigger="fileinput" style="max-height: 150px;"></div>
                      <div>
                        <span class="btn btn-default btn-file" style="background-color: #fff; border: 0"><span class="fileinput-new">Pilih File</span><span class="fileinput-exists hide">Ganti</span><input type="file"></span>
                        <a href="#" class="btn btn-default fileinput-exists hide" data-dismiss="fileinput">Hapus</a>
                      </div>
                    </div>
                    <div class="progress-upload hide">
                        <div class="progress progress-xxs">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                        <div class="text-center progress-status">Sedang mengupload...</div>
                    </div>
                </div>
            </div>
        ';
    }

}

function nusp_forms($formats = [])
{
    if ($formats == '') return '';
    $forms = '';
    foreach ($formats as $name => $format) 
    {
        $forms .= nusp_form($name, $format);
    }

    return $forms;
}

function nusp_staticForm($name, $format = '', $bsCols = '')
{
    if ($format == '') return '';

    $formats = ['required' => false];

    foreach(explode('|', $format) as $f)
    {
        if ($f == 'required') 
        {
            $formats['required'] = true;
            continue;
        }
        
        $f = explode(':', $f);
        
        if (count($f) == 2) 
        {
            $formats[$f[0]] = $f[1];
        }
    }

    extract($formats);

    if (!isset($type) || $type == 'hidden') return '';

    if (!isset($caption)) $caption = ucwords(nusp_studlyToStr($name));

    if (!isset($default)) $default = '';

    $label = '<label class="control-label col-sm-4" for="'.$name.'">'.$caption.'</label>';

    $caption = strip_tags($caption);

    if ($bsCols == '') $bsCols = 'col-sm-8';

    if ($type == 'numeric') return '
        <div class="row form-group-static">
            '.$label.'
            <div class="'.$bsCols.'">
                <p class="form-control-static input-mask-numeric" id="'.$name.'"></p>
            </div>
        </div>
    '; 

    if ($type == 'decimal') return '
        <div class="row form-group-static">
            '.$label.'
            <div class="'.$bsCols.'">
                <p class="form-control-static input-mask-decimal" id="'.$name.'"></p>
            </div>
        </div>
    ';    

    if ($type == 'currency') return '
        <div class="row form-group-static">
            '.$label.'
            <div class="'.$bsCols.'">
                <p class="form-control-static input-mask-currency" id="'.$name.'"></p>
            </div>
        </div>
    ';    

    if ($type == 'date') return '
        <div class="row form-group-static">
            '.$label.'
            <div class="'.$bsCols.'">
                <p class="form-control-static input-date" id="'.$name.'"></p>
            </div>
        </div>
    ';    

    if ($type == 'image') return '
        <div class="row form-group-static">
            '.$label.'
            <div class="col-sm-6">
                <div id="foto_id" class="form-control-static fileinput-preview hide" data-trigger="fileinput" style="max-height: 150px;"></div>
            </div>
        </div>
    ';    

    if ($type == 'file') return '
        <div class="row form-group-static">
            '.$label.'
            <div class="col-sm-6">
                <p class="form-control-static file-placer hide" id="file_id"></p>
            </div>
        </div>
    ';    

    return '
        <div class="row form-group-static">
            '.$label.'
            <div class="'.$bsCols.'">
                <p class="form-control-static" id="'.$name.'"></p>
            </div>
        </div>
    ';    

}

function nusp_staticForms($formats = [])
{
    if ($formats == '') return '';
    $forms = '';
    foreach ($formats as $name => $format) 
    {
        $forms .= nusp_staticForm($name, $format);
    }

    return $forms;
}