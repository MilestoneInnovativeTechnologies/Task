<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceRelation::query()
            ->create([	'id' => '800801', 	'resource' => '800501', 	'name' => 'PartnerTasks', 	'description' => 'Tasks that assigned to a partner', 	'method' => 'Tasks', 	'type' => 'belongsToMany', 	'relate_resource' => '800504', 									])
            ->create([	'id' => '800802', 	'resource' => '800504', 	'name' => 'ParentTask', 	'description' => 'The main task of a parent task', 	'method' => 'Main', 	'type' => 'belongsTo', 	'relate_resource' => '800504', 									])
            ->create([	'id' => '800803', 	'resource' => '800504', 	'name' => 'SubTasks', 	'description' => 'The child tasks of a task', 	'method' => 'Tasks', 	'type' => 'hasMany', 	'relate_resource' => '800504', 									])
            ->create([	'id' => '800804', 	'resource' => '800504', 	'name' => 'TaskPartners', 	'description' => 'The Partners assigned for this task', 	'method' => 'Partners', 	'type' => 'belongsToMany', 	'relate_resource' => '800501', 									])
            ->create([	'id' => '800805', 	'resource' => '800504', 	'name' => 'TaskProgress', 	'description' => 'The progress of tasks', 	'method' => 'Progress', 	'type' => 'hasMany', 	'relate_resource' => '800505', 									])
            ->create([	'id' => '800806', 	'resource' => '800501', 	'name' => 'PartnerProgress', 	'description' => 'The progress of partner', 	'method' => 'Progress', 	'type' => 'hasMany', 	'relate_resource' => '800505', 									])
            ->create([	'id' => '800807', 	'resource' => '800505', 	'name' => 'TaskDetails', 	'description' => 'Details of task this record belongs to', 	'method' => 'Task', 	'type' => 'belongsTo', 	'relate_resource' => '800504', 									])
            ->create([	'id' => '800808', 	'resource' => '800505', 	'name' => 'TaskUser', 	'description' => 'Detail of user this record belongs to', 	'method' => 'Partner', 	'type' => 'belongsTo', 	'relate_resource' => '800501', 									])
            ->create([	'id' => '800809', 	'resource' => '800502', 	'name' => 'TaskCategory', 	'description' => 'Category has many Tasks', 	'method' => 'TaskCategory', 	'type' => 'hasMany', 	'relate_resource' => '800504', 									])
            ->create([	'id' => '800810', 	'resource' => '800502', 	'name' => 'TaskCategoryPartner', 	'description' => 'Category has many PartnerTasks', 	'method' => 'TaskCategoryPartner', 	'type' => 'hasMany', 	'relate_resource' => '800505', 									])
            ->create([	'id' => '800811', 	'resource' => '800504', 	'name' => 'CategoryTask', 	'description' => 'Task belongs to Category', 	'method' => 'CategoryTask', 	'type' => 'belongsTo', 	'relate_resource' => '800502', 									])
            ->create([	'id' => '800812', 	'resource' => '800505', 	'name' => 'CategoryProgress', 	'description' => 'Partner task belongs to Category', 	'method' => 'CategoryProgress', 	'type' => 'belongsTo', 	'relate_resource' => '800502', 									])
            ->create([	'id' => '800813', 	'resource' => '800503', 	'name' => 'CategoryTasks', 	'description' => 'Tasks in a category', 	'method' => 'Tasks', 	'type' => 'hasMany', 	'relate_resource' => '800505', 									])
            ->create([	'id' => '800814', 	'resource' => '800507', 	'name' => 'GroupTasks', 	'description' => 'Tasks in a group', 	'method' => 'Tasks', 	'type' => 'belongsToMany', 	'relate_resource' => '800504', 									])
            ->create([	'id' => '800815', 	'resource' => '800504', 	'name' => 'TaskGroups', 	'description' => 'Groups of a task', 	'method' => 'Groups', 	'type' => 'belongsToMany', 	'relate_resource' => '800507', 									])
            ->create([	'id' => '800816', 	'resource' => '800507', 	'name' => 'TaskGroupPartners', 	'description' => 'Partners in a task group', 	'method' => 'Partners', 	'type' => 'belongsToMany', 	'relate_resource' => '800501', 									])
            ->create([	'id' => '800817', 	'resource' => '800501', 	'name' => 'TaskGroupPartners', 	'description' => 'Partners in a task group', 	'method' => 'TaskGroups', 	'type' => 'belongsToMany', 	'relate_resource' => '800507', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
