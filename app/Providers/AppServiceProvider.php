<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use App\Category;
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
        //
        Schema::defaultStringLength(191);
        view()->composer(
            'layout.app', 
            function ($view) {
                $view->with('categories', \App\Category::all());
            }
        );
    }
}
