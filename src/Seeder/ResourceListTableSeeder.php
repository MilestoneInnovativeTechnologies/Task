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
            ->create([	'id' => '802201', 	'resource' => '800501', 	'name' => 'PartnerList', 	'description' => 'List all partners', 	'title' => 'Partners', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802202', 	'resource' => '800504', 	'name' => 'TaskList', 	'description' => 'List all active tasks', 	'title' => 'Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802203', 	'resource' => '800505', 	'name' => 'NewCategoryList', 	'description' => 'List of partnertask categories', 	'title' => 'New Categories', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802204', 	'resource' => '800505', 	'name' => 'NewTaskList', 	'description' => 'List of all new task', 	'title' => 'New Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802205', 	'resource' => '800505', 	'name' => 'DismissedTasks', 	'description' => 'List of all dismissed task', 	'title' => 'Dismissed Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802206', 	'resource' => '800505', 	'name' => 'ReturnedTasks', 	'description' => 'List of all returned task', 	'title' => 'Returned Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802207', 	'resource' => '800505', 	'name' => 'CompletedTasks', 	'description' => 'List of all completed task', 	'title' => 'Completed Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802208', 	'resource' => '800505', 	'name' => 'RecentlyCompletedTasks', 	'description' => 'List of recently completed tasks', 	'title' => 'Recently Completed Partners', 	'identity' => 'task.name', 	'items_per_page' => '15', 									])
            ->create([	'id' => '802209', 	'resource' => '800505', 	'name' => 'TaskPartnerProgress', 	'description' => 'List task partner progress', 	'title' => 'Task Progress', 	'identity' => 'partner.name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802210', 	'resource' => '800505', 	'name' => 'PartnerTaskProgress', 	'description' => 'List partner task progress', 	'title' => 'Partner Progress', 	'identity' => 'task.name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802211', 	'resource' => '800502', 	'name' => 'CategoryList', 	'description' => 'List all categories', 	'title' => 'Categories', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802212', 	'resource' => '800503', 	'name' => 'CategoryTaskList', 	'description' => 'List all categories', 	'title' => 'Categories', 	'identity' => 'name', 	'items_per_page' => '20', 									])
            ->create([	'id' => '802213', 	'resource' => '800506', 	'name' => 'ProfileList', 	'description' => 'List Profile List', 	'title' => 'Profile', 	'identity' => 'name', 	'items_per_page' => '10', 									])
            ->create([	'id' => '802214', 	'resource' => '800505', 	'name' => 'RecentlyUpdatedTasks24', 	'description' => 'List of tasks that updated recently within 24 hours', 	'title' => 'Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802215', 	'resource' => '800505', 	'name' => 'RecentlyUpdatedTasks48', 	'description' => 'List of tasks that updated recently within 48 hours', 	'title' => 'Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802216', 	'resource' => '800507', 	'name' => 'TaskGroupList', 	'description' => 'List all task groups', 	'title' => 'Task Groups', 	'identity' => 'name', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802217', 	'resource' => '800504', 	'name' => 'InactiveTaskList', 	'description' => 'List all inactive tasks', 	'title' => 'Inactive Tasks', 	'identity' => 'id', 	'items_per_page' => '30', 									])
            ->create([	'id' => '802218', 	'resource' => '800501', 	'name' => 'PartnerListInactive', 	'description' => 'List all inactive partners', 	'title' => 'Inactive Partners', 	'identity' => 'id', 	'items_per_page' => '30', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
