<?php

namespace Milestone\Task;

use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(implode([__DIR__,'..','migrations'],DIRECTORY_SEPARATOR));
        $this->mergeConfigFrom(implode([__DIR__,'..','config','filesystems','disks.php'],DIRECTORY_SEPARATOR),'filesystems.disks');
        $this->loadRoutesFrom(implode([__DIR__,'..','routes','web.php'],DIRECTORY_SEPARATOR));
        $this->loadViewsFrom(implode([__DIR__,'..','views'],DIRECTORY_SEPARATOR),'task');
        $this->publishes([implode([__DIR__,'..','assets'],DIRECTORY_SEPARATOR) => public_path('tasks')]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
