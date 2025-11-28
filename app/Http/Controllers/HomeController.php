<?php

namespace App\Http\Controllers;


use App\Models\AssortModel;
use App\Models\MenuModel;
use App\Models\PageModel;
use App\Models\AssortCommentModel;
use App\Models\AssortCommentReplyModel;
use App\Models\PortfolioModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\HeroSettingModel;
use Illuminate\Support\Str;

class HomeController extends Controller
{
  public function home()
  {
    $getPage =  PageModel::getSlug('golovna');
    $data['title'] = !empty($getPage) ? $getPage->title : '';
    $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
    $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
    $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';

    //Секція Hero
        $data['getHero'] = HeroSettingModel::getSingle();

    return view('home', $data);
  }

   public function hero_setting()
    {
        $data['active_class'] = 'hero-setting';
        $data['getRecord'] = HeroSettingModel::getSingle();
        $data['header_title'] = 'Головний екран';

        return view(
            'backend.hero.hero-setting',
            $data
        );
    }


     public function update_hero_setting(Request $request)
    {
        $data['active_class'] = 'hero-setting';

        // Получаем запись
        $heroSetting = HeroSettingModel::getSingle();
        if (!$heroSetting) {
            return redirect()->back()->with('error', 'Hero Setting not found.');
        }

        // Обновляем данные
        $heroSetting->title = trim($request->title);
        $heroSetting->paragraph  = trim($request->paragraph);
        $heroSetting->button_start = trim($request->button_start);
        $heroSetting->button_end = trim($request->button_end);
        $heroSetting->button_start_link = trim($request->button_start_link);
        $heroSetting->button_end_link = trim($request->button_end_link);

        // Обрабатываем загрузку изображения
        if ($request->hasFile('hero_pic')) {
            $file = $request->file('hero_pic');
            $ext = $file->getClientOriginalExtension();
            $filename = 'hero_' . Str::random(10) . '.' . $ext;

            // Перемещение файла в папку
            $file->move('upload/hero_section/', $filename);

            // Обновляем поле изображения в БД
            $heroSetting->hero_pic = $filename; // ✅ Сохраняем только имя файла, а не путь
        }

        // Завантаження відео
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = 'hero_video_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move('upload/video/', $filename);
            $heroSetting->video = $filename;
        }

        // Сохраняем обновлённые данные
        $heroSetting->save();

        return redirect()->back()->with('success', 'Налаштування головного екрану успішно оновлено.');
    }


  public function assort()
  {
    $data['getMenu'] = MenuModel::getMenu();
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
    $getPage =  PageModel::getSlug('about');
    $data['title'] = !empty($getPage) ? $getPage->title : '';
    $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
    $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
    $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
    $data['description'] = !empty($getPage) ? $getPage->description : '';

    return view('about', $data);
  }

  public function gallery()
  {
    $getPage =  PageModel::getSlug('gallery');

    $data['getPortfolio'] = PortfolioModel::getRecordActive();
    $data['getMenu'] = MenuModel::getMenu();
    $data['title'] = !empty($getPage) ? $getPage->title : '';
    $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
    $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
    $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
    $data['description'] = !empty($getPage) ? $getPage->description : '';
    return view('gallery', $data);
  }

  public function contacts()
  {
    $getPage =  PageModel::getSlug('contacts');
    $data['title'] = !empty($getPage) ? $getPage->title : '';
    $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
    $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
    $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
    $data['description'] = !empty($getPage) ? $getPage->description : '';
    return view('contacts');
  }

  public function reservation()
  {
    $getPage =  PageModel::getSlug('reservation');
    $data['title'] = !empty($getPage) ? $getPage->title : '';
    $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
    $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
    $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
    $data['description'] = !empty($getPage) ? $getPage->description : '';
    return view(' reservation');
  }

  public function AssortCommentSubmit(Request $request)
  {
    $save = new AssortCommentModel;
    $save->user_id = Auth::user()->id;
    $save->assort_id = $request->assort_id;
    $save->comment = $request->comment;
    $save->save();

    return redirect()->back()->with('success', "Ваш коментар успішо опубліковано!");
  }


  public function  AssortCommentReplySubmit(Request $request)
  {
    $save = new AssortCommentReplyModel;
    $save->user_id = Auth::user()->id;
    $save->comment_id = $request->comment_id;

    $save->comment = $request->reply;
    $save->save();

    return redirect()->back()->with('success', "Відповідь  опублікована!");
  }
}
