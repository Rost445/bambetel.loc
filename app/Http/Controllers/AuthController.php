<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


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

     public function forgot_password(Request $request){

         $user = User::where('email', '=', $request->email)->first();
        if (!empty($user)) {
            $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', 'Будь ласка, перевірте поштову скриньку, та відновіть ваш пароль.');
        } else {
            return redirect()->back()->with('error', "Така електронна адреса не знайдена.");
        }
     }

     public function reset($token)
    {

        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)) {
           
            $data['header_title'] = "Відновлення паролю";
            $data['user'] = $user;
            return view('auth.reset', $data);
        } else {
            abort(404);
        }
    }

    public function post_reset($token, Request $request)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)) {
            if ($request->password == $request->cpassword) {
                $user->password = Hash::make($request->password);
                if (empty($user->email_verified_at)) {
                    $user->email_verified_at = date('Y-m-d H:i:s');
                }
                $user->remember_token = Str::random(40);
                $user->save();
                return redirect('login')->with('success', "Пароль успішно відновлено!");
            } else {
                return redirect()->back()->with('error', "Паролі не співпадають!");
            }
        } else {
            abort(404);
        }
    }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if (!empty(Auth::user()->email_verified_at)) {
                return redirect('panel/dashboard');
            } else {
                $user_id = Auth::user()->id;
                Auth::logout();
                $save =  User::getSingle($user_id);
                $save->remember_token = Str::random(40);
                $save->save();


                Mail::to($save->email)->send(new  RegisterMail($save));
                return redirect()->back()->with('success', "Будь ласка, спочатку підтвердьте свою електронну пошту.Перегляньте свою поштову скриньку.");
            }
        } else {
            return redirect()->back()->with('error', "Будь ласка, введіть коректну електронну адресу та пароль.");
        }
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

          Mail::to($save->email)->send(new  RegisterMail($save));

        return redirect('login')->with('success', "Ваш акаунт створено успішно! На вашу електрону адресу надіслано лист активації.");
    }

     public function verify($token)
    {

        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(40);
            $user->save();
            return redirect('login')->with('success', "Електрону пошту підтверджено!");
        } else {
            abort(404);
        }
    }
}
