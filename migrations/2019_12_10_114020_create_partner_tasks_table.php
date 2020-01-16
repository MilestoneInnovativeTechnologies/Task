<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('partner', 'users');
            $table->foreignCascade('task', 'tasks');
            $table->enum('type', ['Main','Sub'])->nullable()->default('Main');
            $table->string('remarks', '1024')->nullable();
            $table->bigInteger('attachment1')->nullable();
            $table->bigInteger('attachment2')->nullable();
            $table->bigInteger('attachment3')->nullable();
            $table->foreignNullable('category', 'categories');
            $table->enum('progress', ['New','Dismissed','Returned','Completed'])->nullable()->default('New');
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
        Schema::dropIfExists('partner_tasks');
    }
}
