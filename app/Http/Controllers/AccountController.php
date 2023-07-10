<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function update_password_page(){
    return view('admin.update_password');
    }
   
    public function update_password(Request $request)
    {
            $user = User::find(Auth::id());
            if (Hash::check($request->old_password, $user->password)) {
                $request->validate(
                    [
                        'new_password' => 'required|min:8',
                        'confirm_password' => 'same:new_password'
                    ]
                );
                $user->password = Hash::make($request->new_password);
                $user->save();
                return redirect()->route('admin.home');
            } else {
                return redirect()->back()->withErrors('wrong password ');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}
