<?php

namespace App\Providers;
use App\Models\OgrenimDurumuTipi;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('OgrenimDurumuTipleri',OgrenimDurumuTipi::get());
    }
}
