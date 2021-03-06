<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormLayoutTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormLayout::query()
            ->create([	'id' => '801701', 	'resource_form' => '800904', 	'form_field' => '801011', 	'colspan' => '12', 												])
            ->create([	'id' => '801702', 	'resource_form' => '800904', 	'form_field' => '801012', 	'colspan' => '12', 												])
            ->create([	'id' => '801703', 	'resource_form' => '800904', 	'form_field' => '801013', 	'colspan' => '12', 												])
            ->create([	'id' => '801704', 	'resource_form' => '800904', 	'form_field' => '801014', 	'colspan' => '12', 												])
            ->create([	'id' => '801705', 	'resource_form' => '800904', 	'form_field' => '801015', 	'colspan' => '4', 												])
            ->create([	'id' => '801706', 	'resource_form' => '800904', 	'form_field' => '801016', 	'colspan' => '4', 												])
            ->create([	'id' => '801707', 	'resource_form' => '800904', 	'form_field' => '801017', 	'colspan' => '4', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
