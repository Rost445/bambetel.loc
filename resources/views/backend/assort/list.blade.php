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
                        <!--search form -->
                        <form class=" mb-3 pb-3 border-bottom" accept="get">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">ID</label>
                                    <input type="text" class="form-control" name="id"
                                        value="{{ Request::get('id') }}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-label"><strong>Ім'я користувача</strong></label>
                                    <input type="text" class="form-control" name="username"
                                        value="{{ Request::get('username') }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label"><strong>Заголовок</strong></label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ Request::get('title') }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label"><b>Розділ меню</b></label>
                                    <input type="text" class="form-control" name="menu"
                                        value="{{ Request::get('menu') }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label"><b>Статус</b></label>
                                    <select class="form-control text-secondary" name="status" id="status">
                                        <option value="">Вибрати</option>
                                        <option {{ Request::get('status') == 1 ? 'selected' : '' }} value="1">
                                            Активний</option>
                                        <option {{ Request::get('status') == 100 ? 'selected' : '' }} value="100">
                                            Неактивний</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label y"><b>Опубліковано</b></label>
                                    <select class="form-control text-secondary" name="is_publish" id="status">
                                        <option value="">Вибрати</option>
                                        <option {{ Request::get('is_publish') == 1 ? 'selected' : '' }} value="1">Так
                                        </option>
                                        <option {{ Request::get('is_publish') == 100 ? 'selected' : '' }} value="100">
                                            Ні</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label"><b>Дата (від:)</b></label>
                                    <input type="date" class="form-control" name="start_date"
                                        value="{{ Request::get('start_date') }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label"><b>Дата (до:)</b></label>
                                    <input type="date" class="form-control" name="end_date"
                                        value="{{ Request::get('end_date') }}">
                                </div>
                                <!--buttons-->

                                <div class="form-group col-md-12">
                                    <button class="btn btn-info waves-effect waves-light" type="submit"><i
                                            class="mdi mdi-magnify mr-1"></i> Пошук
                                    </button>
                                    <a href="{{ url('panel/assort/list') }}" class="btn btn-danger waves-effect waves-light m-l-10"
                                        type="button"><i class="mdi mdi-broom mr-1"></i>Очистити
                                </a>
                                </div>
                            </div>
                        </form>
                        <!--.search form -->
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
                                                <img src=" {{ $value->getImage() }} " alt=""
                                                    class="img-thumbnail"
                                                    style="height: 100px; width: 100px; object-fit: cover; object-position: center;">
                                            @endif
                                        </td>
                                        @if (Auth::user()->is_admin == 1)
                                            <td>{{ $value->user_name }} </td>
                                        @endif
                                        <td>{{ $value->title }} </td>
                                        <td>{{ $value->price }} грн</td>
                                        <td>{{ $value->weight }} г/мл</td>
                                        <td>{{ $value->menu_name }} </td>
                                        <td>{{ ($value->status) ?  'Неактивний':'Активний' }} </td>
                                        <td>{{ ($value->is_publish) ? 'Так' :'Ні' }} </td>
                                        <td>{{ date('d-m-Y H:i', strtotime($value->created_at)) }}</td>
                                        <td><a href="{{ url('panel/assort/edit/' . $value->id) }}"
                                                class="text-primary"><i class="mdi mdi-pencil mr-2"></i>Редагувати</a>
                                        </td>
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
