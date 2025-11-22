<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssortCommentModel;

class CommentController extends Controller
{
    public function list()
    {
        $data = [
            'active_class' => 'comment',
            'header_title' => 'Відгуки',
            'comments' => AssortCommentModel::with('user', 'getReply.user')->latest()->paginate(10),
        ];
    
        return view('backend.comment.list', $data);
    }
    
}
