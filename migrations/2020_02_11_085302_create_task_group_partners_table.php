<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskGroupPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_group_partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('group', 'task_group_masters');
            $table->foreignCascade('partner', 'users');
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
        Schema::dropIfExists('task_group_partners');
    }
}
