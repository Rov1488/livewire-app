<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class LocaleController extends Controller
{
    public function changeLocale(string $locale){

         //dd($locale);
        if(!empty($locale) && in_array($locale, config('app.available_locales'))){
            Session::put('locale', $locale);
            App::setLocale(Session::get('locale', config('app.fallback_locale')));
        }

        return redirect()->back()->with('locale', $locale);
    }
}
