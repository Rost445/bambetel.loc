<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;
     protected $table = "setting";

    protected $fillable = [
        'id', // Додаємо id, щоб `firstOrCreate()` міг його використовувати
        'email',
        'phone',
        'instagram_link',
        'address',
        'worktime',
        'logo',
        'google_map_link', // Додаємо нове поле
        'favicon', // Додаємо favicon

    ];

    static public function getSingle()
    {
        return self::firstOrCreate(['id' => 1], [
            'email' => '',
            'phone' => '',
            'instagram_link' => '',
            'address' => '',
             'worktime' => '',
            'logo' => '',
            'google_map_link' => '',
            'favicon' => '',
        ]);
    }
    public function getLogo()
    {
        if (!empty($this->logo) && file_exists(base_path('upload/setting/' . $this->logo))) {
            return url('upload/setting/' . $this->logo);
        }
        return url('front/assets/img/logo.png'); // Шлях до стандартного логотипу
    }

    public function getFavicon()
    {
        if (!empty($this->favicon) && file_exists(base_path('upload/setting/' . $this->favicon))) {
            return url('upload/setting/' . $this->favicon);
        }
        return url('front/assets/img/favicon.png'); // Шлях до стандартного логотипу
    }
}

