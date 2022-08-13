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
    public function show_update(){
       return view('profile_update.update');
    }
    
    public function edit_update($email){
        
        $data = Profile::find($email);
        return view('profile_update.update', compact('data'));
        // echo $persons;
    }   

    public function profile_update(Request $request, $email){
        $persons= Profile::find($email);
        $persons->update([
            'avatar' => $request->photo,
            'name' => $request->fullname,
            'email' => $request->email,
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'experience' => $request->experience,
            'bio' => $request->bio,
            'cv' => $request->cv,
            'skills' => $request->skills,
        ]);
        return redirect()->back()->with('success','successfully updated..!!!');
    }
}
