<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        
    return view ('login');
   }

   public function signin (Request $request){
    $trueUser = $request->only('email','password');
    $remember = $request->remember;
    if (Auth::attempt($trueUser, $remember)){
        return redirect('/panel');
    }else {
        return back();
    }

   }
   public function private (){
        
        return view ('private');
    }
}
