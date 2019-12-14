<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceForm::query()
            ->create([	'id' => '800901', 	'resource' => '800502', 	'name' => 'CreateGroup', 	'description' => 'Create new partner group', 	'title' => 'Groups', 	'action_text' => 'Save', 										])
            ->create([	'id' => '800902', 	'resource' => '800501', 	'name' => 'CreatePartner', 	'description' => 'Create new partner', 	'title' => 'Partners', 	'action_text' => 'Save', 										])
            ->create([	'id' => '800903', 	'resource' => '800504', 	'name' => 'CreateTask', 	'description' => 'Create new task', 	'title' => 'Tasks', 	'action_text' => 'Save', 										])
            ->create([	'id' => '800904', 	'resource' => '800505', 	'name' => 'TaskCompleteDescription', 	'description' => 'Form to make task complete by updating complete_comment', 	'title' => 'Complete', 	'action_text' => 'Complete', 										])
            ->create([	'id' => '800905', 	'resource' => '800505', 	'name' => 'TaskCompleteAttachment', 	'description' => 'Form to make task complete by attaching files', 	'title' => 'Complete', 	'action_text' => 'Complete', 										])
            ->create([	'id' => '800906', 	'resource' => '800505', 	'name' => 'TaskDismissForm', 	'description' => 'Form to dismiss a task', 	'title' => 'Dismiss', 	'action_text' => 'Dismiss', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
