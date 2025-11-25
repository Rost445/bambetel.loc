<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AssortModel;
use App\Models\AssortCommentReplyModel;

class AssortCommentModel extends Model
{
     use HasFactory;
    protected $table = 'assort_comment';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function getReply()
        {
            return $this->hasMany(AssortCommentReplyModel::class, 'comment_id');
        }

        public function assort()
{
    return $this->belongsTo(AssortModel::class, 'assort_id');
}
}
