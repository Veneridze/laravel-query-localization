<?php

namespace Veneridze\LaravelQueryLocalization\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @package Veneridze\LaravelQueryLocalization\Facades
 */
class LaravelQueryLocalization extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-query-localization';
    }
}
