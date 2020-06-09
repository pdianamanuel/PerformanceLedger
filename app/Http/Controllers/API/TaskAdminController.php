<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Taskscheduler_admin;
use App\ref_modeofwork;
use App\ref_admin_employee;
use App\User;
use DB;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;

class TaskAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function __construct() {
    //     $this->middleware('auth:api');
    // }
    public function index()
    {
        $modeofworks = ref_modeofwork::all();
        $employees = DB::table('users')
                    ->select('users.id','users.name')
                    ->join('ref_admin_employees', 'users.id', '=', 'ref_admin_employees.Employee_id')
                    ->where('isActive', 1)
                    ->where('Admin_id', 1)
                    ->orderBy('name') 
                    ->get();
        // 
        // return response()->json([]);
        return response()->json(["employees"=>$employees, "modeofworks"=>$modeofworks]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $text = $request->employee;
        // dd($text);
        $validatedate = $request->validate([
            'employee' => 'required',
            'date1' => 'required|unique:taskscheduler_admins,Date',
            'mow1' => 'required',
            'task1' => 'required|min:5|max:2000',
            'date2' => 'required|unique:taskscheduler_admins,Date',
            'mow2' => 'required',
            'task2' => 'required|min:5|max:2000',
            'date3' => 'required|unique:taskscheduler_admins,Date',
            'mow3' => 'required',
            'task3' => 'required|min:5|max:2000',
            'date4' => 'required|unique:taskscheduler_admins,Date',
            'mow4' => 'required',
            'task4' => 'required|min:5|max:2000',
            'date5' => 'required|unique:taskscheduler_admins,Date',
            'mow5' => 'required',
            'task5' => 'required|min:5|max:2000',
        ]);

        DB::beginTransaction();

        try{

            // for ($i = 1; $i<=5; $i++){

            // $var = "";
            // $date="";
            // $date = "date".$i."";
            
            // $var = "day".$i."";
            // $var = Taskscheduler_admin::create(

            // [
            //     'Employee_Id' => $request['employeeid'],
            //     'Date' => $request[$date],
            //     'Mow_Id' => $request["mow".$i.""],
            //     'Task' => $request["task".$i.""]
            // ]);

            // DB::commit();
            // }
            // 
            $day1 =  Taskscheduler_admin::create(
            [
                'Employee_Id' => $request['employee'],
                'Date' => $request['date1'],
                'Mow_Id' => $request['mow1'],
                'Task' => $request['task1']
            ]);

            $day2 =  Taskscheduler_admin::create(
            [
                'Employee_Id' => $request['employee'],
                'Date' => $request['date2'],
                'Mow_Id' => $request['mow2'],
                'Task' => $request['task2']
            ]);

            $day3 =  Taskscheduler_admin::create(
            [
                'Employee_Id' => $request['employee'],
                'Date' => $request['date3'],
                'Mow_Id' => $request['mow3'],
                'Task' => $request['task3']
            ]);


            $day4 =  Taskscheduler_admin::create(
            [
                'Employee_Id' => $request['employee'],
                'Date' => $request['date4'],
                'Mow_Id' => $request['mow4'],
                'Task' => $request['task4']
            ]);

            $day5 =  Taskscheduler_admin::create(
            [
                'Employee_Id' => $request['employee'],
                'Date' => $request['date5'],
                'Mow_Id' => $request['mow5'],
                'Task' => $request['task5']
            ]);

        
            if ($day1 && $day2 && $day3 && $day4 && $day5) {

                DB::commit();
                return "Sucess 2";

            } else {

                DB::rollback();
                return "rollback failed";

            }

        }

        catch(Exception $ex){
            DB::rollback();
            return "rollback catch";
        }

        // return Taskscheduler_admin::create(
        // [
        //     'Employee_Id' => $request['employeeid'],
        //     'Date' => $request['date2'],
        //     'Mow_Id' => $request['mow2'],
        //     'Task' => $request['task2']
        // ]);
        // 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}