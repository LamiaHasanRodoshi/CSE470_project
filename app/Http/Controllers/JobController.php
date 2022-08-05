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
}
