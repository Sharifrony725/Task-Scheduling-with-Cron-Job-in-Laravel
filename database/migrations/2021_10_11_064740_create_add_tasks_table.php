<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('e_id');
            $table->string('e_name');
            $table->string('e_email');
		  $table->string('manager_email');
            $table->string('t_mon');
            $table->string('t_tue');
            $table->string('t_wed');
            $table->string('t_thu');
            $table->string('t_fri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_tasks');
    }
}
