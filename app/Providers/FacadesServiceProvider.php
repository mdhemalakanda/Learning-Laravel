<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\FacadesService;

class FacadesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->boot('facades_service', function($app) {
            return new FacadesService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
