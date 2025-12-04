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
                            <li class="breadcrumb-item">
                                <a href="{{ url('panel/reservations/list') }}">Бронювання</a>
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
                        <div class="card-title m-0 float-right mb-4 mx-3">
                            <a href="{{ route('panel.reservations.list') }}"
                                class=" btn waves-effect waves-light btn-rounded btn-secondary"> <i
                                    class="mdi mdi-arrow-left mr-2" aria-hidden="true"></i>Назад</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <table class="table table-bordered table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ім’я</th>
                                        <th>Телефон</th>
                                        <th>Email</th>
                                        <th>Дата</th>
                                        <th width="150"><i class="mdi mdi-restore mr-2"></i>Відновити</th>
                                        <th width="150"> <i class="mdi mdi-delete-forever mr-2"></i>Видалити</th>
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
                                            <td>  <a class="btn btn-success btn-sm waves-effect waves-light btn-rounded"
                                                    href="{{ route('panel.reservations.restore', $item->id) }}">
                                                    <b><i class="mdi mdi-restore mr-1"></i>Відновити</b>
                                                </a></td>
                                            <td>
                                              
                                                <form action="{{ route('panel.reservations.destroy', $item->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm waves-effect waves-light btn-rounded "
                                                        onclick="return confirm('Ви впевнені, що хочете видалити бронювання назавжди?')">
                                                        <i class="mdi mdi-delete-forever mr-1"></i>Видалити
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Кошик порожній !</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="mx-3">
                                {!! $reservations->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
