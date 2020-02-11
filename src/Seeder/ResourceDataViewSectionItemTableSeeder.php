<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceDataViewSectionItemTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceDataViewSectionItem::query()
            ->create([	'id' => '803101', 	'section' => '803001', 	'label' => 'Name', 	'attribute' => 'name', 	'relation' => '800807', 											])
            ->create([	'id' => '803102', 	'section' => '803001', 	'label' => 'Description', 	'attribute' => 'description', 	'relation' => '800807', 											])
            ->create([	'id' => '803103', 	'section' => '803002', 	'label' => 'Status', 	'attribute' => 'progress', 												])
            ->create([	'id' => '803104', 	'section' => '803002', 	'label' => 'Date', 	'attribute' => 'updated_at', 												])
            ->create([	'id' => '803105', 	'section' => '803002', 	'label' => 'Remarks', 	'attribute' => 'remarks', 												])
            ->create([	'id' => '803106', 	'section' => '803003', 	'label' => 'Attachment 1', 	'attribute' => 'attachment1', 												])
            ->create([	'id' => '803107', 	'section' => '803003', 	'label' => 'Attachment 2', 	'attribute' => 'attachment2', 												])
            ->create([	'id' => '803108', 	'section' => '803003', 	'label' => 'Attachment 3', 	'attribute' => 'attachment3', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
