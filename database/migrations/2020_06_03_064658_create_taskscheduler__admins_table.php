<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskschedulerAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskscheduler__admins', function (Blueprint $table) {
            $table->id();
            $table->integer('Admin_Id');
            $table->integer('Employee_Id');
            $table->integer('Mow_Id');
            $table->string('Day');
            $table->string('Task', 2000);
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
        Schema::dropIfExists('taskscheduler__admins');
    }
}