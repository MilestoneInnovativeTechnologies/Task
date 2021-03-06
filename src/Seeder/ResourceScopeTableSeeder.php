<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceScopeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_ = \DB::statement('SELECT @@GLOBAL.foreign_key_checks');
        \DB::statement('set foreign_key_checks = 0');
        \Milestone\Appframe\Model\ResourceScope::query()
            ->create([	'id' => '800701', 	'resource' => '800505', 	'name' => 'NewTasks', 	'description' => 'Get new tasks', 	'method' => 'new', 											])
            ->create([	'id' => '800702', 	'resource' => '800505', 	'name' => 'CompletedTasks', 	'description' => 'Get completed tasks', 	'method' => 'completed', 											])
            ->create([	'id' => '800703', 	'resource' => '800505', 	'name' => 'DismissedTasks', 	'description' => 'Get dismissed tasks', 	'method' => 'dismissed', 											])
            ->create([	'id' => '800704', 	'resource' => '800505', 	'name' => 'ReturnedTasks', 	'description' => 'Get returned tasks', 	'method' => 'returned', 											])
            ->create([	'id' => '800705', 	'resource' => '800505', 	'name' => 'RecentlyUpdated', 	'description' => 'Get tasks which are updated recently', 	'method' => 'recent', 											])
            ->create([	'id' => '800706', 	'resource' => '800504', 	'name' => 'RecentlyCompleted', 	'description' => 'Tasks which are completed recently.', 	'method' => 'recentlyCompleted', 											])
            ->create([	'id' => '800707', 	'resource' => '800503', 	'name' => 'ProgressCount', 	'description' => 'Categories with pending and completed numbers', 	'method' => 'counts', 											])
            ->create([	'id' => '800708', 	'resource' => '800505', 	'name' => 'Recent24', 	'description' => 'Tasks which are updated with last 24 hours', 	'method' => 'recent24', 											])
            ->create([	'id' => '800709', 	'resource' => '800505', 	'name' => 'Recent48', 	'description' => 'Tasks which are updated with last 48 hours', 	'method' => 'recent48', 											])
            ->create([	'id' => '800710', 	'resource' => '800504', 	'name' => 'ActiveTasks', 	'description' => 'Tasks have status not equal to Inactive', 	'method' => 'active', 											])
            ->create([	'id' => '800711', 	'resource' => '800504', 	'name' => 'InActiveTasks', 	'description' => 'Tasks have status equal to Inactive', 	'method' => 'inactive', 											])
            ->create([	'id' => '800712', 	'resource' => '800501', 	'name' => 'ActivePartners', 	'description' => 'Partners have status equal to active', 	'method' => 'active', 											])
            ->create([	'id' => '800713', 	'resource' => '800501', 	'name' => 'InActivePartners', 	'description' => 'Partners have status equal to Inactive', 	'method' => 'inactive', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
