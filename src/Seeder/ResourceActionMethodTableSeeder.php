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
            ->create([	'id' => '803305', 	'resource_action' => '803205', 	'type' => 'ManageRelation', 	'idn1' => '800801', 	'idn2' => '802201', 											])
            ->create([	'id' => '803306', 	'resource_action' => '803206', 	'type' => 'ManageRelation', 	'idn1' => '800803', 	'idn2' => '802202', 											])
            ->create([	'id' => '803307', 	'resource_action' => '803207', 	'type' => 'Form', 	'idn1' => '800903', 												])
            ->create([	'id' => '803308', 	'resource_action' => '803208', 	'type' => 'List', 	'idn1' => '802203', 												])
            ->create([	'id' => '803309', 	'resource_action' => '803209', 	'type' => 'ManageRelation', 	'idn1' => '800806', 	'idn2' => '802202', 											])
            ->create([	'id' => '803310', 	'resource_action' => '803210', 	'type' => 'ListRelation', 	'idn1' => '800807', 	'idn2' => '802210', 											])
            ->create([	'id' => '803311', 	'resource_action' => '803211', 	'type' => 'ListRelation', 	'idn1' => '802204', 	'idn2' => '802205', 											])
            ->create([	'id' => '803312', 	'resource_action' => '803212', 	'type' => 'List', 	'idn1' => '802205', 												])
            ->create([	'id' => '803313', 	'resource_action' => '803213', 	'type' => 'List', 	'idn1' => '802208', 												])
            ->create([	'id' => '803314', 	'resource_action' => '803214', 	'type' => 'List', 	'idn1' => '802206', 												])
            ->create([	'id' => '803315', 	'resource_action' => '803215', 	'type' => 'List', 	'idn1' => '802207', 												])
            ->create([	'id' => '803316', 	'resource_action' => '803216', 	'type' => 'FormWithData', 	'idn1' => '800904', 	'idn2' => '802701', 											])
            ->create([	'id' => '803317', 	'resource_action' => '803217', 	'type' => 'FormWithData', 	'idn1' => '800905', 	'idn2' => '802701', 											])
            ->create([	'id' => '803318', 	'resource_action' => '803218', 	'type' => 'Data', 	'idn1' => '802701', 												])
            ->create([	'id' => '803319', 	'resource_action' => '803219', 	'type' => 'FormWithData', 	'idn1' => '800906', 	'idn2' => '802701', 											])
            ->create([	'id' => '803320', 	'resource_action' => '803220', 	'type' => 'ListRelation', 	'idn1' => '800808', 	'idn2' => '802211', 											])
            ->create([	'id' => '803321', 	'resource_action' => '803221', 	'type' => 'Form', 	'idn1' => '800907', 												])
            ->create([	'id' => '803322', 	'resource_action' => '803222', 	'type' => 'List', 	'idn1' => '802212', 												])
            ->create([	'id' => '803323', 	'resource_action' => '803223', 	'type' => 'List', 	'idn1' => '802213', 												])
            ->create([	'id' => '803324', 	'resource_action' => '803224', 	'type' => 'ListRelation', 	'idn1' => '800815', 	'idn2' => '802211', 											])
            ->create([	'id' => '803325', 	'resource_action' => '803225', 	'type' => 'ListRelation', 	'idn1' => '800815', 	'idn2' => '802208', 											])
            ->create([	'id' => '803326', 	'resource_action' => '803226', 	'type' => 'ListRelation', 	'idn1' => '800815', 	'idn2' => '802205', 											])
            ->create([	'id' => '803327', 	'resource_action' => '803227', 	'type' => 'AddRelation', 	'idn1' => '800811', 	'idn2' => '800903', 	'idn3' => '801009', 										])
            ->create([	'id' => '803328', 	'resource_action' => '803228', 	'type' => 'FormWithData', 	'idn1' => '800902', 	'idn2' => '802703', 											])
            ->create([	'id' => '803329', 	'resource_action' => '803229', 	'type' => 'FormWithData', 	'idn1' => '800901', 	'idn2' => '802702', 											])
            ->create([	'id' => '803330', 	'resource_action' => '803230', 	'type' => 'FormWithData', 	'idn1' => '800907', 	'idn2' => '802705', 											])
            ->create([	'id' => '803331', 	'resource_action' => '803231', 	'type' => 'FormWithData', 	'idn1' => '800903', 	'idn2' => '802704', 											])
            ->create([	'id' => '803332', 	'resource_action' => '803232', 	'type' => 'List', 	'idn1' => '802214', 												])
            ->create([	'id' => '803333', 	'resource_action' => '803233', 	'type' => 'FormWithData', 	'idn1' => '800908', 	'idn2' => '802706', 											])
            ->create([	'id' => '803334', 	'resource_action' => '803234', 	'type' => 'FormWithData', 	'idn1' => '800909', 	'idn2' => '802701', 											])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
