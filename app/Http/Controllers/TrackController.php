<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use DB;

class TrackController extends Controller
{
    public function index(){
        return view('track.apply');
    }

    public function apply(Request $request){
        
        //dd($request->all());
        $apply = new Track();
        $apply->name = $request->fullname;
        $apply->email = $request->email;
        $apply->address = $request->address;
        $apply->gender = $request->gender;
        $apply->dob = $request->dob;
        $apply->cv = $request->cv;
        $apply->save();

        return redirect()->back()->with('success','successfully applied..!!!');
    }

    public function list(){
        $data = Track::all();
        return view('track.list',['lists'=>$data]);
    }

    public function show_comment($id){
        $data = Track::find($id);
        return view('track.comment', compact('data'));
    }

    // public function show_aord(){
    //     return view('track.approved');
    // }
    public function edit_aord($id){
        $data = Track::find($id);
        return view('track.approved', compact('data'));
    }

    public function update_comment(Request $request, $id){
        $data = Track::find($id);
        $data->update([
            'comments' => $request->comments,
        ]);

       return redirect()->back()->with('success','successfully comment added..!!!'); 
    }

    public function update_aord(Request $request, $id){
        $data = Track::find($id);
        $data->update([
            'approved_or_denied' => $request->approved_or_denied,
        ]);

       return redirect()->back()->with('success','successfully comment added..!!!'); 
    }

}
