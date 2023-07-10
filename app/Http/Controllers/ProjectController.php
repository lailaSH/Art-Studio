<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $project=new Project();
        $project->title=$request->title;
        $project->description=$request->description;
        if($request->has('file')){
            $request->file('file')->storeAs('public/projects/'.$request->title, '1.'.$request->file->extension());
            $project->path='/projects/'.$request->title.'/1.'.$request->file->extension();
        }
         //////////////////
        if($request->has('file2')){
            $request->file('file2')->storeAs('public/projects/'.$request->title, '2.'.$request->file->extension());
            $project->path2='/projects/'.$request->title.'/2.'.$request->file->extension();
        }
         ///////////////////
        if($request->has('file3')){
            $request->file('file3')->storeAs('public/projects/'.$request->title, '3.'.$request->file->extension());
            $project->path3='/projects/'.$request->title.'/3.'.$request->file->extension();
        }
         //////////////////////////////////////
        $project->save();
        return redirect('projects');
    }

}
