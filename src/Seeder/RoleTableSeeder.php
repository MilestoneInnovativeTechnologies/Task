<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\Role::query()
            ->create([	'id' => '800301', 	'name' => 'task_administrator', 	'description' => 'Administrator to manage tasks', 	'title' => 'Task Administrator', 												])
            ->create([	'id' => '800302', 	'name' => 'partner', 	'description' => 'User to handle tasks', 	'title' => 'Partner', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
