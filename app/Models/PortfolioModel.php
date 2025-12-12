<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model
{
    use HasFactory;

    protected $table = 'portfolios';

    public static function getSingle($id)
    {
        return self::find($id);
    }

    public static function getRecord()
    {
        return self::select('portfolios.*')
            ->where('portfolios.is_delete', '=', 0)
            ->orderBy('portfolios.id', 'desc')
            ->paginate(10);
    }

    public static function getRecordActive()
    {
        return self::select('portfolios.*')
            ->where('portfolios.is_delete', '=', 0)
            ->where('portfolios.status', '=', 1)
            ->orderBy('portfolios.id', 'asc')
            ->get();
    }

   public function getImage()
{
    if (!empty($this->image_name)) {
        return asset('upload/portfolio/' . $this->image_name);
    }
    return "";
}

//     public function menu()
// {
//     return $this->belongsTo(MenuModel::class, 'menu_id'); // 'category_id' - це поле у таблиці portfolios
// }
public static function getActivePortfolioCount()
{
    return self::where('is_delete', 0)->count();
}
}