<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function user()
    {
        /*  $data['active_class'] = 'user';

         */
        $data['getRecord'] = User::getRecordUser();
        $data['header_title'] = 'Користувачі';
        return view('backend.user.list', $data);
    }
}
