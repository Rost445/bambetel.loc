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
                                 <a href="{{url('panel/dashboard')}}">Адмін-панель</a>
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
             <div class="col-sm-12">
                 <div class="card card-body">
                     @include('layouts._message')
                     <form class="form-horizontal m-t-30" method="post"  enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label class="form-label"><b>Ім'я</b></label>
                                <div class="input-group">
                                    <input type="text" value="{{ $getUser->name }}" class="form-control" name="name">
                                </div>
                         </div>
                         <div class="form-group">

                              <label class="form-label"><b>Електронна пошта</b></label>
                                <div class="input-group">
                                    <input type="email" value="{{ $getUser->email }}" readonly class="form-control" name="email">
                                </div>
                         </div>
                         <div class="form-group">
                                    <label><b>Профіль</b></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Завантажити</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" value="{{ $getUser->email }}"  name="profile_pic" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Вибрати файл</label>
                                        </div>
                                    </div>
                                     <div class="mt-3">
                                    <img class="img-thumbnail" src="{{ $getUser->getProfile() }}" style=" height:120px; width:120px; object-fit: cover;">
                                </div>
                                </div>
                       
                       
                       
                      
                         <button type="submit" class="btn btn-primary">Оновити налаштування</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 
 @endsection
