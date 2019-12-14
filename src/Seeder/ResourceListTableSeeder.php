<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceList::query()
            ->create([	'id' => '802201', 	'resource' => '800502', 	'name' => 'GroupList', 	'description' => 'List all groups', 	'title' => 'Groups', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802202', 	'resource' => '800501', 	'name' => 'PartnerList', 	'description' => 'List all partners', 	'title' => 'Partners', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802203', 	'resource' => '800504', 	'name' => 'Task List', 	'description' => 'List all tasks', 	'title' => 'Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802204', 	'resource' => '800505', 	'name' => 'NewTaskList', 	'description' => 'List of all new task', 	'title' => 'New Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802205', 	'resource' => '800505', 	'name' => 'DismissedTasks', 	'description' => 'List of all dismissed task', 	'title' => 'Dismissed Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802206', 	'resource' => '800505', 	'name' => 'ReturnedTasks', 	'description' => 'List of all returned task', 	'title' => 'Returned Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802207', 	'resource' => '800505', 	'name' => 'CompletedTasks', 	'description' => 'List of all completed task', 	'title' => 'Completed Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802208', 	'resource' => '800505', 	'name' => 'RecentlyCompletedTasks', 	'description' => 'List of recently completed tasks', 	'title' => 'Recently Completed Partners', 	'identity' => 'task.name', 	'items_per_page' => '15', 									])
            ->create([	'id' => '802209', 	'resource' => '800505', 	'name' => 'TaskPartnerProgress', 	'description' => 'List task partner progress', 	'title' => 'Task Progress', 	'identity' => 'partner.name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802210', 	'resource' => '800505', 	'name' => 'PartnerTaskProgress', 	'description' => 'List partner task progress', 	'title' => 'Partner Progress', 	'identity' => 'task.name', 	'items_per_page' => '30', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
