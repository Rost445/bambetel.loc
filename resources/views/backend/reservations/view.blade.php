@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h1>{{ $header_title }}</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card mb-3">
        <div class="card-header">
            Деталі заявки #{{ $item->id }}
        </div>
        <div class="card-body">
            <p><strong>Ім'я:</strong> {{ $item->name }}</p>
            <p><strong>Телефон:</strong> {{ $item->phone }}</p>
            <p><strong>Email:</strong> {{ $item->email }}</p>
            <p><strong>Сторінка заявки:</strong> {{ $item->page ?? '-' }}</p>
            <p><strong>Створено:</strong> {{ $item->created_at }}</p>
            <p><strong>Оновлено:</strong> {{ $item->updated_at }}</p>
            @if($item->deleted_at)
                <p><strong>Видалено:</strong> {{ $item->deleted_at }}</p>
            @endif
        </div>
    </div>

    <div class="mb-3">
        @if(!$item->deleted_at)
            <a href="{{ route('panel.reservations.delete', $item->id) }}" class="btn btn-danger"
               onclick="return confirm('Ви впевнені, що хочете видалити заявку?')">Видалити</a>
        @else
            <a href="{{ route('panel.reservations.restore', $item->id) }}" class="btn btn-success"
               onclick="return confirm('Відновити заявку?')">Відновити</a>
        @endif
        <a href="{{ route('panel.reservations.list') }}" class="btn btn-secondary">Назад до списку</a>
        <a href="{{ route('panel.reservations.trash') }}" class="btn btn-warning">Перейти до кошика</a>
    </div>
</div>
@endsection
