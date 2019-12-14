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
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
