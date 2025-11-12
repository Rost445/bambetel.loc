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
                                <a href="{{ url('panel/dashboard') }}">Головна</a>
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
                        <h4 class="card-title m-0"><a href="{{ url('panel/user/add') }}" type="button"
                                class=" float-right btn waves-effect waves-light btn-rounded btn-success"><i
                                    class="mdi mdi-account-plus mr-2"></i>Додати користувача</a></h4>

                    </div>

                    <div class="table-responsive px-3">
                        <table class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr class="">
                                    <th scope="col">#</th>
                                    <th scope="col">Ім'я</th>
                                    <th scope="col">Електронна пошта</th>
                                    <th scope="col">Підтверджено</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Дата реєстрації</th>
                                    <th scope="col"><i class="mdi mdi-account-edit mr-2"></i>Редагувати</i></th>
                                    <th scope="col"><i class="mdi mdi-account-remove mr-2"></i>Видалити</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</td>
                                        <td>{{ $value->name }} </td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ !empty($value->email_verified_at) ? 'Так' : 'Ні' }} </td>
                                        <td>{{ !empty($value->status) ? 'Активний' : 'Неактивний' }} </td>
                                        <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                        <td><a href="{{ url('panel/user/edit/' . $value->id) }}" class="text-primary"><i
                                                    class="mdi mdi-pencil mr-2"></i>Редагувати</a></td>
                                        <td><a onclick="return confirm('Ви дійсно хочете видалити запис?');"
                                                href="{{ url('panel/user/delete/' . $value->id) }}" class="text-danger"><i
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
