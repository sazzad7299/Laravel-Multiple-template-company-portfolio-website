<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Settings;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('settings', function () {
            return Cache::remember('settings', 60, function () {
                return Settings::pluck('meta_value', 'meta_key')->all();
            });
        });
        $this->app->singleton('categories', function () {
            return Cache::remember('categories', 60, function () {
                return Category::query()->active()->get(['id', 'title','feature_image','description']);
            });
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
