<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssortModel extends Model
{
    use HasFactory;
      protected $table = 'assort';

      static public function getSingle($id)
    {
        return self::find($id);
    }

    


}
