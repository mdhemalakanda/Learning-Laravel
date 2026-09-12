<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class viewProvider extends ServiceProvider
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
        // Artisan commands (like `migrate`) also boot providers —
        // skip the DB query there so the settings table can be created first.
        if (app()->runningInConsole()) {
            return;
        }

        $settings = Settings::first();
        View::share('settings', $settings);

        // show {{ $settings->phone }} in any blade view
    }
}
