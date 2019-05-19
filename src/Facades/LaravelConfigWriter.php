<?php


namespace BONE\LaravelConfigWriter\Facades;


use Illuminate\Support\Facades\Facade;

class LaravelConfigWriter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bone-config-writer';
    }
}