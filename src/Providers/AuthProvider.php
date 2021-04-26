<?php

namespace Bastinald\Auth\Providers;

use Bastinald\Auth\Commands\AuthCommand;
use Illuminate\Support\ServiceProvider;

class AuthProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AuthCommand::class,
            ]);
        }
    }
}
