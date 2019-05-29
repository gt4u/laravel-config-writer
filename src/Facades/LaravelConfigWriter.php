<?php


namespace BONE\LaravelConfigWriter\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelConfigWriter
 * @package BONE\LaravelConfigWriter\Facades
 * @method static write($key, $value)
 */
class LaravelConfigWriter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bone-config-writer';
    }
}
