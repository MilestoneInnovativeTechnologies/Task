<?php

namespace Milestone\Task\Seeder;

use Illuminate\Database\Seeder;

class ResourceFormFieldValidationTableSeeder extends Seeder
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
        \Milestone\Appframe\Model\ResourceFormFieldValidation::query()
            ->create([	'id' => '801501', 	'form_field' => '801001', 	'rule' => 'required', 	'message' => 'Name is mandatory', 												])
            ->create([	'id' => '801502', 	'form_field' => '801002', 	'rule' => 'required', 	'message' => 'Email is required for partner to login', 												])
            ->create([	'id' => '801503', 	'form_field' => '801002', 	'rule' => 'unique', 	'message' => 'Email already exists.', 	'arg1' => 'users', 	'arg2' => 'email', 	'arg3' => '-r:update', 									])
            ->create([	'id' => '801504', 	'form_field' => '801003', 	'rule' => 'required', 	'message' => 'Password is mandatory', 												])
            ->create([	'id' => '801505', 	'form_field' => '801004', 	'rule' => 'required', 	'message' => 'Name is mandatory', 												])
            ->create([	'id' => '801506', 	'form_field' => '801009', 	'rule' => 'required', 	'message' => 'Set new status', 												])
            ->create([	'id' => '801507', 	'form_field' => '801010', 	'rule' => 'required', 	'message' => 'Remarks required', 												])
            ->create([	'id' => '801508', 	'form_field' => '801021', 	'rule' => 'required', 	'message' => 'Remarks is mandatory', 												])
        ;
        \DB::statement('set foreign_key_checks = ' . $_);
    }
}
