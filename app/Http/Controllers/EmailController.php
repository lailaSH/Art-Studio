<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
  public function send(Request $request){

    $details=$request;
    $receiver=Info::find(1);
    Mail::to($receiver->email)->send(new Email($details));
    return view("send");
  }
}
