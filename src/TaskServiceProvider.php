<?php

namespace Milestone\Task;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Milestone\Task\Events\TaskCreated;
use Milestone\Task\Listeners\AssignTaskPartners;

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
        Event::listen(TaskCreated::class,AssignTaskPartners::class);
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
