<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class GroupRoleTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\GroupRole::query()
            ->create([	'id' => '800401', 	'group' => '800101', 	'role' => '800301', 													])
            ->create([	'id' => '800402', 	'group' => '800102', 	'role' => '800302', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
