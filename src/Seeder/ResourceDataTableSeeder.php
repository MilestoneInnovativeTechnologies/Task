<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceData::query()
            ->create([	'id' => '802701', 	'resource' => '800505', 	'name' => 'TaskProgress', 	'description' => 'Task progress details', 	'title_field' => 'task.name', 											])
            ->create([	'id' => '802702', 	'resource' => '800501', 	'name' => 'PartnersData', 	'description' => 'Partners details', 	'title_field' => 'name', 											])
            ->create([	'id' => '802703', 	'resource' => '800504', 	'name' => 'TasksData', 	'description' => 'Tasks details', 	'title_field' => 'name', 											])
            ->create([	'id' => '802704', 	'resource' => '800502', 	'name' => 'CategoriesData', 	'description' => 'Categories details', 	'title_field' => 'name', 											])
            ->create([	'id' => '802705', 	'resource' => '800506', 	'name' => 'ProfileData', 	'description' => 'Profile', 	'title_field' => 'name', 											])
            ->create([	'id' => '802706', 	'resource' => '800507', 	'name' => 'TaskGroupData', 	'description' => 'Task Group details', 	'title_field' => 'name', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
