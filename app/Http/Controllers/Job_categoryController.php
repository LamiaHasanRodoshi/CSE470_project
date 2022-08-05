<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Job_categoryController extends Controller
{
    public function index(){
        
        return view('job_category');
    }
}
