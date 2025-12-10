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
      public function insert_page(Request $request)
    {
        $save = new PageModel;
        $save->slug =              trim($request->slug);
        $save->title =              trim($request->title);
        $save->description =              trim($request->description);
        $save->meta_title =      trim($request->meta_title);
        $save->meta_keywords =      trim($request->meta_keywords);
        $save->meta_description =      trim($request->meta_description);
        $save->save();

        return redirect('panel/page/list')->with('success', 'Сторінку успішно додано!');
    }

     public function edit_page($id)
    {
        $data['active_class'] = 'page';
        $data['getRecord'] = PageModel::getSingle($id);
        $data['header_title'] = 'Редагувати сторінку';
        return view(
            'backend.page.edit',
            $data
        );
    }

     public function update_page($id, Request $request)
    {
        
        $save = PageModel::getSingle($id);
        $save->slug =              trim($request->slug);
        $save->title =              trim($request->title);
        $save->description =              trim($request->description);
        $save->meta_title =      trim($request->meta_title);
        $save->meta_keywords =      trim($request->meta_keywords);
        $save->meta_description =      trim($request->meta_description);

        $save->save();

        return redirect('panel/page/list')->with('success', 'Сторінка успішно відредагована!');
    }
}

