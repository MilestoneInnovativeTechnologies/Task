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
            ->create([	'id' => '800502', 	'name' => 'Group', 	'description' => 'Group of users to whom a task can assign', 	'title' => 'Groups', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'groups', 										])
            ->create([	'id' => '800503', 	'name' => 'Category', 	'description' => 'Category of tasks', 	'title' => 'Categories', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'categories', 										])
            ->create([	'id' => '800504', 	'name' => 'CategoryTask', 	'description' => 'Same as category', 	'title' => 'Tasks', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'categories', 										])
            ->create([	'id' => '800505', 	'name' => 'GroupPartner', 	'description' => 'Partners of groups', 	'title' => 'Partner Groups', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'group_partners', 										])
            ->create([	'id' => '800506', 	'name' => 'Task', 	'description' => 'Tasks', 	'title' => 'Tasks', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'tasks', 										])
            ->create([	'id' => '800507', 	'name' => 'PartnerTask', 	'description' => 'Tasks that are assigned to partners', 	'title' => 'Tasks', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'partner_tasks', 										])
            ->create([	'id' => '800508', 	'name' => 'Profile', 	'description' => 'User can view their profile', 	'title' => 'Profile', 	'namespace' => 'Milestone\Task\Model', 	'table' => 'users', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
