<?php

namespace LaravelFullCalendar;

use Illuminate\Support\ServiceProvider;

class FullCalendarServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-full-calendar', function ($app) {
            return $app->make('LaravelFullCalendar\Calendar');
        });
/*
        $this->app->singleton('laravel-full-calendar', function ($app) {
            return new Calendar($app['request']->server());
        });

        $this->app->alias('laravel-full-calendar', Calendar::class);
        */

    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__, 'fullcalendar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-full-calendar'];
        //return ['laravel-full-calendar', Calendar::class];
    }
}
