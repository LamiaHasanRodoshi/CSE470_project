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
        $search_text = $_GET['query'];
        $jobs = Job::where('type','LIKE', '%'.$search_text.'%')->get();
        
        return view('jobs.search', compact('jobs'));
    }
}
