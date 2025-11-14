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
        $data['getRecord'] = AssortModel::getRecord();
        $data['header_title'] = 'Ассортимент меню';

        return view('backend.assort.list', $data);
    }



    public function add_assort()
    {
        $data['active_class'] = 'assort';
        $data['getMenu'] = MenuModel::getMenu();
        $data['getRecord'] = AssortModel::getRecord();
        $data['header_title'] = 'Додати блюдо';
        return view(
            'backend.assort.add',
            $data
        );
    }

    public function insert_assort(Request $request)
    {

        $save = new AssortModel;
        $save->user_id = Auth::user()->id;
        $save->title =              trim($request->title);
        $save->menu_id =              trim($request->menu_id);
        $save->description =   trim($request->description);
        $save->price =   trim($request->price);
        $save->weight =   trim($request->weight);
        $save->meta_description =   trim($request->meta_description);
        $save->meta_keywords =      trim($request->meta_keywords);
        $save->is_publish =      trim($request->is_publish);
        $save->status =              trim($request->status);

        $save->save();

        $slug = Str::slug($request->title);

        $checkSlug = AssortModel::where('slug', '=', $slug)->first();
        if (!empty($checkSlug)) {
            $dbslug = Str::slug($request->title) . '-' . $save->id;
        } else {
            $dbslug = $slug;
        }

        $save->slug = $dbslug;

        if (!empty($request->file('image_file'))) {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $dbslug . '.' . $ext;
            $file->move('upload/assort/', $filename);
            $save->image_file = $filename;
        }

        $save->save();

        //BlogTagsModel::InsertDeleteTag($save->id, $request->tags);

        return redirect('panel/assort/list')->with('success', 'Страва успішно додана!');
    }

    public function edit_assort($id)
    {
        $data['active_class'] = 'assort';
        $data['getMenu'] = MenuModel::getMenu();
        $data['getRecord'] = AssortModel::getSingle($id);
        $data['header_title'] = 'Редагувати страву';
        return view(
            'backend.assort.edit',
            $data
        );
    }
    public function update_assort($id, Request $request)
    {

        $save = AssortModel::getSingle($id);
        $save->title =              trim($request->title);
        $save->price =      trim($request->price);
        $save->weight =      trim($request->weight);
        $save->menu_id =              trim($request->menu_id);
        $save->description =   trim($request->description);
        $save->meta_title =   trim($request->meta_title);
        $save->meta_description =   trim($request->meta_description);
        $save->meta_keywords =      trim($request->meta_keywords);
        $save->is_publish =      trim($request->is_publish);
        $save->status =              trim($request->status);

        if (!empty($request->file('image_file'))) {

            if (!empty($save->getImage())) {
                unlink('upload/assort/' . $save->image_file);
            }
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $save->slug . '.' . $ext;
            $file->move('upload/assort/', $filename);
            $save->image_file = $filename;
        }

        // BlogTagsModel::InsertDeleteTag($save->id, $request->tags);

        $save->save();

        return redirect('panel/assort/list')->with('success', 'Страва успішно відредагована!');
    }



    public function delete_assort($id)
    {
        $save = AssortModel::getSingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect()->back()->with('success', "Страву успішно видалено!");
    }
}
