<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;


class JobController extends Controller
{
    public function index(){
        $data = Job::all();
        return view('job',['jobs'=>$data]);
    }

    public function search(){
        //dd(request()->search);
        $search_text = request()->search;
        $jobs = Job::where('type','LIKE', '%'.$search_text.'%')->get();
        
        return view('jobs.search', compact('jobs'));
    }
}
