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
                        <h4 class="card-title m-0"><a href="{{ url('panel/assort/add') }}" type="button"
                                class=" float-right btn waves-effect waves-light btn-rounded btn-success"><i
                                    class="mdi mdi-account-plus mr-2"></i>Додати блюдо</a></h4>

                    </div>

                    <div class="table-responsive px-3">
                        <table class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr class="">
                                    <th scope="col">#</th>
                                    <th scope="col">Ім'я</th>
                                    <th scope="col">Слаг</th>
                                    <th scope="col">Назва</th>
                                    <th scope="col">Мета назва</th>
                                    <th scope="col">Мета опис</th>
                                    <th scope="col">Ключові слова</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Меню cайта</th>
                                    <th scope="col">Дата реєстрації</th>
                                    <th scope="col"><i class="mdi mdi-account-edit mr-2"></i>Редагувати</th>
                                    <th scope="col"><i class="mdi mdi-account-remove mr-2"></i>Видалити</th>
                                </tr>
                            </thead>
                            <tbody>
                              


                            </tbody>
                        </table>
                    </div>
                    <div class="mx-3">
                     
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
