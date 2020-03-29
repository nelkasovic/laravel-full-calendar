<?php

namespace LaravelFullCalendar;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-full-calendar', function ($app) {
            return $app->make('Qlick\LaravelFullcalendar\Calendar');
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views/', 'fullcalendar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-full-calendar'];
    }
}
