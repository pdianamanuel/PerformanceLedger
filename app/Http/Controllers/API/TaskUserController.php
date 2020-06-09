<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Taskscheduler_admin;
use App\ref_modeofwork;
use App\User;
use DB;

class TaskUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modeofworks = ref_modeofwork::all();
        $employee = DB::table('users')
                    ->where('id', 2)
                    ->get();
        $info = DB::table('taskscheduler_admins')
                    ->select('users.name', 'users.id', 'ref_modeofworks.ModeOfWork')
                    ->join('users', 'users.id', '=', 'taskscheduler_admins.Employee_Id')
                    ->join('ref_modeofworks', 'ref_modeofworks.id', '=', 'taskscheduler_admins.Mow_Id')
                    ->leftJoin('taskscheduler_users', 'taskscheduler_admins.Date', '=', 'taskscheduler_users.Date')
                    ->where('taskscheduler_admins.Employee_Id', 2)
                    ->where('taskscheduler_users.Output', NULL)
                    ->orderBy('taskscheduler_admins.Date')
                    ->limit(1)
                    ->get();
        return response()->json(["info"=>$info,"modeofworks"=>$modeofworks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
