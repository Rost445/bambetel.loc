<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
     return view('auth.login', ['header_title' => "Увійдіть до свого облікового запису"]);
    }

    public function register() {
        return view('auth.register', ['header_title' => "Створити обліковий запис"]);
    }

     public function forgot()
    {
      
        return view('auth.login',  ['header_title' => "Відновлення паролю"]);
    }

   
}
