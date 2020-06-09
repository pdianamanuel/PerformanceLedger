<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskschedulerUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskscheduler_users', function (Blueprint $table) {
            $table->id();
            $table->foreignid('Employee_Id');
            $table->date('Date');
            $table->foreignid('New_Mow_Id');
            $table->time('Time_In');
            $table->time('Time_Out');
            $table->string('Output', 2000);
            $table->integer('No_Hours');
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
        Schema::dropIfExists('taskscheduler_users');
    }
}
