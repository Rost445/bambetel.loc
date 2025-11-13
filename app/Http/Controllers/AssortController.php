<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssortModel;
use App\Models\AssortTagsModel;
use App\Models\MenuModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AssortController extends Controller
{
   public function assort()
   {

      $data['active_class'] = 'assort';
      //$data['getRecord'] = AssortModel::getRecord();
      $data['header_title'] = 'Асортимент меню';

      return view('backend.assort.list',$data);
   }

    public function add_assort()
    {
        $data['active_class'] = 'assort';
      $data['getCategory'] = MenuModel::getMenu();
      //   $data['getRecord'] = AssortModel::getRecord();
        $data['header_title'] = 'Додати блюдо';
        return view(
            'backend.assort.add',
            $data
        );
    }
}
