<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function main_image_index($id)
    {
        return view('admin.images_control')->with(['id'=>$id]);
    }

    public function store_main_image(Request $request,$id)
    {
        if(Storage::exists('public/images/main/'.$id.'.jpg'))
        {
            Storage::delete('public/images/main/'.$id.'.jpg');
        }
         $image=Image::find($id);
         $image->name=$request->name;
         $image->title=$request->title;
         if($request->has('file')){
            $image->path= $request->file('file')->storeAs('public/images/main', $id.'.'.$request->file->extension());
         }
         $image->save();
         return redirect('main');
    }

}
