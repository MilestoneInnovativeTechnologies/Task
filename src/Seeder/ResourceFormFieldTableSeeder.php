<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormField::query()
            ->create([	'id' => '801001', 	'resource_form' => '800901', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '801002', 	'resource_form' => '800901', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email', 											])
            ->create([	'id' => '801003', 	'resource_form' => '800901', 	'name' => 'password', 	'type' => 'password', 	'label' => 'Password', 											])
            ->create([	'id' => '801004', 	'resource_form' => '800902', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Task Name', 											])
            ->create([	'id' => '801005', 	'resource_form' => '800902', 	'name' => 'description', 	'type' => 'textarea', 	'label' => 'Description', 											])
            ->create([	'id' => '801006', 	'resource_form' => '800902', 	'name' => 'category', 	'type' => 'select', 	'label' => 'Category Name', 											])
            ->create([	'id' => '801007', 	'resource_form' => '800903', 	'name' => 'task.name', 	'type' => 'static', 	'label' => 'Name', 											])
            ->create([	'id' => '801008', 	'resource_form' => '800903', 	'name' => 'task.description', 	'type' => 'staticTextarea', 	'label' => 'Description', 											])
            ->create([	'id' => '801009', 	'resource_form' => '800903', 	'name' => 'progress', 	'type' => 'static', 	'label' => 'New Status', 											])
            ->create([	'id' => '801010', 	'resource_form' => '800903', 	'name' => 'remarks', 	'type' => 'textarea', 	'label' => 'Remarks', 											])
            ->create([	'id' => '801011', 	'resource_form' => '800904', 	'name' => 'task.name', 	'type' => 'static', 	'label' => 'Name', 											])
            ->create([	'id' => '801012', 	'resource_form' => '800904', 	'name' => 'task.description', 	'type' => 'static', 	'label' => 'Description', 											])
            ->create([	'id' => '801013', 	'resource_form' => '800904', 	'name' => 'progress', 	'type' => 'static', 	'label' => 'New Status', 											])
            ->create([	'id' => '801014', 	'resource_form' => '800904', 	'name' => 'remarks', 	'type' => 'textarea', 	'label' => 'Remarks', 											])
            ->create([	'id' => '801015', 	'resource_form' => '800904', 	'name' => 'attachment1', 	'type' => 'file', 	'label' => 'Attachment 01', 											])
            ->create([	'id' => '801016', 	'resource_form' => '800904', 	'name' => 'attachment2', 	'type' => 'file', 	'label' => 'Attachment 02', 											])
            ->create([	'id' => '801017', 	'resource_form' => '800904', 	'name' => 'attachment3', 	'type' => 'file', 	'label' => 'Attachment 03', 											])
            ->create([	'id' => '801018', 	'resource_form' => '800905', 	'name' => 'task.name', 	'type' => 'static', 	'label' => 'Name', 											])
            ->create([	'id' => '801019', 	'resource_form' => '800905', 	'name' => 'task.description', 	'type' => 'staticTextarea', 	'label' => 'Description', 											])
            ->create([	'id' => '801020', 	'resource_form' => '800905', 	'name' => 'progress', 	'type' => 'static', 	'label' => 'New Status', 											])
            ->create([	'id' => '801021', 	'resource_form' => '800905', 	'name' => 'remarks', 	'type' => 'textarea', 	'label' => 'Remarks', 											])
            ->create([	'id' => '801022', 	'resource_form' => '800906', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Category Name', 											])
            ->create([	'id' => '801023', 	'resource_form' => '800906', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '801024', 	'resource_form' => '800907', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '801025', 	'resource_form' => '800907', 	'name' => 'email', 	'type' => 'text', 	'label' => 'Email', 											])
            ->create([	'id' => '801026', 	'resource_form' => '800907', 	'name' => 'password', 	'type' => 'password', 	'label' => 'Password', 											])
            ->create([	'id' => '801027', 	'resource_form' => '800908', 	'name' => 'task.name', 	'type' => 'static', 	'label' => 'Task', 											])
            ->create([	'id' => '801028', 	'resource_form' => '800908', 	'name' => 'progress', 	'type' => 'select', 	'label' => 'New Progress', 											])
            ->create([	'id' => '801029', 	'resource_form' => '800908', 	'name' => 'remarks', 	'type' => 'textarea', 	'label' => 'Remarks', 											])
            ->create([	'id' => '801030', 	'resource_form' => '800909', 	'name' => 'name', 	'type' => 'text', 	'label' => 'Name', 											])
            ->create([	'id' => '801031', 	'resource_form' => '800909', 	'name' => 'description', 	'type' => 'textarea', 	'label' => 'Description', 											])
            ->create([	'id' => '801032', 	'resource_form' => '800909', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '801033', 	'resource_form' => '800902', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
            ->create([	'id' => '801034', 	'resource_form' => '800901', 	'name' => 'status', 	'type' => 'select', 	'label' => 'Status', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
