@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h1>{{ $header_title }}</h1>

    <form method="GET" action="{{ $isTrash ? route('panel.reservations.trash') : route('panel.reservations.list') }}" class="mb-3">
        <input type="text" name="q" value="{{ request('q') }}" placeholder="Пошук..." class="form-control" />
    </form>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ім'я</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Дія</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>
                        <a href="{{ route('panel.reservations.view', $reservation->id) }}" class="btn btn-sm btn-primary">Перегляд</a>

                        @if(!$isTrash)
                            <a href="{{ route('panel.reservations.delete', $reservation->id) }}" class="btn btn-sm btn-danger"
                               onclick="return confirm('Ви впевнені, що хочете видалити заявку?')">Видалити</a>
                        @else
                            <a href="{{ route('panel.reservations.restore', $reservation->id) }}" class="btn btn-sm btn-success"
                               onclick="return confirm('Відновити заявку?')">Відновити</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $reservations->links() }}
</div>
@endsection
