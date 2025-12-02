@extends('backend.layouts.app')

@section('content')
<main class="main">
    <div class="container mt-4">

        <h3>{{ $header_title }}</h3>

        @include('layouts._message')

        <div class="card mt-3">
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ім’я</th>
                            <th>Телефон</th>
                            <th>Email</th>
                            <th>Дата</th>
                            <th width="150">Дії</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($reservations as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email ?? '-' }}</td>
                            <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                   href="{{ route('panel.reservations.restore', $item->id) }}">
                                   Відновити
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Корзина порожня</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $reservations->links() }}
            </div>
        </div>

    </div>
</main>
@endsection
