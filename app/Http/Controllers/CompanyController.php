<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies');
    }

    public function addpost()
    {
        return view('company.post');
    }

    public function editad()
    {
        return view('company.ad');
    }
}
