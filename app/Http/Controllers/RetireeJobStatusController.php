<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RetireeJobStatus;
use App\Models\User;


class RetireeJobStatusController extends Controller
{
    public function index()
    {
        return view('retireejobstatus');
    }

    public function show()
    {
        //$search_user = {{Auth::User()->name}};
        // $users = User::where('name','LIKE', '%'.$search_user.'% )->get();
        // return view('retireejobstatusupdate.view', compact('users'));

        return view('retireejobstatusupdate.view');
    }

    public function edit(Request $request){
        
        //dd($request->all());
        $status = new RetireeJobStatus();
        // $status->user_name = $request->fullname;
        // $status->user_id = $request->id;
        $status->applying_job = $request->applying;
        $status->approved_job = $request->approved;
        $status->rejected_job = $request->rejected;

        $status->save();

        dd("saved");
    }
}
