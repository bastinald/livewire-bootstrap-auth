<?php

namespace Bastinald\LivewireBootstrapAuth\Providers;

use Bastinald\LivewireBootstrapAuth\Commands\MakeAuthCommand;
use Illuminate\Support\ServiceProvider;

class LivewireBootstrapAuthProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeAuthCommand::class,
            ]);
        }
    }
}
