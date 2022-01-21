<?php

namespace Joshuasweb\LaravelDbState\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Joshuasweb\LaravelDbState\LaravelDbState
 */
class LaravelDbState extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-db-state';
    }
}
