<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function error (){
        return view ('admin-panel/error');

    }
    public function blank (){
        return view ('admin-panel/create-news');
        
    }
    public function buttons (){
        return view ('admin-panel/buttons');
        
    }
    public function forgot_password (){
        return view ('admin-panel/forgot_password');
        
    }
    public function admin_panel (){
        return view ('admin-panel/index');
        
    }
    public function tables (){
        return view ('admin-panel/tables');
        
    }
    public function animation (){
        return view ('admin-panel/utilities-animation');
        
    }
    public function border (){
        return view ('admin-panel/utilities-border');
        
    }
    public function color (){
        return view ('admin-panel/utilities-color');
        
    }
    public function other (){
        return view ('admin-panel/utilities-other');
        
    }
    public function logout (){
        Auth::logout();
        return redirect('/');
    }
}

