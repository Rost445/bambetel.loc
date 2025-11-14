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
                        <h4 class="card-title m-0"><a href="{{ url('panel/menu/add') }}" type="button"
                                class=" float-right btn waves-effect waves-light btn-rounded btn-success"><i
                                    class="mdi mdi-account-plus mr-2"></i>Додати розділ</a></h4>

                    </div>

                    <div class="table-responsive px-3">
                        <table class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr class="">
                                    <th scope="col">#</th>
                                    <th scope="col">Ім'я</th>
                                    <th scope="col">Слаг</th>
                                    <th scope="col">Назва</th>
                                    {{-- <th scope="col">Мета назва</th> --}}
                                    <th scope="col">Мета опис</th>
                                    <th scope="col">Ключові слова</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Меню cайта</th>
                                    <th scope="col">Дата реєстрації</th>
                                    <th scope="col"><i class="mdi mdi-pencil mr-2"></i>Редагувати</th>
                                    <th scope="col"><i class="mdi mdi-delete mr-2"></i>Видалити</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</td>
                                        <td>{{ $value->name }} </td>
                                        <td>{{ $value->slug }}</td>
                                        <td>{{ $value->title }}</td>
                                        {{-- <td>{{ $value->meta_title }}</td> --}}
                                        <td>{{ $value->meta_description }}</td>
                                        <td>{{ $value->meta_keywords }}</td>
                                        <td>{{ $value->status ? 'Неактивний' : 'Активний' }}</td>
                                        <td>{{ $value->is_menu ? 'Так' : 'Ні' }} </td>
                                        <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                        <td><a href="{{ url('panel/menu/edit/' . $value->id) }}" class="text-primary"><i
                                                    class="mdi mdi-pencil mr-2"></i>Редагувати</a></td>
                                        <td><a onclick="return confirm('Ви дійсно хочете видалити запис?');"
                                                href="{{ url('panel/menu/delete/' . $value->id) }}" class="text-danger"><i
                                                    class="mdi mdi-delete text-danger mr-2"></i>Видалити</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%">Записів не знайдено!</td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                    <div class="mx-3">
                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
