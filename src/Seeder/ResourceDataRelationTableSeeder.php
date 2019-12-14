<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataRelationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceDataRelation::query()
            ->create([	'id' => '802901', 	'resource_data' => '802701', 	'relation' => '800809', 													])
            ->create([	'id' => '802902', 	'resource_data' => '802701', 	'relation' => '800810', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
