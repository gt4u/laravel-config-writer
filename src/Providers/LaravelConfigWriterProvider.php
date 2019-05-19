<?php


namespace BONE\LaravelConfigWriter\Providers;

use BONE\ConfigWriter\ConfigWriter;
use Illuminate\Support\ServiceProvider;

class LaravelConfigWriterProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('bone-config-writer', function () {

            return new ConfigWriter($this->app->basePath('config'), $this->app['config']);

        });

    }


}