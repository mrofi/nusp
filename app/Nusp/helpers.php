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