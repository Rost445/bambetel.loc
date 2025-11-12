<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function menu()
    {
        $data['active_class'] = 'menu';
        $data['getRecord'] = MenuModel::getRecord();
        $data['header_title'] = 'Меню';

        return view('backend.menu.list', $data);
    }
}
