<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceActionMethodTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceActionMethod::query()
            ->create([	'id' => '803301', 	'resource_action' => '803201', 	'type' => 'Form', 	'idn1' => '800901', 												])
            ->create([	'id' => '803302', 	'resource_action' => '803202', 	'type' => 'List', 	'idn1' => '802201', 												])
            ->create([	'id' => '803303', 	'resource_action' => '803203', 	'type' => 'Form', 	'idn1' => '800902', 												])
            ->create([	'id' => '803304', 	'resource_action' => '803204', 	'type' => 'List', 	'idn1' => '802202', 												])
            ->create([	'id' => '803305', 	'resource_action' => '803205', 	'type' => 'ManageRelation', 	'idn1' => '800804', 	'idn2' => '802201', 											])
            ->create([	'id' => '803306', 	'resource_action' => '803206', 	'type' => 'ListRelation', 	'idn1' => '800805', 	'idn2' => '802209', 											])
            ->create([	'id' => '803307', 	'resource_action' => '803207', 	'type' => 'ListRelation', 	'idn1' => '802203', 	'idn2' => '802204', 											])
            ->create([	'id' => '803308', 	'resource_action' => '803208', 	'type' => 'List', 	'idn1' => '802204', 												])
            ->create([	'id' => '803309', 	'resource_action' => '803209', 	'type' => 'List', 	'idn1' => '802207', 												])
            ->create([	'id' => '803310', 	'resource_action' => '803210', 	'type' => 'FormWithData', 	'idn1' => '800903', 	'idn2' => '802701', 											])
            ->create([	'id' => '803311', 	'resource_action' => '803211', 	'type' => 'FormWithData', 	'idn1' => '800904', 	'idn2' => '802701', 											])
            ->create([	'id' => '803312', 	'resource_action' => '803212', 	'type' => 'Data', 	'idn1' => '802701', 												])
            ->create([	'id' => '803313', 	'resource_action' => '803213', 	'type' => 'FormWithData', 	'idn1' => '800905', 	'idn2' => '802701', 											])
            ->create([	'id' => '803314', 	'resource_action' => '803214', 	'type' => 'ListRelation', 	'idn1' => '800806', 	'idn2' => '802210', 											])
            ->create([	'id' => '803315', 	'resource_action' => '803215', 	'type' => 'Form', 	'idn1' => '800906', 												])
            ->create([	'id' => '803316', 	'resource_action' => '803216', 	'type' => 'List', 	'idn1' => '802211', 												])
            ->create([	'id' => '803317', 	'resource_action' => '803217', 	'type' => 'List', 	'idn1' => '802212', 												])
            ->create([	'id' => '803318', 	'resource_action' => '803218', 	'type' => 'ListRelation', 	'idn1' => '800813', 	'idn2' => '802210', 											])
            ->create([	'id' => '803319', 	'resource_action' => '803219', 	'type' => 'ListRelation', 	'idn1' => '800813', 	'idn2' => '802207', 											])
            ->create([	'id' => '803320', 	'resource_action' => '803220', 	'type' => 'ListRelation', 	'idn1' => '800813', 	'idn2' => '802204', 											])
            ->create([	'id' => '803321', 	'resource_action' => '803221', 	'type' => 'AddRelation', 	'idn1' => '800809', 	'idn2' => '800902', 	'idn3' => '801006', 										])
            ->create([	'id' => '803322', 	'resource_action' => '803222', 	'type' => 'FormWithData', 	'idn1' => '800901', 	'idn2' => '802702', 											])
            ->create([	'id' => '803323', 	'resource_action' => '803223', 	'type' => 'FormWithData', 	'idn1' => '800906', 	'idn2' => '802704', 											])
            ->create([	'id' => '803324', 	'resource_action' => '803224', 	'type' => 'FormWithData', 	'idn1' => '800902', 	'idn2' => '802703', 											])
            ->create([	'id' => '803325', 	'resource_action' => '803225', 	'type' => 'List', 	'idn1' => '802213', 												])
            ->create([	'id' => '803326', 	'resource_action' => '803226', 	'type' => 'FormWithData', 	'idn1' => '800907', 	'idn2' => '802705', 											])
            ->create([	'id' => '803327', 	'resource_action' => '803227', 	'type' => 'FormWithData', 	'idn1' => '800908', 	'idn2' => '802701', 											])
            ->create([	'id' => '803328', 	'resource_action' => '803228', 	'type' => 'Form', 	'idn1' => '800909', 												])
            ->create([	'id' => '803329', 	'resource_action' => '803229', 	'type' => 'List', 	'idn1' => '802216', 												])
            ->create([	'id' => '803330', 	'resource_action' => '803230', 	'type' => 'FormWithData', 	'idn1' => '800909', 	'idn2' => '802706', 											])
            ->create([	'id' => '803331', 	'resource_action' => '803231', 	'type' => 'ManageRelation', 	'idn1' => '800815', 	'idn2' => '802216', 											])
            ->create([	'id' => '803332', 	'resource_action' => '803232', 	'type' => 'ManageRelation', 	'idn1' => '800814', 	'idn2' => '802202', 											])
            ->create([	'id' => '803333', 	'resource_action' => '803233', 	'type' => 'ManageRelation', 	'idn1' => '800801', 	'idn2' => '802202', 											])
            ->create([	'id' => '803334', 	'resource_action' => '803234', 	'type' => 'ManageRelation', 	'idn1' => '800816', 	'idn2' => '802201', 											])
            ->create([	'id' => '803335', 	'resource_action' => '803235', 	'type' => 'ManageRelation', 	'idn1' => '800817', 	'idn2' => '802216', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
