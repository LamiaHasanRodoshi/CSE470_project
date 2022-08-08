<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function index(){
        
        return view('job_category');
    }
}
