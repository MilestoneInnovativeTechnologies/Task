<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceListSearchTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListSearch::query()
            ->create([	'id' => '802601', 	'resource_list' => '802201', 	'field' => 'name', 													])
            ->create([	'id' => '802602', 	'resource_list' => '802201', 	'field' => 'description', 													])
            ->create([	'id' => '802603', 	'resource_list' => '802202', 	'field' => 'name', 													])
            ->create([	'id' => '802604', 	'resource_list' => '802202', 	'field' => 'email', 													])
            ->create([	'id' => '802605', 	'resource_list' => '802203', 	'field' => 'name', 													])
            ->create([	'id' => '802606', 	'resource_list' => '802203', 	'field' => 'description', 													])
            ->create([	'id' => '802607', 	'resource_list' => '802204', 	'field' => 'name', 	'relation' => '800814', 												])
            ->create([	'id' => '802608', 	'resource_list' => '802204', 	'field' => 'status', 	'relation' => '800814', 												])
            ->create([	'id' => '802609', 	'resource_list' => '802205', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802610', 	'resource_list' => '802205', 	'field' => 'description', 	'relation' => '800809', 												])
            ->create([	'id' => '802611', 	'resource_list' => '802205', 	'field' => 'remarks', 													])
            ->create([	'id' => '802612', 	'resource_list' => '802206', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802613', 	'resource_list' => '802206', 	'field' => 'description', 	'relation' => '800809', 												])
            ->create([	'id' => '802614', 	'resource_list' => '802206', 	'field' => 'remarks', 													])
            ->create([	'id' => '802615', 	'resource_list' => '802207', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802616', 	'resource_list' => '802207', 	'field' => 'description', 	'relation' => '800809', 												])
            ->create([	'id' => '802617', 	'resource_list' => '802207', 	'field' => 'remarks', 													])
            ->create([	'id' => '802618', 	'resource_list' => '802208', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802619', 	'resource_list' => '802208', 	'field' => 'description', 	'relation' => '800809', 												])
            ->create([	'id' => '802620', 	'resource_list' => '802208', 	'field' => 'remarks', 													])
            ->create([	'id' => '802621', 	'resource_list' => '802209', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802622', 	'resource_list' => '802209', 	'field' => 'description', 	'relation' => '800809', 												])
            ->create([	'id' => '802623', 	'resource_list' => '802209', 	'field' => 'name', 	'relation' => '800810', 												])
            ->create([	'id' => '802624', 	'resource_list' => '802209', 	'field' => 'remarks', 													])
            ->create([	'id' => '802625', 	'resource_list' => '802210', 	'field' => 'name', 	'relation' => '800810', 												])
            ->create([	'id' => '802626', 	'resource_list' => '802210', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802627', 	'resource_list' => '802210', 	'field' => 'description', 	'relation' => '800809', 												])
            ->create([	'id' => '802628', 	'resource_list' => '802210', 	'field' => 'remarks', 													])
            ->create([	'id' => '802629', 	'resource_list' => '802212', 	'field' => 'name', 													])
            ->create([	'id' => '802630', 	'resource_list' => '802212', 	'field' => 'status', 													])
            ->create([	'id' => '802631', 	'resource_list' => '802214', 	'field' => 'name', 													])
            ->create([	'id' => '802632', 	'resource_list' => '802214', 	'field' => 'email', 													])
            ->create([	'id' => '802633', 	'resource_list' => '802214', 	'field' => 'password', 													])
            ->create([	'id' => '802634', 	'resource_list' => '802215', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802635', 	'resource_list' => '802215', 	'field' => 'name', 	'relation' => '800810', 												])
            ->create([	'id' => '802636', 	'resource_list' => '802216', 	'field' => 'name', 	'relation' => '800809', 												])
            ->create([	'id' => '802637', 	'resource_list' => '802216', 	'field' => 'name', 	'relation' => '800810', 												])
            ->create([	'id' => '802638', 	'resource_list' => '802217', 	'field' => 'name', 													])
            ->create([	'id' => '802639', 	'resource_list' => '802217', 	'field' => 'description', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
