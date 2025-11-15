<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssortTagsModel extends Model
{
    use HasFactory;
     protected $table = 'assort_tags';

     static public function InsertDeleteTag($assort_id, $tags)
    {
        AssortTagsModel::where('assort_id', '=', $assort_id)->delete();
        if(!empty($tags))
        {
            $tagsarray = explode(",", $tags);
            foreach($tagsarray as $tag)
            {
                $save = new AssortTagsModel;
                $save->assort_id = $assort_id;
                $save -> name = $tag;
                $save->save();
            }
        }
    }
}
