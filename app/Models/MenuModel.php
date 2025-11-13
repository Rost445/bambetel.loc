<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
     protected $table = 'menu';

      static public function getSingle($id)
     {
       //return CategoryModel::find($id);
	 	return self::find($id);
    }

    static public function getRecord()
    {
        return self::select('menu.*')
        ->where('is_delete', '=', 0)
        ->orderBy('id','desc')
        ->paginate(10);
    }

     static public function getMenu()
    {
        return self::select('menu.*')
        ->where('status', '=', 1)
        ->where('is_delete', '=', 0)
        ->get();
    }

    static public function getMainMenu()
    {
        return self::select('menu.*')
        ->where('status', '=', 1)
        ->where('is_menu', '=', 1)
        ->where('is_delete', '=', 0)
        ->get();
    }


    static public function getSlug($slug)
    {
        return self::select('menu.*')
        ->where('slug', '=', $slug)
        ->where('status', '=', 1)
        ->where('is_delete', '=', 0)
        ->first();
    }


}
