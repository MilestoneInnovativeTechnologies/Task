<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldAttrTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldAttr::query()
            ->create([	'id' => '801301', 	'form_field' => '801001', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801302', 	'form_field' => '801002', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801303', 	'form_field' => '801003', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801304', 	'form_field' => '801004', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801305', 	'form_field' => '801005', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801306', 	'form_field' => '801006', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801307', 	'form_field' => '801007', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801308', 	'form_field' => '801008', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801309', 	'form_field' => '801009', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801310', 	'form_field' => '801009', 	'name' => 'value', 	'value' => 'Completed', 												])
            ->create([	'id' => '801311', 	'form_field' => '801010', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801312', 	'form_field' => '801011', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801313', 	'form_field' => '801012', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801314', 	'form_field' => '801013', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801315', 	'form_field' => '801013', 	'name' => 'value', 	'value' => 'Completed', 												])
            ->create([	'id' => '801316', 	'form_field' => '801014', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801317', 	'form_field' => '801018', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801318', 	'form_field' => '801019', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801319', 	'form_field' => '801020', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801320', 	'form_field' => '801020', 	'name' => 'value', 	'value' => 'Dismissed', 												])
            ->create([	'id' => '801321', 	'form_field' => '801021', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801322', 	'form_field' => '801024', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801323', 	'form_field' => '801025', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801324', 	'form_field' => '801026', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801325', 	'form_field' => '801027', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801326', 	'form_field' => '801028', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801327', 	'form_field' => '801029', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801328', 	'form_field' => '801030', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801329', 	'form_field' => '801031', 	'name' => 'inline', 	'value' => '4', 												])
            ->create([	'id' => '801330', 	'form_field' => '801032', 	'name' => 'inline', 	'value' => '4', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
