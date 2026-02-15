<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        foreach (glob(base_path('app/Http/Modules/*'), GLOB_ONLYDIR) as $modulePath) {
            $moduleName = basename($modulePath);
            $this->loadViewsFrom($modulePath . '/views', strtolower($moduleName));
        }
    }
}
