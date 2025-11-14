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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Зображення</th>
                                    @if (Auth::user()->is_admin == 1)
                                        <th scope="col">Користувач</th>
                                    @endif
                                    <th scope="col">Заголовок</th>
                                    <th scope="col">Ціна</th>
                                    <th scope="col">Вага</th>
                                    <th scope="col">Категорія</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Опубліковано</th>
                                    <th scope="col">Дата публікації</th>
                                      <th scope="col"><i class="mdi mdi-pencil mr-2"></i>Редагувати</th>
                                    <th scope="col"><i class="mdi mdi-delete mr-2"></i>Видалити</th>
                            </thead>
                            <tbody>

                                @forelse($getRecord as $value)
                                    <tr>

                                        <th scope="row">{{ $value->id }} </th>
                                        <td>
                                            @if (!empty($value->getImage()))
                                                <img src=" {{ $value->getImage() }} " alt="" class="img-thumbnail"
                                                    style="height: 100px; width: 100px; object-fit: cover; object-position: center;">
                                            @endif
                                        </td>
                                        @if (Auth::user()->is_admin == 1)
                                            <td>{{ $value->user_name }} </td>
                                        @endif
                                        <td>{{ $value->title }} </td>
                                        <td>{{ $value->price }} грн</td>
                                        <td>{{ $value->weight }} г/мл</td>
                                        <td>{{ $value->category_name }} </td>
                                        <td>{{ !empty($value->status) ? 'Неактивний ' : 'Активний' }} </td>
                                        <td>{{ !empty($value->is_publish) ? 'Так' : 'Ні' }} </td>
                                        <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                        <td><a href="{{ url('panel/assort/edit/' . $value->id) }}" class="text-primary"><i
                                                    class="mdi mdi-pencil mr-2"></i>Редагувати</a></td>
                                        <td><a onclick="return confirm('Ви дійсно хочете видалити запис?');"
                                                href="{{ url('panel/assort/delete/' . $value->id) }}"
                                                class="text-danger"><i class="mdi mdi-delete mr-2"></i>Видалити</a>
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
                    <div class="float-lg-end">
                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
