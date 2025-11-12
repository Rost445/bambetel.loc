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
                                This is some text within a card block.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection
@section('script')
@endsection       