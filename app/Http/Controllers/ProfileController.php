<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
    
        $users = User::all();
        $user_text = request()->users->name;
        $profiles = Profile::where('name','LIKE', '%'.$user_text.'%')->get();
    
        return view('profile', compact('profiles') );
    
    }

    public function edit(Request $request){
        
        //dd($request->all());
        $profile = new Profile();
        $profile->avatar = $request->photo;
        $profile->name = $request->fullname;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->gender = $request->gender;

        $profile->save();

        dd("saved");
    }
    
}
