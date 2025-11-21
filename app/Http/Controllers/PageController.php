<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageModel;

class PageController extends Controller
{
      public function page()
    {
        $data['active_class'] = 'page';
        $data['getRecord'] = PageModel::getRecord();
        $data['header_title'] = 'Сторінки';

        return view(
            'backend.page.list',
            $data
        );
    }

     public function add_page()
    {
        $data['active_class'] = 'page';
        $data['header_title'] = 'Додати сторінку';
        return view(
            'backend.page.add',
            $data
        );
    }
}
