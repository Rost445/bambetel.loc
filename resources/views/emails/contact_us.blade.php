@component('mail::message')

<p>Привіт, <b>Адмін</b>! <br>
    <p><strong>Ім'я:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Телефон:</strong> {{ $user->phone }}</p>
    <p><strong>Тема:</strong> {{ $user->subject }}</p>
    <p><strong>Повідомлення:</strong></p>
    <p>{{ $user->message }}</p>

@endcomponent