<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Resource::query()
            ->create([	'id' => '800501', 	'name' => 'Partner', 	'description' => 'Users of Task Management Application', 	'title' => 'Partners', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'users', 										])
            ->create([	'id' => '800502', 	'name' => 'Category', 	'description' => 'Category of tasks', 	'title' => 'Categories', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'categories', 										])
            ->create([	'id' => '800503', 	'name' => 'CategoryTask', 	'description' => 'Same as category', 	'title' => 'Tasks', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'categories', 										])
            ->create([	'id' => '800504', 	'name' => 'Task', 	'description' => 'Tasks', 	'title' => 'Tasks', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'tasks', 										])
            ->create([	'id' => '800505', 	'name' => 'PartnerTask', 	'description' => 'Tasks that are assigned to partners', 	'title' => 'Tasks', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'partner_tasks', 										])
            ->create([	'id' => '800506', 	'name' => 'Profile', 	'description' => 'User can view their profile', 	'title' => 'Profile', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'users', 										])
            ->create([	'id' => '800507', 	'name' => 'TaskGroupMaster', 	'description' => 'Group to organize tasks', 	'title' => 'Task Groups', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'task_group_masters', 										])
            ->create([	'id' => '800508', 	'name' => 'GroupTask', 	'description' => 'Tasks that belongs to groups', 	'title' => 'Group Tasks', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'group_tasks', 										])
            ->create([	'id' => '800509', 	'name' => 'TaskGroupPartner', 	'description' => 'Partner in a task group', 	'title' => 'Task Group Partners', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'task_group_partners', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
