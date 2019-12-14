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
            ->create([	'id' => '802502', 	'resource_list' => '802201', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '802503', 	'resource_list' => '802202', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802504', 	'resource_list' => '802202', 	'label' => 'Email', 	'field' => 'email', 												])
            ->create([	'id' => '802505', 	'resource_list' => '802203', 	'label' => 'Name', 	'field' => 'name', 												])
            ->create([	'id' => '802506', 	'resource_list' => '802203', 	'label' => 'Status', 	'field' => 'status', 												])
            ->create([	'id' => '802507', 	'resource_list' => '802204', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800809', 											])
            ->create([	'id' => '802508', 	'resource_list' => '802205', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800809', 											])
            ->create([	'id' => '802509', 	'resource_list' => '802205', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802510', 	'resource_list' => '802206', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800809', 											])
            ->create([	'id' => '802511', 	'resource_list' => '802206', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802512', 	'resource_list' => '802207', 	'label' => 'Name', 	'field' => 'name', 	'relation' => '800809', 											])
            ->create([	'id' => '802513', 	'resource_list' => '802207', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802514', 	'resource_list' => '802208', 	'label' => 'Partner', 	'field' => 'name', 	'relation' => '800810', 											])
            ->create([	'id' => '802515', 	'resource_list' => '802208', 	'label' => 'Date', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802516', 	'resource_list' => '802209', 	'label' => 'Partner', 	'field' => 'name', 	'relation' => '800810', 											])
            ->create([	'id' => '802517', 	'resource_list' => '802209', 	'label' => 'Status', 	'field' => 'progress', 												])
            ->create([	'id' => '802518', 	'resource_list' => '802209', 	'label' => 'Date', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802519', 	'resource_list' => '802209', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
            ->create([	'id' => '802520', 	'resource_list' => '802210', 	'label' => 'Task', 	'field' => 'name', 	'relation' => '800809', 											])
            ->create([	'id' => '802521', 	'resource_list' => '802210', 	'label' => 'Status', 	'field' => 'progress', 												])
            ->create([	'id' => '802522', 	'resource_list' => '802210', 	'label' => 'Date', 	'field' => 'updated_at', 												])
            ->create([	'id' => '802523', 	'resource_list' => '802210', 	'label' => 'Remarks', 	'field' => 'remarks', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
