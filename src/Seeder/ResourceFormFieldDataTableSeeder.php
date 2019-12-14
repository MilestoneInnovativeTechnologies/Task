<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldDataTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldData::query()
            ->create([	'id' => '801101', 	'form_field' => '801001', 	'attribute' => 'name', 													])
            ->create([	'id' => '801102', 	'form_field' => '801002', 	'attribute' => 'description', 													])
            ->create([	'id' => '801103', 	'form_field' => '801003', 	'attribute' => 'status', 													])
            ->create([	'id' => '801104', 	'form_field' => '801004', 	'attribute' => 'name', 													])
            ->create([	'id' => '801105', 	'form_field' => '801005', 	'attribute' => 'email', 													])
            ->create([	'id' => '801106', 	'form_field' => '801006', 	'attribute' => 'password', 													])
            ->create([	'id' => '801107', 	'form_field' => '801007', 	'attribute' => 'name', 													])
            ->create([	'id' => '801108', 	'form_field' => '801008', 	'attribute' => 'description', 													])
            ->create([	'id' => '801109', 	'form_field' => '801009', 	'attribute' => 'returnable', 													])
            ->create([	'id' => '801110', 	'form_field' => '801010', 	'attribute' => 'dismissable', 													])
            ->create([	'id' => '801111', 	'form_field' => '801011', 	'attribute' => 'editable', 													])
            ->create([	'id' => '801112', 	'form_field' => '801012', 	'attribute' => 'completion', 													])
            ->create([	'id' => '801113', 	'form_field' => '801013', 	'attribute' => 'assign', 													])
            ->create([	'id' => '801114', 	'form_field' => '801016', 	'attribute' => 'progress', 													])
            ->create([	'id' => '801115', 	'form_field' => '801017', 	'attribute' => 'remarks', 													])
            ->create([	'id' => '801116', 	'form_field' => '801020', 	'attribute' => 'progress', 													])
            ->create([	'id' => '801117', 	'form_field' => '801021', 	'attribute' => 'remarks', 													])
            ->create([	'id' => '801118', 	'form_field' => '801022', 	'attribute' => 'attachment1', 													])
            ->create([	'id' => '801119', 	'form_field' => '801023', 	'attribute' => 'attachment2', 													])
            ->create([	'id' => '801120', 	'form_field' => '801024', 	'attribute' => 'attachment3', 													])
            ->create([	'id' => '801121', 	'form_field' => '801027', 	'attribute' => 'progress', 													])
            ->create([	'id' => '801122', 	'form_field' => '801028', 	'attribute' => 'remarks', 													])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
