<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceListRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListRelation::query()
            ->create([	'id' => '802401', 	'resource_list' => '802204', 	'relation' => '800809', 													])
            ->create([	'id' => '802402', 	'resource_list' => '802205', 	'relation' => '800809', 													])
            ->create([	'id' => '802403', 	'resource_list' => '802206', 	'relation' => '800809', 													])
            ->create([	'id' => '802404', 	'resource_list' => '802207', 	'relation' => '800809', 													])
            ->create([	'id' => '802405', 	'resource_list' => '802208', 	'relation' => '800810', 													])
            ->create([	'id' => '802406', 	'resource_list' => '802209', 	'relation' => '800810', 													])
            ->create([	'id' => '802407', 	'resource_list' => '802210', 	'relation' => '800809', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
