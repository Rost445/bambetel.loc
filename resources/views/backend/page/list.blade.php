@extends('backend.layouts.app');

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

                        <h4 class="card-title m-0"><a href="{{ url('panel/page/add') }}" type="button"
                                class=" float-right btn waves-effect waves-light btn-rounded btn-success"><i
                                    class="mdi mdi-book-open-variant"></i>&nbsp;Додати сторінку</a></h4>
                    </div>

                    <div class="table-responsive px-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Слаг</th>
                                    <th scope="col">Заголовок</th>
                                    <th scope="col">Мета заголовок</th>
                                    <th scope="col">Дата створення</th>

                                </tr>

                                <th scope="col"><i class="mdi mdi-pencil mr-2"></i>Редагувати</th>

                            </thead>
                            <tbody>

                                @forelse($getRecord as $value)
                                    <tr>

                                        <th scope="row">{{ $value->id }} </th>
                                        <td>{{ $value->slug }} </td>
                                        <td>{{ $value->title }} </td>
                                        <td>{{ $value->meta_title }} </td>
                                        <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                        <td><a href="{{ url('panel/page/edit/' . $value->id) }}" class="text-primary"><i
                                                    class="mdi mdi-pencil mr-2"></i>Редагувати</a></td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%">Записів не знайдено!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
