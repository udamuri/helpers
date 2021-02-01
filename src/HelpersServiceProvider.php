<?php

namespace Udamuri\Helpers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Udamuri\Terbilang\Terbilang');
        // $this->loadViewsFrom(__DIR__.'/views', 'article');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //include __DIR__. '/routes.php';
    }
}
