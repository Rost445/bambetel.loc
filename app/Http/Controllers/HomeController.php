<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssortModel;
use App\Models\MenuModel;

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

      public function assortdetail($slug)
    {
/* 
        $getMenu = MenuModel::getSlug($slug);
        if (!empty($getMenu)) {
            $data['title'] =       $getMenu->name;
            $data['meta_title'] =       $getMenu->meta_title;
            $data['meta_description'] = $getMenu->meta_description;
            $data['meta_keywords'] =    $getMenu->meta_keywords;
            $data['header_title'] = $getMenu->name;
            $data['getRecord'] = AssortModel::getRecordFrontMenu($getMenu->id) ?? collect([]);


            return view('assort', $data);
        } else {

            $getRecord = AssortModel::getRecordSlug($slug);
            if (!empty($getRecord)) {
                $data['getMenu'] = MenuModel::getMenu();
                $data['getRecentPost'] = AssortModel::getRecentPost();
                $data['getRelatedPost'] = AssortModel::getRelatedPost($getRecord->Menu_id, $getRecord->id);
                $data['header_title'] = $getRecord->title;
                $data['getRecord'] = $getRecord;
                $data['meta_title'] =       $getRecord->title;
                $data['meta_description'] = $getRecord->meta_description;
                $data['meta_keywords'] =    $getRecord->meta_keywords; */

                return view('assort_detail');
           /*  } else {
                abort(404, "Сторінку не знайдено");
           
        } } */
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
