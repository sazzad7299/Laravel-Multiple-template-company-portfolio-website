<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

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
        // $settings = Cache::remember('settings', 60, function () {
        //     // Fetch settings from the database
        //     return Settings::pluck('meta_value', 'meta_key')->all();
        // });

        JsonResource::withoutWrapping();
        Paginator::useBootstrap();
    
    }
}