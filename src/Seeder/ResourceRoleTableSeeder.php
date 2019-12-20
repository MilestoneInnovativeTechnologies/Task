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
            ->create([	'id' => '800604', 	'resource' => '800504', 	'role' => '800302', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '800605', 	'resource' => '800505', 	'role' => '800301', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '800606', 	'resource' => '800506', 	'role' => '800301', 	'actions_availability' => 'All', 												])
            ->create([	'id' => '800607', 	'resource' => '800507', 	'role' => '800302', 	'actions_availability' => 'Except', 	'actions' => '803212,803213,803214,803215', 											])
            ->create([	'id' => '800608', 	'resource' => '800507', 	'role' => '800301', 	'actions_availability' => 'only', 	'actions' => '803218', 											])
            ->create([	'id' => '800609', 	'resource' => '800508', 	'role' => '800302', 	'actions_availability' => 'All', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);

    }
}
