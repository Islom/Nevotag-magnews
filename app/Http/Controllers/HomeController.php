<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home (){
        
        return view ('index');
    }
    public function post (){
        
        return view ('post');
    }
    public function products (){
        
        return view ('products');
    }

    public function save (Request $request){
      $products = Product::create ([
         'Title_product' => $request['Title_product'],
         'Description' => $request['Description'],
         'Size' => $request['Size'],
         'Price' => $request['Price']

      ]);
      return redirect('/products');
  }


}   
