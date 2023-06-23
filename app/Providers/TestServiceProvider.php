<?php

namespace App\Providers;

use App\Test\Test;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this -> app -> bind('test', function (){
            return new Test(['foo' => 'bar']);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
