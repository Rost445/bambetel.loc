@extends('backend.layouts.app');
@section('style')
<style>
    
 
</style>
@endsection

@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Користувачі</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{url('panel/dashboard')}}">Головна</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Користувачі</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('script')
@endsection
