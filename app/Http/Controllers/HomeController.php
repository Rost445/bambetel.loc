<?php

namespace App\Http\Controllers;


use App\Models\AssortModel;
use App\Models\MenuModel;
use App\Models\PageModel;
use App\Models\User;
use App\Models\AssortCommentModel;
use App\Models\AssortCommentReplyModel;
use App\Models\PortfolioModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\HeroSettingModel;
use App\Models\SettingModel;
use Illuminate\Support\Str;
use App\Models\ContactUsModel;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

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
      $data['getMenu'] = MenuModel::getMenu()
        ->where('is_menu', 0);


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
    $first_number = mt_rand(0, 9);
    $second_number = mt_rand(0, 9);
    $data['first_number'] = $first_number;
    $data['second_number'] = $second_number;

    Session::put('total_sum', $first_number + $second_number);

    $data['header_title'] = "Зв'яжіться з нами";

    $getPage =  PageModel::getSlug('contacts');
    $data['title'] = !empty($getPage) ? $getPage->title : '';
    $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
    $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
    $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
    $data['description'] = !empty($getPage) ? $getPage->description : '';
    return view('contacts',$data);
  }

  public function submit_contact(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email',
      'phone' => 'required|string',
      'subject' => 'required|string',
      'message' => 'required|string',
      'verification' => 'required|integer',
    ]);

    if (Session::has('total_sum') && $request->verification == Session::get('total_sum')) {
      $save = new ContactUsModel;
      if (Auth::check()) {
        $save->user_id = Auth::user()->id;
      }
      $save->name = trim($request->name);
      $save->email  = trim($request->email);
      $save->phone  = trim($request->phone);
      $save->subject = trim($request->subject);
      $save->message = trim($request->message);
      $save->save();

      $admin = User::where('is_admin', 1)->first();

      if ($admin && $admin->email) {
        try {
          Mail::to($admin->email)->send(new ContactUsMail($save));
        } catch (\Exception $e) {
          return back()->with('error', 'Помилка відправки email: ' . $e->getMessage());
        }
      } else {
        return back()->with('error', 'Адміністратор не знайдений або не має email.');
      }

      //$this->sendToTelegram($save);

      return redirect()->back()->with('success', 'Повідомлення успішно відправлено!');
    } else {
      return redirect()->back()->with('error', 'Невірна сума перевірки!');
    }
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

  public function setting()
  {
    $data['active_class'] = 'setting';
    $data['getRecord'] = SettingModel::getSingle();
    $data['header_title'] = 'Налаштування сайту';

    return view(
      'backend.setting.setting',
      $data
    );
  }

  public function update_setting(Request $request)
  {
    // Валідація
    $request->validate([
      'email' => 'required|email',
      'phone' => 'required|string|max:20',
      'instagram_link' => 'nullable|url',
      'google_map_link' => 'nullable|url',
      'worktime' => 'nullable|string|max:255',
      'address' => 'nullable|string|max:255',
      'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    // Отримання налаштувань
    $save = SettingModel::getSingle();

    $save->email = trim($request->email);
    $save->phone = trim($request->phone);
    $save->instagram_link = trim($request->instagram_link);
    $save->worktime = trim($request->worktime);
    $save->address = trim($request->address);
    $save->google_map_link = trim($request->google_map_link); // Збереження посилання на карту

    if ($request->hasFile('logo')) {
      $file = $request->file('logo');
      $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
      $file->move(base_path('upload/setting/'), $filename); // Використовуємо `base_path()`

      // Видаляємо старий файл, якщо він є
      if (!empty($save->logo) && file_exists(base_path('upload/setting/' . $save->logo))) {
        unlink(base_path('upload/setting/' . $save->logo));
      }

      $save->logo = $filename;
    }

    // Для favicon
    if ($request->hasFile('favicon')) {
      $file = $request->file('favicon');
      $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
      $file->move('upload/setting/', $filename);

      if (!empty($save->favicon) && file_exists('upload/setting/' . $save->favicon)) {
        unlink('upload/setting/' . $save->favicon);
      }
      $save->favicon = $filename;
    }


    $save->save(); // Зберігаємо зміни

    return redirect()->back()->with('success', "Налаштування сторінки збережено!");
  }
}
