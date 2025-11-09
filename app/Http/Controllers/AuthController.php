<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', ['header_title' => "Увійдіть до свого облікового запису"]);
    }

    public function register()
    {
        return view('auth.register', ['header_title' => "Створити обліковий запис"]);
    }

    public function forgot()
    {

        return view('auth.login',  ['header_title' => "Відновлення паролю"]);
    }

    public function create_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Поле "Ім\'я" є обов\'язковим.',
            'email.required' => 'Поле "Електронна пошта" є обов\'язковим.',
            'email.email' => 'Поле "Електронна пошта" повинно бути дійсною адресою.',
            'email.unique' => 'Користувач з такою електронною поштою вже існує.',
            'password.required' => 'Поле "Пароль" є обов\'язковим.',
            'password.min' => 'Пароль повинен містити не менше :min символів.',
        ]);

        $save = new User;
        $save->name =  trim($request->name);
        $save->email =  trim($request->email);
        $save->password =  Hash::make($request->password);
        $save->remember_token = Str::random(40);
        $save->save();
        return redirect('login')->with('success', "Ваш акаунт створено успішно! На вашу електрону адресу надіслано лист активації.");
    }
}
