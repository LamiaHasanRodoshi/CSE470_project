<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileUpdateController extends Controller
{
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
