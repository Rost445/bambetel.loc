<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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

    public function add_user()
    {
        // $data['active_class'] = 'user';
        $data['getRecord'] = User::getRecordUser();
        $data['header_title'] = 'Додати користувача';

        return view('backend.user.add', $data);
    }
    public function insert_user(Request $request)
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
        $save->name     = trim($request->name);
        $save->email    = trim($request->email);
        $save->password = trim(Hash::make($request->password));
        $save->status   = trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success', 'Користувача успішно додано!');
    }

     public function edit_user($id)
    {
        // $data['active_class'] = 'user';
        $data['getRecord'] = User::getSingle($id);
        $data['header_title'] = 'Редагувати користувача';
        return view('backend.user.edit', $data);
    }
    public function update_user($id, Request $request)
    {

         request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                // 'password' => 'required|min:6'
            ],
            [
                'name.required' => 'Поле "Ім\'я" є обов\'язковим.',
                'email.required' => 'Поле "Електронна пошта" є обов\'язковим.',
                'email.email' => 'Поле "Електронна пошта" повинно бути дійсною адресою.',
                'email.unique' => 'Користувач з такою електронною поштою вже існує.',
                /* 'password.required' => 'Поле "Пароль" є обов\'язковим.',
                'password.min' => 'Пароль повинен містити не менше :min символів.', */

            ]
        ); 
        $save = User::getSingle($id);
        $save->name     = trim($request->name);
        $save->email    = trim($request->email);
        if (!empty($request->password)) {
            $save->password = trim(Hash::make($request->password));
        }

        $save->status   = trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success', 'Користувача успішно оновлено!');
    }

    public function delete_user($id)
    {
        $save = User::getSingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect()->back()->with('success', "Користувач успішно видалений!");
    }

}
