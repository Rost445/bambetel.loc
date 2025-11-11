<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] ='Адмін-панель';
        ;
        return view('backend.dashboard');
       
    }
}
