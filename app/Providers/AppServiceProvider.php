<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema, View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $extensions = [
            'blade.js' => 'blade',
            'blade.css' => 'blade',
        ];
        foreach ($extensions as $e => $i) {
            View::addExtension($e, $i);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
