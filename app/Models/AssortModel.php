<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AssortModel extends Model
{
    use HasFactory;
      protected $table = 'assort';
      protected $fillable = [
    'user_id',
    'title',
    'menu_id',
    'description',
    'price',
    'weight',
    'meta_description',
    'meta_keywords',
    'is_publish',
    'status',
    'image_file',    // ← МАЄ бути
      ];
      static public function getSingle($id)
    {
        return self::find($id);
    }

   


        static public function getRecord()
    {
        $return =  self::select('assort.*', 'users.name as user_name', 'menu.name as menu_name', 'menu.slug as menu_slug')
            ->join('users', 'users.id', '=', 'assort.user_id')
            ->join('menu', 'menu.id', '=', 'assort.menu_id');

            if(!empty(Auth::check()) && (Auth::user()->is_admin != 1))
            {
                $return =  $return->where('assort.user_id', '=', Auth::user()->id);
            }

        if (!empty(Request::get('id'))) {
            $return =  $return->where('assort.id', '=', Request::get('id'));
        }
      if (!empty(Request::get('username'))) {
    $return =  $return->where('users.name', 'like', '%' . Request::get('username') . '%');
}
        if (!empty(Request::get('title'))) {
            $return =  $return->where('assort.title', 'like', '%' . Request::get('title') . '%');
        }
        if (!empty(Request::get('menu'))) {
            $return =  $return->where('menu.name', 'like', '%' . Request::get('menu') . '%');
        }

        if (!empty(Request::get('is_publish'))) {
            $is_publish = Request::get('is_publish');
            if ($is_publish == 100) {
                $is_publish = 0;
            }
            $return =  $return->where('assort.is_publish', '=', $is_publish);
        }

        if (!empty(Request::get('status'))) {
            $status = Request::get('status');
            if ($status == 100) {
                $status = 0;
            }
            $return =  $return->where('assort.status', '=', $status);
        }

        if (!empty(Request::get('start_date'))) {
            $return =  $return->whereDate('assort.created_at', '>=', Request::get('start_date'));
        }
        if (!empty(Request::get('end_date'))) {
            $return =  $return->whereDate('assort.created_at', '<=', Request::get('end_date'));
        }




        $return =  $return->where('assort.is_delete', '=', 0)
            ->orderBy('assort.id', 'desc')
            ->paginate(12);

        return   $return;
    }
  public function getImage()
    {
        if (!empty($this->image_file) && file_exists('upload/assort/' . $this->image_file)) {
            return url('upload/assort/' . $this->image_file);
        } else {
            return "";
        }
    }
    
public function getTag()
    {
        return $this->hasMany(AssortTagsModel::class, 'assort_id');
    }

}
