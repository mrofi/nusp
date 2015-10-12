<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
	protected $tagline;

    public function __construct()
    {
        $class = new \ReflectionClass($this);
        \View::share( 'thePage', ucwords($class->getshortname()) );  
    }
}
