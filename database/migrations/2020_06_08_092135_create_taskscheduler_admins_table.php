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
        Schema::create('taskscheduler_admins', function (Blueprint $table) {
            $table->id();
            $table->foreignid('Employee_Id');
            $table->date('Date');
            $table->foreignid('Mow_Id');
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
        Schema::dropIfExists('taskscheduler_admins');
    }
}
