<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Taskscheduler_user extends Model
{
    
    use Notifiable;


    protected $fillable = [
    	
            'Employee_Id' , 'Date' , 'New_Mow_Id' , 'Time_In' , 'Time_Out' , 'Output' , 'No_Hours'
    ];

}
