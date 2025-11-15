<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssortModel;

class HomeController extends Controller
{
    public function home()
    {
         return view('home');
    }
     public function menu()
    {
       
        return view('menu');
    }

    public function assort(){
         $data['getRecord'] = AssortModel::getRecordFront();
         return view('assort',$data);
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
