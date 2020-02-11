<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceListLayoutTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListLayout::query()
            ->create([	'id' => '802501', 	'resource_list' => '802201', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802502', 	'resource_list' => '802201', 	'label' => 'Email', 	'field' => 'email', 												])
            ->create([	'id' => '802503', 	'resource_list' => '802202', 	'label' => 'Category', 	'field' => 'name', 	'relation' => '800811', 											])
            ->create([	'id' => '802504', 	'resource_list' => '802202', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802505', 	'resource_list' => '802202', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '802506', 	'resource_list' => '802203', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800812', 											])
            ->create([	'id' => '802507', 	'resource_list' => '802204', 	'label' => 'Category', 	'field' => 'name', 	'relation' => '800812', 											])
            ->create([	'id' => '802508', 	'resource_list' => '802204', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '802509', 	'resource_list' => '802205', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '802510', 	'resource_list' => '802205', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802511', 	'resource_list' => '802206', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '802512', 	'resource_list' => '802206', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802513', 	'resource_list' => '802207', 	'label' => 'Category', 	'field' => 'name', 	'relation' => '800812', 											])
            ->create([	'id' => '802514', 	'resource_list' => '802207', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '802515', 	'resource_list' => '802207', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802516', 	'resource_list' => '802208', 	'label' => 'Partner', 	'field' => 'name', 	'relation' => '800808', 											])
            ->create([	'id' => '802517', 	'resource_list' => '802208', 	'label' => 'Date', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802518', 	'resource_list' => '802209', 	'label' => 'Category', 	'field' => 'name', 	'relation' => '800812', 											])
            ->create([	'id' => '802519', 	'resource_list' => '802209', 	'label' => 'Partner', 	'field' => 'name', 	'relation' => '800808', 											])
            ->create([	'id' => '802520', 	'resource_list' => '802209', 	'label' => 'Status', 	'field' => 'progress', 												])
            ->create([	'id' => '802521', 	'resource_list' => '802209', 	'label' => 'Date', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802522', 	'resource_list' => '802209', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802523', 	'resource_list' => '802210', 	'label' => 'Category', 	'field' => 'name', 	'relation' => '800812', 											])
            ->create([	'id' => '802524', 	'resource_list' => '802210', 	'label' => 'Task', 	'field' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '802525', 	'resource_list' => '802210', 	'label' => 'Status', 	'field' => 'progress', 												])
            ->create([	'id' => '802526', 	'resource_list' => '802210', 	'label' => 'Date', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802527', 	'resource_list' => '802210', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802528', 	'resource_list' => '802211', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802529', 	'resource_list' => '802211', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '802530', 	'resource_list' => '802212', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802531', 	'resource_list' => '802212', 	'label' => 'Pending Tasks', 	'field' => 'new_count', 												])
            ->create([	'id' => '802532', 	'resource_list' => '802212', 	'label' => 'Completed Tasks', 	'field' => 'completed_count', 												])
            ->create([	'id' => '802533', 	'resource_list' => '802213', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802534', 	'resource_list' => '802213', 	'label' => 'Email', 	'field' => 'email', 												])
            ->create([	'id' => '802535', 	'resource_list' => '802214', 	'label' => 'Category', 	'field' => 'name', 	'relation' => '800812', 											])
            ->create([	'id' => '802536', 	'resource_list' => '802214', 	'label' => 'Task', 	'field' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '802537', 	'resource_list' => '802214', 	'label' => 'Partner', 	'field' => 'name', 	'relation' => '800808', 											])
            ->create([	'id' => '802538', 	'resource_list' => '802214', 	'label' => 'Progress', 	'field' => 'progress', 												])
            ->create([	'id' => '802539', 	'resource_list' => '802214', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802540', 	'resource_list' => '802214', 	'label' => 'Updated', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802541', 	'resource_list' => '802215', 	'label' => 'Category', 	'field' => 'name', 	'relation' => '800812', 											])
            ->create([	'id' => '802542', 	'resource_list' => '802215', 	'label' => 'Task', 	'field' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '802543', 	'resource_list' => '802215', 	'label' => 'Partner', 	'field' => 'name', 	'relation' => '800808', 											])
            ->create([	'id' => '802544', 	'resource_list' => '802215', 	'label' => 'Progress', 	'field' => 'progress', 												])
            ->create([	'id' => '802545', 	'resource_list' => '802215', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802546', 	'resource_list' => '802215', 	'label' => 'Updated', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802547', 	'resource_list' => '802216', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802548', 	'resource_list' => '802216', 	'label' => 'Description', 	'field' => 'description', 												])
            ->create([	'id' => '802549', 	'resource_list' => '802216', 	'label' => 'Status', 	'field' => 'status', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
