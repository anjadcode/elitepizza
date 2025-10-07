<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AssetUrlServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Force HTTPS for asset URLs in production
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
        
        // Force asset URLs to use HTTPS
        $this->app['url']->forceRootUrl(config('app.url'));
    }
}
