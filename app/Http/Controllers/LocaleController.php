<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LocaleController extends Controller
{
    public function changeLocale(Request $request, string $locale){
        if(in_array($locale, config('app.available_locales'))){
            $request->session()->put('locale', $locale);
            app()->setLocale($locale);
            URL::defaults(['locale' => $locale]);
        }

        return redirect()->back()->with($locale);
    }
}
