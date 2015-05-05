<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller {

    public function switchLang($lang)
	    {
        //var_dump($lang);
        if (array_key_exists($lang, Config::get('languages'))) {
            //var_dump(Config::get('languages'));
            Session::set('applocale', $lang);
            //var_dump(Session::get('applocale'));
        }
        return Redirect::back();
	    }
}
