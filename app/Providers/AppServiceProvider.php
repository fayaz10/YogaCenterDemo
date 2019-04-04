<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Schema; 
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
     *       Schema::defaultStringLength(191);
use Illuminate\Support\Facades\Schema;
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(199);
        Schema::defaultStringLength(191);
    }
}
