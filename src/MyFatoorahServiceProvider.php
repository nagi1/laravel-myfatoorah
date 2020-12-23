<?php

namespace Nagi1\MyFatoorah;

use Illuminate\Support\ServiceProvider;

class MyFatoorahServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-myfatoorah.php' => config_path('laravel-myfatoorah.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-myfatoorah.php', 'laravel-myfatoorah');
    }
}
