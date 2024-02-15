<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
   public function auth(){

    return view ('auth');

   }

   public function save (Request $request){
      $user = User::create ([
         'name' => $request['name'],
         'surname' => $request['surname'],
         'email' => $request['email'],
         'password' => hash::make($request['password'])

      ]);
      $user->assignRole('user');
      return redirect ('/private');
   }
}
