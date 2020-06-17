<?php

namespace App\Providers;
use App\Models\Artist;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['palettes.fields'], function ($view) {
            $artistItems = Artist::pluck('name','id')->toArray();
            $view->with('artistItems', $artistItems);
        });
        View::composer(['palettes.fields'], function ($view) {
            $artistItems = Artist::pluck('name','id')->toArray();
            $view->with('artistItems', $artistItems);
        });
        View::composer(['palettes.fields'], function ($view) {
            $artistItems = Artist::pluck('name','id')->toArray();
            $view->with('artistItems', $artistItems);
        });
        //
    }
}