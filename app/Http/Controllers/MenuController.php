<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    public function menu()
    {
        $data['active_class'] = 'menu';
        $data['getRecord'] = MenuModel::getRecord();
        $data['header_title'] = 'Меню';

        return view('backend.menu.list', $data);
    }
    public function add_menu()
    {

        $data['active_class'] = 'menu';
        $data['getRecord'] = MenuModel::getRecord();
        $data['header_title'] = 'Додати Меню';

        return view('backend.menu.add', $data);
    }

    public function insert_menu(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:menu,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'meta_keywords' => 'nullable|string|max:255',
            'status' => 'required|boolean',
            'is_menu' => 'required|boolean',
        ]);


        $save = new MenuModel;
        $save->name = trim($request->name);
        $save->title =              trim($request->title);
        $save->slug =  trim(Str::slug($request->name));
        $save->meta_title =         trim($request->meta_title);
        $save->meta_description =   trim($request->meta_description);
        $save->meta_keywords =      trim($request->meta_keywords);
        $save->status =             trim($request->status);
        $save->is_menu =             trim($request->is_menu);
        $save->save();

        return redirect('panel/menu/list')->with('success', 'Меню успішно додано!');
    }

    public function edit_menu($id)
    {
        $data['active_class'] = 'menu';
        $data['getRecord'] = MenuModel::getSingle($id);
        $data['header_title'] = 'Редагувати Меню';

        return view('backend.menu.edit', $data);
    }

    public function update_menu(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:menu,slug,' . $id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'meta_keywords' => 'nullable|string|max:255',
            'status' => 'required|boolean',
            'is_menu' => 'required|boolean',
        ]);

        $save = menuModel::getSingle($id);
        $save->name = trim($request->name);
        $save->slug =  trim(Str::slug($request->name));
        $save->title = trim($request->title);

        $save->meta_title = trim($request->meta_title);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords = trim($request->meta_keywords);
        $save->status = $request->status;
        $save->is_menu =             trim($request->is_menu);


        $save->save();

        return redirect('panel/menu/list')->with('success', 'Меню успішно оновлено!');
    }

    public function delete_menu($id)
    {
        $save = menuModel::getSingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect()->back()->with('success', "Меню успішно видалено!");
    }
}
