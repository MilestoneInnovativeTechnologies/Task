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
            ->create([	'id' => '802401', 	'resource_list' => '802205', 	'relation' => '800809', 													])
            ->create([	'id' => '802402', 	'resource_list' => '802206', 	'relation' => '800809', 													])
            ->create([	'id' => '802403', 	'resource_list' => '802207', 	'relation' => '800809', 													])
            ->create([	'id' => '802404', 	'resource_list' => '802208', 	'relation' => '800809', 													])
            ->create([	'id' => '802405', 	'resource_list' => '802209', 	'relation' => '800810', 													])
            ->create([	'id' => '802406', 	'resource_list' => '802210', 	'relation' => '800810', 													])
            ->create([	'id' => '802407', 	'resource_list' => '802211', 	'relation' => '800809', 													])
            ->create([	'id' => '802408', 	'resource_list' => '802205', 	'relation' => '800814', 													])
            ->create([	'id' => '802409', 	'resource_list' => '802208', 	'relation' => '800814', 													])
            ->create([	'id' => '802410', 	'resource_list' => '802211', 	'relation' => '800814', 													])
            ->create([	'id' => '802411', 	'resource_list' => '802210', 	'relation' => '800814', 													])
            ->create([	'id' => '802412', 	'resource_list' => '802203', 	'relation' => '800813', 													])
            ->create([	'id' => '802413', 	'resource_list' => '802215', 	'relation' => '800810', 													])
            ->create([	'id' => '802414', 	'resource_list' => '802215', 	'relation' => '800809', 													])
            ->create([	'id' => '802415', 	'resource_list' => '802215', 	'relation' => '800814', 													])
            ->create([	'id' => '802416', 	'resource_list' => '802216', 	'relation' => '800810', 													])
            ->create([	'id' => '802417', 	'resource_list' => '802216', 	'relation' => '800809', 													])
            ->create([	'id' => '802418', 	'resource_list' => '802216', 	'relation' => '800814', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
