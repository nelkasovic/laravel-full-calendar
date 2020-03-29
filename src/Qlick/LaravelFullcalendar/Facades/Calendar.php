<?php

namespace LaravelFullCalendar\Facades\Calendar;

use Illuminate\Support\Facades\Facade;

class Calendar extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'laravel-full-calendar';
    }
}
