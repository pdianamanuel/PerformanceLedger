<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Taskscheduler_admin extends Model
{
    //
    //
    
    use Notifiable;


    protected $fillable = [
    	'Employee_Id', 'Date', 'Mow_Id', 'Task'
    ];
}
