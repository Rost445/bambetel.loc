<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\Mail;

class UniversalFormController extends Controller
{
    public function submit(Request $request)
    {
        $form_name = $request->input('form_name', 'default');

        // Валідація - можна робити динамічно по полях
        $rules = $request->input('validation', []);
        $request->validate($rules);

        // Зберігаємо всі поля, крім csrf та додаткових службових
        $data = $request->except(['_token', 'form_name', 'validation']);

        // Зберігаємо у базу
        $submission = FormSubmission::create([
            'form_name' => $form_name,
            'data' => $data
        ]);

        // Можна додати відправку на email
        if($request->has('admin_email')) {
            try {
                Mail::raw("Нова форма: ".$form_name."\n".json_encode($data, JSON_PRETTY_PRINT), function($message) use ($request){
                    $message->to($request->admin_email)
                        ->subject('Нова форма на сайті');
                });
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Помилка відправки email: '.$e->getMessage()
                ]);
            }
        }

        return response()->json(['success' => true]);
    }
}
