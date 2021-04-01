<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// IMPORT TAMAÑO POR DEFECTO DE STRINGS
// use Illuminate\Support\Facades\Schema;
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
        //TAMAÑO POR DEFECTO DE STRINGS
        // Schema::defaultStringLength(191);
    }
}
