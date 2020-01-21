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
            ->create([	'id' => '803207', 	'resource' => '800506', 	'name' => 'CreateTaskAction', 	'description' => 'Action to call form to create task', 			'menu' => 'New Task', 									])
            ->create([	'id' => '803208', 	'resource' => '800506', 	'name' => 'ListTaskAction', 	'description' => 'Action to call list to list all tasks', 			'menu' => 'List All', 									])
            ->create([	'id' => '803209', 	'resource' => '800506', 	'name' => 'ManageTaskPartners', 	'description' => 'Action to manage partners for a task', 	'title' => 'Manage Partners', 											])
            ->create([	'id' => '803210', 	'resource' => '800506', 	'name' => 'TaskPartnerProgress', 	'description' => 'Action to view partners progress on a task', 	'title' => 'View Partner Progress', 											])
            ->create([	'id' => '803211', 	'resource' => '800507', 	'name' => 'ListNewCategoryAction', 	'description' => 'Action to view categories of partner', 	'title' => 'Tasks', 											])
            ->create([	'id' => '803212', 	'resource' => '800507', 	'name' => 'ListNewTasksAction', 	'description' => 'Action to list new tasks', 			'menu' => 'New Tasks', 									])
            ->create([	'id' => '803213', 	'resource' => '800507', 	'name' => 'ListCompletedTasksAction', 	'description' => 'Action to list completed tasks', 			'menu' => 'Completed', 									])
            ->create([	'id' => '803214', 	'resource' => '800507', 	'name' => 'ListDismissedTasksAction', 	'description' => 'Action to list dismissed tasks', 			'menu' => 'Dismissed', 									])
            ->create([	'id' => '803215', 	'resource' => '800507', 	'name' => 'ListReturnedTasksAction', 	'description' => 'Action to list returned tasks', 			'menu' => 'Returned', 									])
            ->create([	'id' => '803216', 	'resource' => '800507', 	'name' => 'CompleteDescriptionTaskFormAction', 	'description' => 'Action to call the form for task completion with description', 	'title' => 'Complete', 				'on' => 'record.task.completion === "Description"', 							])
            ->create([	'id' => '803217', 	'resource' => '800507', 	'name' => 'CompleteAttachmentTaskFormAction', 	'description' => 'Action to call the form for task completion with attachment', 	'title' => 'Complete', 				'on' => 'record.task.completion === "Attachment"', 							])
            ->create([	'id' => '803218', 	'resource' => '800507', 	'name' => 'TaskProgressDetails', 	'description' => 'Action to view completion details of a task', 	'title' => 'Progress Details', 											])
            ->create([	'id' => '803219', 	'resource' => '800507', 	'name' => 'DismissTaskAction', 	'description' => 'Action to call form to dismiss a task', 	'title' => 'Dismiss', 				'on' => 'record.progress === "New" && record.task.dismissable === "Yes"', 							])
            ->create([	'id' => '803220', 	'resource' => '800501', 	'name' => 'PartnerTaskProgressAction', 	'description' => 'Action to list a partner task progresses', 	'title' => 'Task Progress', 											])
            ->create([	'id' => '803221', 	'resource' => '800503', 	'name' => 'CreateCategoryFormAction', 	'description' => 'Action to create categories', 			'menu' => 'New Category', 									])
            ->create([	'id' => '803222', 	'resource' => '800503', 	'name' => 'ListCategoryAction', 	'description' => 'Action to list all categories', 			'menu' => 'List All', 									])
            ->create([	'id' => '803223', 	'resource' => '800504', 	'name' => 'ListCategoryTaskAction', 	'description' => 'Action to list all category task', 			'menu' => 'All Tasks', 									])
            ->create([	'id' => '803224', 	'resource' => '800504', 	'name' => 'ListCategorysTasksAction', 	'description' => 'Action to list all tasks from a category', 	'title' => 'All Tasks', 				'on' => 'record.new_count > 0 || record.completed_count > 0', 							])
            ->create([	'id' => '803225', 	'resource' => '800504', 	'name' => 'CategorysCompletedTasks', 	'description' => 'Action to list all tasks which are completed from a category', 	'title' => 'Completed Tasks', 				'on' => 'record.completed_count > 0', 							])
            ->create([	'id' => '803226', 	'resource' => '800504', 	'name' => 'CategorysNewTasks', 	'description' => 'Action to list all tasks which are new from a category', 	'title' => 'Pending Tasks', 				'on' => 'record.new_count > 0', 							])
            ->create([	'id' => '803227', 	'resource' => '800503', 	'name' => 'CategoryAddTasks', 	'description' => 'Action to assign task', 	'title' => 'Create Task', 											])
            ->create([	'id' => '803228', 	'resource' => '800501', 	'name' => 'EditPartnerFormAction', 	'description' => 'Action to edit users', 	'title' => 'Edit ', 											])
            ->create([	'id' => '803229', 	'resource' => '800502', 	'name' => 'EditGroupFormAction', 	'description' => 'Action to edit groups', 	'title' => 'Edit ', 											])
            ->create([	'id' => '803230', 	'resource' => '800503', 	'name' => 'EditCategoryFormAction', 	'description' => 'Action to edit categories', 	'title' => 'Edit ', 											])
            ->create([	'id' => '803231', 	'resource' => '800506', 	'name' => 'EditTaskFormAction', 	'description' => 'Action to edit Tasks', 	'title' => 'Edit ', 											])
            ->create([	'id' => '803232', 	'resource' => '800508', 	'name' => 'ListPartnerProfile', 	'description' => 'Action to list profile', 			'menu' => 'My Profile', 									])
            ->create([	'id' => '803233', 	'resource' => '800508', 	'name' => 'EditProfileAction', 	'description' => 'Action to edit partner', 	'title' => 'Edit ', 											])
            ->create([	'id' => '803234', 	'resource' => '800507', 	'name' => 'PartnerTaskStatusUpdateAction', 	'description' => 'Action to call a form with data to update status and remarks', 	'title' => 'Update Status', 											])
            ->create([	'id' => '803235', 	'resource' => '800506', 	'name' => 'RecentlyUpdatedTaskList24Action', 	'description' => 'Action to call a list which displays tasks that are updated recently within 24 hours', 			'menu' => 'Recently Updated 24', 									])
            ->create([	'id' => '803236', 	'resource' => '800506', 	'name' => 'RecentlyUpdatedTaskList48Action', 	'description' => 'Action to call a list which displays tasks that are updated recently within 48 hours', 			'menu' => 'Recently Updated 48', 									])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
