<?php

namespace App\Http\Controllers;


use App\Models\AssortModel;
use App\Models\MenuModel;
use App\Models\PageModel;
use App\Models\AssortCommentModel;
use App\Models\AssortCommentReplyModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
  public function home()
  {
      $getPage =  PageModel::getSlug('golovna');
        $data['title'] = !empty($getPage) ? $getPage->title : '';
        $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
        $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';

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
   $getPage =  PageModel::getSlug('about');
        $data['title'] = !empty($getPage) ? $getPage->title : '';
        $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
        $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['description'] = !empty($getPage) ? $getPage->description : '';

    return view('about',$data);
  }

  public function gallery()
  {
    $getPage =  PageModel::getSlug('gallery');
        $data['title'] = !empty($getPage) ? $getPage->title : '';
        $data['meta_title'] =       !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_keywords'] =  !empty($getPage) ? $getPage->meta_keywords : '';
        $data['meta_description'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['description'] = !empty($getPage) ? $getPage->description : '';
    return view('gallery',$data);
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

        $save->comment = $request->comment;
        $save->save();

        return redirect()->back()->with('success', "Відповідь  опублікована!");
    }

}
