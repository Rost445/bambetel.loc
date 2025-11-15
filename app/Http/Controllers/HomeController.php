<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
         return view('home');
    }
     public function pagemenu()
    {
       

        return view('pagemenu');
    }

    public function about()
    {
       

        return view('about');
    }

    public function gallery()
      {
        return view('gallery');
      }

      public function contacts()
      {
        return view('contacts');
      }
      
      public function reservation()
      {
        return view(' reservation');
      }
      

}
