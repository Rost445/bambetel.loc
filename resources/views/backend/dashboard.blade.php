@extends('backend.layouts.app')
@section('style')
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
                            <li class="breadcrumb-item ">
                                {{ $header_title }}
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-group">
                            @if (Auth::user()->is_admin == 1)
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
                                                        <h1 class="font-light text-right">23</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 75%; height: 6px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <!-- Column -->
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
                                                        <h1 class="font-light text-right">169</h1>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 60%; height: 6px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
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
                                                        <h1 class="font-light text-right">157</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar"
                                                        style="width: 65%; height: 6px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi-image font-20 text-muted"></i>
                                                        <a class="text-secondary" href="#">
                                                            <p class="font-16 m-b-5">Фото &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">236</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 70%; height: 6px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-group">
                            @if (Auth::user()->is_admin == 1)
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
                                                        <h1 class="font-light text-right">23</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 75%; height: 6px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-flex no-block align-items-center">

                                                        <div>
                                                            <i class="mdi mdi-comment font-20  text-muted"></i>
                                                            <a class="text-secondary"
                                                                href="{{ url('panel/comment/list') }}">
                                                                <p class="font-16 m-b-5">Відгуки &nbsp; <i
                                                                        class="ti-arrow-right"></i></p>
                                                            </a>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <h1 class="font-light text-right">169</h1>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 60%; height: 6px; background-color: #0dcaf0; !important;" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                           
                                <!-- Column -->
                                <!-- Column -->
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
                                                        <h1 class="font-light text-right">157</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 65%; height: 6px; background-color: #d63384;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <i class="mdi mdi mdi-settings font-20 text-muted"></i>
                                                        <a class="text-secondary" href="{{ url('panel/settings') }}">
                                                            <p class="font-16 m-b-5">Налаштування &nbsp; <i
                                                                    class="ti-arrow-right"></i></p>
                                                        </a>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h1 class="font-light text-right">236</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 70%; height: 6px; background-color: #cc9a06;;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!--.container-fluid-->
@endsection
@section('script')
@endsection
