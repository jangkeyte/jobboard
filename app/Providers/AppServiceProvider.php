<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Banner;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            \App\Repositories\Job\JobRepositoryInterface::class,
            \App\Repositories\Job\JobRepository::class
        );        
        $this->app->singleton(
            \App\Repositories\Company\CompanyRepositoryInterface::class,
            \App\Repositories\Company\CompanyRepository::class
        );        
        $this->app->singleton(
            \App\Repositories\Candidate\CandidateRepositoryInterface::class,
            \App\Repositories\Candidate\CandidateRepository::class
        );        
    }

    public function boot(): void
    {
        Blade::componentNamespace('App\\Http\\View\\Components', strtolower('JangKeyte'));

        Paginator::useBootstrap();

        $banner_data = Schema::hasTable('banners') ? Banner::where('id', 1)->first() : array();
        $settings_data = Schema::hasTable('settings') ? Setting::where('id', 1)->first() : array();

        view()->share('global_banner_data', $banner_data);
        view()->share('global_settings_data', $settings_data);
    }
}
