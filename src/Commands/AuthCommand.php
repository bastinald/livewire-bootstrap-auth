<?php

namespace Bastinald\Auth\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

class AuthCommand extends Command
{
    protected $name = 'make:auth';

    public function handle()
    {
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs', base_path());

        Artisan::call('migrate:auto');

        exec('npm install');
        exec('npm run dev');

        $this->info('Auth scaffolded!');
    }
}
