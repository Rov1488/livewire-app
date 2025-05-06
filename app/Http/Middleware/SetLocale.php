<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Поддерживаемые языки
        $supportedLocales = config('app.available_locales');
        $locale =  Session::get('locale') ?? config('app.fallback_locale'); //ltrim($request->route('locale') ?? config('app.fallback_locale'), '/')

        if (Session::has('locale')) {
            App::setLocale($locale);
            URL::defaults(['locale' => $locale]);
        }
        /*
        if($request->segment(1) === null) {
            // Редирект на язык по умолчанию, если locale не указан
            App::setLocale(config('app.locale'));
            redirect()->to('/'.config('app.locale') . request()->getRequestUri())->send();
        }*/


        return $next($request);
    }
}
