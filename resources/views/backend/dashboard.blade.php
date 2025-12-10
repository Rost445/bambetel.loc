@extends('backend.layouts.app')
@section('style')
@endsection

@section('content')
    <div class="page-breadcrumb mx-2">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">
                    {{ auth()->user()->is_admin ? $header_title : 'Панель користувача' }}
                </h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                {{ auth()->user()->is_admin ? $header_title : 'Панель користувача' }}
                            </li>

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
                    @if (Auth::user()->is_admin == 1)
                        <div class="card-body">
                            <div class="card-group">
                                <!--users-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-account-multiple-plus font-20 text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/user/list') }}">
                                                            <p class="font-16 m-b-5">Користувачі &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">{{  $user_count }}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 75%; height: 6px; background-color:#6ea8fe"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.users-->

                                <!--menu sections-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">

                                                    <div>
                                                        <i class="mdi mdi-note-multiple font-20  text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/menu/list') }}">
                                                            <p class="font-16 m-b-5">Розділи меню &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">{{  $menu_count }}</h1>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 60%; height: 6px; background-color: #82c29d;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--.menu sections-->

                                <!--assortment-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-food-fork-drink font-20 text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/assort/list') }}">
                                                            <p class="font-16 m-b-5">Ассортимент меню &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">{{$assort_count}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 65%; height: 6px; background-color: #ffda6a;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.assortment-->

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (Auth::user()->is_admin == 1)
                        <div class="card-body">
                            <div class="card-group">

                                <!--photo gallery-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-image-multiple font-20 text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/portfolio/list') }}">
                                                            <p class="font-16 m-b-5">Фотогалерея &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">{{ $portfolio_count }}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar " role="progressbar"
                                                        style="width: 70%; height: 6px; background-color: #ff9da3;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.photo gallery-->

                                <!--pages-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-book-open-variant font-20 text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/page/list') }}">
                                                            <p class="font-16 m-b-5">Сторінки&nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">{{ $page_count }}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 75%; height: 6px; background-color: #8de4f6;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.pages-->

                                <!--hero settings-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-image-area font-20 text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/hero-setting') }}">
                                                            <p class="font-16 m-b-5">Налаштування Hero &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right"></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 70%; height: 6px; background-color: #e37ebc;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.hero settings-->
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-group">
                            <!--comments-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex no-block align-items-center">

                                                <div>
                                                    <i class="mdi mdi-comment font-20  text-muted"></i>
                                                    <a class="text-secondary" href="{{ url('panel/comment/list') }}">
                                                        <p class="font-16 m-b-5">Відгуки &nbsp; <i
                                                                class="ti-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                                <div class="ml-auto">
                                                    <h1 class="font-light text-right">{{ $assort_comment_count }}</h1>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 60%; height: 6px; background-color: #ffb57a;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--.comments -->

                            <!--change password-->

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <i class="mdi mdi-lock font-20 text-muted"></i>
                                                    <a class="text-secondary" href="{{ url('panel/change-password') }}">
                                                        <p class="font-16 m-b-5">Змінити пароль &nbsp; <i
                                                                class="ti-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                                <div class="ml-auto">
                                                    <h1 class="font-light text-right"></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 65%; height: 6px; background-color: #9dff9a;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--.change password-->

                            <!--profile settings-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex no-block align-items-center">
                                                <div>
                                                    <i class="mdi mdi mdi-settings font-20 text-muted"></i>
                                                    <a class="text-secondary" href="{{ url('panel/account-settings') }}">
                                                        <p class="font-16 m-b-5">Налаштування акаунту&nbsp; <i
                                                                class="ti-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                                <div class="ml-auto">
                                                    <h1 class="font-light text-right"></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 70%; height: 6px; background-color: #7ee3cc;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--.profile settings-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (Auth::user()->is_admin == 1)
                        <div class="card-body">
                            <div class="card-group">

                                <!--reservations-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-calendar-check font-20 text-muted"></i>
                                                        <a class="text-secondary"
                                                            href="{{ url('panel/reservations/list') }}">
                                                            <p class="font-16 m-b-5">Бронювання &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">{{ $reservation_count }}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar " role="progressbar"
                                                        style="width: 70%; height: 6px; background-color: #e5ff9d;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.reservations-->

                                <!-- site settings-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-message-settings-variant font-20 text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/setting') }}">
                                                            <p class="font-16 m-b-5">Налаштування сайту&nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right"></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 75%; height: 6px; background-color: #948df6;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.site settings-->


                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
       
    </div>
@endsection
@section('script')
@endsection
