@component('mail::message')

<p>Привіт, <b>{{ $user->name }}</b>! <br>
<p> Будь ласка, підтвердьте свою електронну адресу. </p>

@component('mail::button', ['url' => url('verify/'.$user->remember_token)])
Підтвердити
@endcomponent
<p> У випадку, якщо у вас є проблема з реєстрацією, зв'яжіться з нами. </p>
Дякуємо!<br>
{{ config('app.name') }}
@endcomponent