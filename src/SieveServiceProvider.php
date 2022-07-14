<?php

namespace Masoudi\Sieve;

use Illuminate\Support\ServiceProvider;
use Masoudi\Sieve\Console\CreateFilter;

class SieveServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {

        // Check app running in console
        if ($this->app->runningInConsole()) {

            // Register commands
            $this->commands([
                CreateFilter::class
            ]);
        }
    }
}
