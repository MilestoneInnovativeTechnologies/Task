<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskPartnerGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_partner_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('task_group', 'task_group_masters');
            $table->foreignCascade('partner_group', 'groups');
            $table->audit();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_partner_group');
    }
}
