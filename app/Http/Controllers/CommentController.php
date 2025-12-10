<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    

    public function delete($id)
{
    $comment = AssortCommentModel::findOrFail($id);
    $user = auth()->user();

    // Перевіряємо, чи це адмін або автор коментаря
    if ($user->is_admin == 1 || $user->id === $comment->user_id) {
        $comment->getReply()->delete(); // Видаляємо відповіді
        $comment->delete(); // Видаляємо коментар

        return redirect()->route('panel.comment.list')->with('success', 'Коментар успішно видалено!');
    }
   
    return redirect()->route('panel.comment.list')->with('error', "Видалення цього коментаря заборонено.");
}

}
