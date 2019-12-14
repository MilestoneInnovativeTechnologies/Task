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
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
