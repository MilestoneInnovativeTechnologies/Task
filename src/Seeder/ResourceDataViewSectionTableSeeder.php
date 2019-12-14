<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataViewSectionTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceDataViewSection::query()
            ->create([	'id' => '803001', 	'resource_data' => '802701', 		'title_field' => 'partner.name', 		'colspan' => '12', 										])
            ->create([	'id' => '803002', 	'resource_data' => '802701', 	'title' => 'Status Detail', 			'colspan' => '7', 										])
            ->create([	'id' => '803003', 	'resource_data' => '802701', 	'title' => 'Attachments', 			'colspan' => '5', 										])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
