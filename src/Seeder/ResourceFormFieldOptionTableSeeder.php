<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldOptionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldOption::query()
            ->create([	'id' => '801201', 	'form_field' => '801003', 	'type' => 'Enum', 													])
            ->create([	'id' => '801202', 	'form_field' => '801009', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '801203', 	'form_field' => '801010', 	'type' => 'Foreign', 		'value_attr' => 'id', 	'label_attr' => 'name', 										])
            ->create([	'id' => '801204', 	'form_field' => '801027', 	'type' => 'Enum', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
