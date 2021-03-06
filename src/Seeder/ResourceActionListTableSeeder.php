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
            ->create([	'id' => '803502', 	'resource_action' => '803210', 	'resource_list' => '802204', 													])
            ->create([	'id' => '803503', 	'resource_action' => '803211', 	'resource_list' => '802204', 													])
            ->create([	'id' => '803504', 	'resource_action' => '803212', 	'resource_list' => '802207', 													])
            ->create([	'id' => '803505', 	'resource_action' => '803212', 	'resource_list' => '802206', 													])
            ->create([	'id' => '803506', 	'resource_action' => '803212', 	'resource_list' => '802205', 													])
            ->create([	'id' => '803507', 	'resource_action' => '803206', 	'resource_list' => '802202', 													])
            ->create([	'id' => '803508', 	'resource_action' => '803213', 	'resource_list' => '802204', 													])
            ->create([	'id' => '803509', 	'resource_action' => '803214', 	'resource_list' => '802201', 													])
            ->create([	'id' => '803510', 	'resource_action' => '803212', 	'resource_list' => '802209', 													])
            ->create([	'id' => '803511', 	'resource_action' => '803212', 	'resource_list' => '802210', 													])
            ->create([	'id' => '803512', 	'resource_action' => '803218', 	'resource_list' => '802212', 													])
            ->create([	'id' => '803513', 	'resource_action' => '803219', 	'resource_list' => '802212', 													])
            ->create([	'id' => '803514', 	'resource_action' => '803220', 	'resource_list' => '802212', 													])
            ->create([	'id' => '803515', 	'resource_action' => '803221', 	'resource_list' => '802211', 													])
            ->create([	'id' => '803516', 	'resource_action' => '803222', 	'resource_list' => '802201', 													])
            ->create([	'id' => '803517', 	'resource_action' => '803223', 	'resource_list' => '802211', 													])
            ->create([	'id' => '803518', 	'resource_action' => '803224', 	'resource_list' => '802202', 													])
            ->create([	'id' => '803519', 	'resource_action' => '803226', 	'resource_list' => '802213', 													])
            ->create([	'id' => '803520', 	'resource_action' => '803227', 	'resource_list' => '802207', 													])
            ->create([	'id' => '803521', 	'resource_action' => '803227', 	'resource_list' => '802209', 													])
            ->create([	'id' => '803522', 	'resource_action' => '803227', 	'resource_list' => '802210', 													])
            ->create([	'id' => '803523', 	'resource_action' => '803231', 	'resource_list' => '802202', 													])
            ->create([	'id' => '803524', 	'resource_action' => '803232', 	'resource_list' => '802216', 													])
            ->create([	'id' => '803525', 	'resource_action' => '803230', 	'resource_list' => '802216', 													])
            ->create([	'id' => '803526', 	'resource_action' => '803233', 	'resource_list' => '802201', 													])
            ->create([	'id' => '803527', 	'resource_action' => '803235', 	'resource_list' => '802201', 													])
            ->create([	'id' => '803528', 	'resource_action' => '803234', 	'resource_list' => '802216', 													])
            ->create([	'id' => '803529', 	'resource_action' => '803224', 	'resource_list' => '802217', 													])
            ->create([	'id' => '803530', 	'resource_action' => '803222', 	'resource_list' => '802218', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
