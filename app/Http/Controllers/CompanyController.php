<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Ad;
use App\Models\Post;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies');
    }

    public function add_post()
    {
        return view('company.post');
    }
    public function add_ad()
    {
        return view('company.ad');
    }

    public function show_case()
    {
        $shows = Company::all();
        return view('company.showcase', compact('shows'));
    }

    public function edit_ad(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:ads',
        ]);

        $ad = new Ad();
        $ad->title = $request->title;
        $ad->ad = $request->ad;
        $ad->video = $request->video;

        $ad->save();

        //dd("saved");
        return redirect()->back()->with('success','successfully added..!!!');
    }

    public function edit_post(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->post = $request->post;
        $post->photo= $request->photo;
        $post->video = $request->video;

        $post->save();

        dd("saved");
        //return view('companies');
    }

    public function show_post(){
       $posts = Post::all();
       return view('companies', compact('posts'));
    }

    public function show_ad(){
        $data = Ad::all();
        return view('companies',['ads'=>$data]);
    }

    
   
}
