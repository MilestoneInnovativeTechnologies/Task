<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Group::query()
            ->create([	'id' => '800101', 	'name' => 'task_administrators', 	'description' => 'Administrator to manage tasks', 	'title' => 'Task Administrators', 												])
            ->create([	'id' => '800102', 	'name' => 'partners', 	'description' => 'User to handle tasks', 	'title' => 'Partners', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
