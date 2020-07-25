<?php

namespace App\Providers;

use App\Contracts\RequestSaver;
use App\Services\RequestDatabaseSaver;
use Illuminate\Support\ServiceProvider;

class RequestSaverProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            RequestSaver::class,
            RequestDatabaseSaver::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
