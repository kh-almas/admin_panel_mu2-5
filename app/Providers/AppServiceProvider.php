<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Database\Query\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // share settingsin all views
        // https://laravel.com/docs/8.x/views#sharing-data-with-all-views

        $settings = Settings::first();
        View::share('registration', $settings->registration);
        View::share('library_permission', $settings->permit_library);
        View::share('storage_limit', $settings->storage_limit);


        //for livewire search
        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
        });

        Paginator::useBootstrap();
    }
}
