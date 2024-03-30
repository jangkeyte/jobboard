<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Banner;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
    }

    public function boot(): void
    {
        Paginator::useBootstrap();

        $banner_data = Schema::hasTable('banners') ? Banner::where('id', 1)->first() : array();
        $settings_data = Schema::hasTable('settings') ? Setting::where('id', 1)->first() : array();

        view()->share('global_banner_data', $banner_data);
        view()->share('global_settings_data', $settings_data);
    }
}
