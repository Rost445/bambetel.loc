<?php

namespace App\Http\Controllers;

use App\Models\PortfolioModel;
use App\Models\MenuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PortfoliosController extends Controller
{
    public function list()
    {
        $data['active_class'] = 'portfolio';
        $data['getRecord'] = PortfolioModel::getRecord();
        $data['header_title'] = 'Фотогалерея';
        return view('backend.portfolio.list', $data);
    }

    public function add_portfolio()
    {
        $data['active_class'] = 'portfolio';
        $data['header_title'] = 'Додати  фото';
       // $data['menu'] = MenuModel::getMenu();
        return view('backend.portfolio.add', $data);
    }
    public function insert_portfolio(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        /*'button_name' => 'required|string',
        'button_link' => 'nullable|url',*/
        'status' => 'required|in:1,0',
        'image_name' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
    ]);

    $portfolio = new PortfolioModel;

    $portfolio->title = trim($request->title);
    $portfolio->description = trim($request->description);
    //$portfolio->button_name = trim($request->button_name);
   // $portfolio->button_link = trim($request->button_link);
    //$portfolio->menu_id = $request->menu_id;

    // ⬇ ДОДАНО ПЕРЕВІРКУ
    if ($request->hasFile('image_name')) {
        $file = $request->file('image_name');
        $ext = $file->getClientOriginalExtension();
        $randomStr = Str::random(20);
        $filename = strtolower($randomStr) . '.' . $ext;
        $file->move(public_path('upload/portfolio/'), $filename);
        $portfolio->image_name = $filename;
    }

    // статус
     $portfolio->status = trim($request->status);

    $portfolio->save();

    return redirect()->route('panel.portfolio.list')
        ->with('success', 'Зображення до фотогалереї успішно додано!');
}

    public function edit_portfolio($id)
    {
        $data['active_class'] = 'portfolio';
        $data['getRecord'] = PortfolioModel::getSingle($id);
       // $data['menu'] = MenuModel::getMenu();
        $data['header_title'] = 'Редагувати зображення у фотогалереї';
        return view('backend.portfolio.edit', $data);
    }

    public function update_portfolio(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
           // 'button_name' => 'required|string',
           // 'button_link' => 'nullable|url',
             'status' => 'required|in:0,1',
            'image_name' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);


        $portfolio = PortfolioModel::getSingle($id);
        $portfolio->title = trim($request->title);
        $portfolio->description = trim($request->description);
       // $portfolio->button_name = trim($request->button_name);
       // $portfolio->button_link = trim($request->button_link);
        //$portfolio->menu_id = $request->menu_id; // Оновлення категорії

        if (!empty($request->file('image_name'))) {
            $file = $request->file('image_name');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('upload/portfolio/', $filename);
            $portfolio->image_name = trim($filename);
        }

        $portfolio->status = trim($request->status);
        $portfolio->save();
        return redirect()->route('panel.portfolio.list')->with('success', 'Зображення у фотогалерею успішно оновлено!');
    }
    public function delete_portfolio($id)
    {
        $Portfolio = PortfolioModel::getSingle($id);
        $Portfolio->is_delete = 1;
        $Portfolio->save();

        return redirect()->back()->with('success', 'Зображення у фотогалерею успішно видалено!');
    }
}
