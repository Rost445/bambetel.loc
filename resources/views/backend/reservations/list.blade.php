@extends('backend.layouts.app')
@section('style')
    <style>
        .table thead th,
        .table td {
            margin: auto !important;
            vertical-align: middle;
            text-align: start;

        }

        .table th,
        .table thead th {
            font-weight: bold !important;
        }
  
    </style>
@endsection

@section('content')
    <div class="page-breadcrumb mx-2">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{ $header_title }}</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('panel/dashboard') }}">Адмін-панель</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $header_title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('layouts._message')
                        <h4 class="card-title m-0"><a href="{{ url('panel/reservations/trash') }}" type="button"
                                class=" float-right btn waves-effect waves-light btn-rounded btn-secondary"><i
                                    class="mdi mdi-delete mr-2"></i>Кошик</a></h4>

                    </div>

                    <div class="table-responsive px-3">
                        <table class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ім'я</th>
                                    <th>Телефон</th>
                                    <th>Email</th>
                                    <th><i class="mdi mdi-eye mr-2"></i>Переглянути</th>
                                    <th scope="col"><i class="mdi mdi-delete mr-2"></i>Видалити</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->phone }}</td>
                <td>{{ $reservation->email }}</td>

                <td>
                    <a href="{{ url('panel/reservations/view/' . $reservation->id) }}" class="text-primary">
                        <i class="mdi mdi-eye mr-2"></i>Переглянути
                    </a>
                </td>

                @if (!$isTrash)
                    {{-- Видалити (не в корзині) --}}
                    <td>
                        <a href="{{ route('panel.reservations.delete', $reservation->id) }}"
                           class="text-danger"
                           onclick="return confirm('Ви впевнені, що хочете видалити заявку?')">
                            <i class="mdi mdi-delete mr-2"></i>Видалити
                        </a>
                    </td>

                 
                @else
                   

                    {{-- Відновити --}}
                    <td>
                        <a href="{{ url('panel/reservations/restore/' . $reservation->id) }}"
                           class="text-success"
                           onclick="return confirm('Ви впевнені, що хочете відновити це бронювання?')">
                            <i class="mdi mdi-pencil mr-2"></i>Відновити
                        </a>
                    </td>
                @endif
            </tr>
        @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="mx-3">
                        {!! $reservations->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
