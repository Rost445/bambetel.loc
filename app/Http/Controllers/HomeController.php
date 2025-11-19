<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssortModel;
use App\Models\MenuModel;

class HomeController extends Controller
{
  public function home()
  {
    $data['title'] = 'Головна';
    $data['meta_title'] = 'Головна';
    $data['meta_keywords'] = 'Головна';
    $data['meta_description'] = 'Головна';

    return view('home', $data);
  }

  public function assort()
  {

    $getRecord = AssortModel::getRecordFront();
    $data['title'] = 'Меню';
    $data['meta_title'] = 'Меню';
    $data['getRecord'] = $getRecord;


    return view('assort', $data);
  }

  public function assortdetail($slug)
  {
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
        $data['header_title'] = $getRecord->title;
        $data['getMenu'] = MenuModel::getMenu();
        $data['getRecentPost'] = AssortModel::getRecentPost();
        $data['getRelatedPost'] = AssortModel::getRelatedPost($getRecord->menu_id, $getRecord->id);
        $data['getRecord'] = $getRecord;
        $data['meta_title'] =       $getRecord->title;
        $data['meta_description'] = $getRecord->meta_description;
        $data['meta_keywords'] =    $getRecord->meta_keywords;
        return view('assort_detail', $data);
      } else {
        abort(404);
      }
    }
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
