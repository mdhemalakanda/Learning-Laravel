<?php

namespace App\Providers;
use App\Service\TeacherService;
use Illuminate\Support\ServiceProvider;

class TeacherServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->boot(TeacherService::class, function($app) {
            return new TeacherService();
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
