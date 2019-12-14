<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '128')->index()->nullable();
            $table->string('description', '1024')->nullable();
            $table->foreignNullable('parent', 'tasks');
            $table->enum('returnable', ['No','Yes'])->nullable()->default('No');
            $table->enum('dismissable', ['No','Yes'])->nullable()->default('No');
            $table->enum('editable', ['No','Yes'])->nullable()->default('No');
            $table->tinyInteger('weightage')->default('100');
            $table->enum('completion', ['Description','Attachment','Sub Task'])->nullable()->default('Description');
            $table->foreignNullable('assign', 'groups');
            $table->enum('status', ['Active','Inactive'])->nullable()->default('Active');
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
        Schema::dropIfExists('tasks');
    }
}
