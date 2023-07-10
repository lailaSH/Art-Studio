<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function site_info_page( )
    {
        $info=Info::all()->first();
        return view('admin.info',['info'=>$info]);
    }


    public function update_info(Request $request)
    {
       $info=Info::where('id',1)->update(["number"=>$request->number,
                                        "email"=>$request->email,
                                        "FB"=>$request->fb,
                                        "IG"=>$request->ig,
                                        "PIN"=>$request->pin],
                                    );
    }}
