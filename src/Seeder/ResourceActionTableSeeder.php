<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceAction::query()
            ->create([	'id' => '803201', 	'resource' => '800502', 	'name' => 'CreateFormAction', 	'description' => 'Action to call group create form', 			'menu' => 'Create', 									])
            ->create([	'id' => '803202', 	'resource' => '800502', 	'name' => 'ListGroupsAction', 	'description' => 'Action to call list to list groups', 			'menu' => 'List All', 									])
            ->create([	'id' => '803203', 	'resource' => '800501', 	'name' => 'CreatePartnerAction', 	'description' => 'Action to call create partner form', 			'menu' => 'New Partner', 									])
            ->create([	'id' => '803204', 	'resource' => '800501', 	'name' => 'ListPartnerAction', 	'description' => 'Action to call list to list all partners', 			'menu' => 'List All', 									])
            ->create([	'id' => '803205', 	'resource' => '800501', 	'name' => 'ManagePartnerGroups', 	'description' => 'Action to manage partner groups', 	'title' => 'Manage Groups', 											])
            ->create([	'id' => '803206', 	'resource' => '800502', 	'name' => 'ManageGroupPartners', 	'description' => 'Action to manage group partners', 	'title' => 'Manage Partners', 											])
            ->create([	'id' => '803207', 	'resource' => '800504', 	'name' => 'CreateTaskAction', 	'description' => 'Action to call form to create task', 			'menu' => 'New Task', 									])
            ->create([	'id' => '803208', 	'resource' => '800504', 	'name' => 'ListTaskAction', 	'description' => 'Action to call list to list all tasks', 			'menu' => 'List All', 									])
            ->create([	'id' => '803209', 	'resource' => '800504', 	'name' => 'ManageTaskPartners', 	'description' => 'Action to manage partners for a task', 	'title' => 'Manage Partners', 											])
            ->create([	'id' => '803210', 	'resource' => '800504', 	'name' => 'TaskPartnerProgress', 	'description' => 'Action to view partners progress on a task', 	'title' => 'View Partner Progress', 											])
            ->create([	'id' => '803211', 	'resource' => '800505', 	'name' => 'ListNewTasksAction', 	'description' => 'Action to list new tasks', 			'menu' => 'New Tasks', 									])
            ->create([	'id' => '803212', 	'resource' => '800505', 	'name' => 'ListCompletedTasksAction', 	'description' => 'Action to list completed tasks', 			'menu' => 'Completed', 									])
            ->create([	'id' => '803213', 	'resource' => '800505', 	'name' => 'ListDismissedTasksAction', 	'description' => 'Action to list dismissed tasks', 			'menu' => 'Dismissed', 									])
            ->create([	'id' => '803214', 	'resource' => '800505', 	'name' => 'ListReturnedTasksAction', 	'description' => 'Action to list returned tasks', 			'menu' => 'Returned', 									])
            ->create([	'id' => '803215', 	'resource' => '800505', 	'name' => 'CompleteDescriptionTaskFormAction', 	'description' => 'Action to call the form for task completion with description', 	'title' => 'Complete', 				'on' => 'record.task.completion === "Description"', 							])
            ->create([	'id' => '803216', 	'resource' => '800505', 	'name' => 'CompleteAttachmentTaskFormAction', 	'description' => 'Action to call the form for task completion with attachment', 	'title' => 'Complete', 				'on' => 'record.task.completion === "Attachment"', 							])
            ->create([	'id' => '803217', 	'resource' => '800505', 	'name' => 'TaskProgressDetails', 	'description' => 'Action to view completion details of a task', 	'title' => 'Progress Details', 											])
            ->create([	'id' => '803218', 	'resource' => '800505', 	'name' => 'DismissTaskAction', 	'description' => 'Action to call form to dismiss a task', 	'title' => 'Dismiss', 				'on' => 'record.progress === "New" && record.task.dismissable === "Yes"', 							])
            ->create([	'id' => '803219', 	'resource' => '800501', 	'name' => 'PartnerTaskProgressAction', 	'description' => 'Action to list a partner task progresses', 	'title' => 'Task Progress', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
