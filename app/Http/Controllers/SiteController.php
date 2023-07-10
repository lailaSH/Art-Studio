<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Info;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function main_page()
    {
        $images =Image::select('*')->take(5)->get();
         $info =Info::find(1);
        return view('main',['images'=>$images,'info'=>$info]);
    }

    public function contact_page()
    {
         $info =Info::find(1);
        return view('contact',['info'=>$info]);
    }

    public function about_page()
    {
         $info =Info::find(1);
        return view('about',['info'=>$info]);
    }

    public function projects_page()
    {
        $projects =Project::all();
         $info =Info::find(1);
        return view('projects',['info'=>$info,'projects'=>$projects]);
    }

    public function project_page($title)
    {
      $project=Project::where('title',$title)->first();
        return view('singel',['project'=>$project]);
    }

}
