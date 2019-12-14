<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceRoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceRole::query()
            ->create([	'id' => '800601', 	'resource' => '800501', 	'role' => '800301', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '800602', 	'resource' => '800502', 	'role' => '800301', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '800603', 	'resource' => '800503', 	'role' => '800301', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '800604', 	'resource' => '800504', 	'role' => '800301', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '800605', 	'resource' => '800505', 	'role' => '800301', 	'actions_availability' => 'Only', 	'actions' => '803217', 											])
            ->create([	'id' => '800606', 	'resource' => '800505', 	'role' => '800302', 	'actions_availability' => 'All', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
