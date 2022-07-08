<?php

namespace Tekirara\JustHello;

use Illuminate\Support\ServiceProvider;
use Tekirara\JustHello\Hello;
use Tekirara\JustHello\HelloInterface;
/**
 * Class HelloServiceProvider
 */
class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HelloInterface::class, Hello::class);
    }
}