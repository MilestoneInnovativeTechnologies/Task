<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionListTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceActionList::query()
            ->create([	'id' => '803501', 	'resource_action' => '803205', 	'resource_list' => '802202', 													])
            ->create([	'id' => '803502', 	'resource_action' => '803206', 	'resource_list' => '802201', 													])
            ->create([	'id' => '803503', 	'resource_action' => '803209', 	'resource_list' => '802203', 													])
            ->create([	'id' => '803504', 	'resource_action' => '803215', 	'resource_list' => '802204', 													])
            ->create([	'id' => '803505', 	'resource_action' => '803216', 	'resource_list' => '802204', 													])
            ->create([	'id' => '803506', 	'resource_action' => '803217', 	'resource_list' => '802207', 													])
            ->create([	'id' => '803507', 	'resource_action' => '803217', 	'resource_list' => '802206', 													])
            ->create([	'id' => '803508', 	'resource_action' => '803217', 	'resource_list' => '802205', 													])
            ->create([	'id' => '803509', 	'resource_action' => '803210', 	'resource_list' => '802203', 													])
            ->create([	'id' => '803510', 	'resource_action' => '803218', 	'resource_list' => '802204', 													])
            ->create([	'id' => '803511', 	'resource_action' => '803219', 	'resource_list' => '802202', 													])
            ->create([	'id' => '803512', 	'resource_action' => '803217', 	'resource_list' => '802209', 													])
            ->create([	'id' => '803513', 	'resource_action' => '803217', 	'resource_list' => '802210', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
