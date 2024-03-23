<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Banner;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
    }

    public function boot(): void
    {
        Paginator::useBootstrap();

        $banner_data = Banner::where('id', 1)->first();

        view()->share('global_banner_data', $banner_data);
    }
}
