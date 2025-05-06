<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Paginator::useBootstrapFive();
        /*if (request()->segment(1) === null) {
            redirect()->to('/'.config('app.locale') . request()->getRequestUri())->send();
        }*/
        View::composer('*', function ($view) {
            $view->with(['currentLocale' => app()->getLocale()]);
            $view->with(['languages' => config('app.available_locales')]);
        });

    }
}
