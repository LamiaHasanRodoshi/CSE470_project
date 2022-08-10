<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function edit_ad(Request $request)
    {
        $ad = new Ad();
        $ad->title = $request->title;
        $ad->ad = $request->ad;
        $ad->video = $request->video;

        $ad->save();

        dd("saved");
        //return view('companies');
    }

    public function show_ad(){
        $data = Ad::all();
        return view('companies',['ads'=>$data]);
    }

    public function show_post(){
        $data = Post::all();
        return view('companies',['posts'=>$data]);
    }
}
