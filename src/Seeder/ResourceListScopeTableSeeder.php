<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceListScopeTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceListScope::query()
            ->create([	'id' => '802301', 	'resource_list' => '802205', 	'scope' => '800701', 													])
            ->create([	'id' => '802302', 	'resource_list' => '802206', 	'scope' => '800703', 													])
            ->create([	'id' => '802303', 	'resource_list' => '802207', 	'scope' => '800704', 													])
            ->create([	'id' => '802304', 	'resource_list' => '802208', 	'scope' => '800702', 													])
            ->create([	'id' => '802305', 	'resource_list' => '802209', 	'scope' => '800702', 													])
            ->create([	'id' => '802306', 	'resource_list' => '802209', 	'scope' => '800705', 													])
            ->create([	'id' => '802307', 	'resource_list' => '802213', 	'scope' => '800707', 													])
            ->create([	'id' => '802308', 	'resource_list' => '802215', 	'scope' => '800705', 													])
            ->create([	'id' => '802309', 	'resource_list' => '802215', 	'scope' => '800708', 													])
            ->create([	'id' => '802310', 	'resource_list' => '802216', 	'scope' => '800705', 													])
            ->create([	'id' => '802311', 	'resource_list' => '802216', 	'scope' => '800709', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
