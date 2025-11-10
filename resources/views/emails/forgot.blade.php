@component('mail::message')

<p>Привіт, <b>{{ $user->name }}</b>! <br>
<p> Будь ласка, відновіть свій пароль. </p>

@component('mail::button', ['url' => url('reset/'.$user->remember_token)])
Відновити
@endcomponent
<p> У випадку, якщо у вас є проблема з відновлення паролю, зв'яжіться з нами. </p>
Дяуємо!<br>
{{ config('app.name') }}
@endcomponent