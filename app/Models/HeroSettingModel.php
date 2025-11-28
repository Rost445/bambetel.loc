<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSettingModel extends Model
{
    use HasFactory;
    protected $table = "section_hero";
    protected $fillable = ['title', 'paragraph', 'button_start', 'button_end', 'button_start_link', 'button_end_link', 'hero_pic', 'video'];

    static public function getSingle()
    {
        return self::find(1);
    }

    public function getHeroImg()
    {
        if (!empty($this->hero_pic) && file_exists('upload/hero_section/' . $this->hero_pic)) {
            return url('upload/hero_section/' . $this->hero_pic);
        }
        return url('front/assets/img/logo.png');
       
    }

    public function getHeroVideo()
    {
        if (!empty($this->video) && file_exists('upload/video/' . $this->video)) {
            return url('upload/video/' . $this->video);
        }
        //return null; // Відео за замовчуванням не буде
        return url('upload/video/video-4.mp4');
    }
}
