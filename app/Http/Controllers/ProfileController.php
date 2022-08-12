<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show()
    {
        $email = Auth()->user()->email;
        $data = Profile::where('email', $email)->get();
        return view('profile', ['profiles'=>$data]);
        // echo $email;
        // echo $data;
    }

    
    public function edit(Profile $profile)
    {
        //
    }

    
    public function update(Request $request, Profile $profile)
    {
        //
    }

    public function destroy(Profile $profile)
    {
        //
    }
}
