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
                                 <a href="{{url('panel/dashboard')}}">Адмін-панель</a>
                             </li>
                              <li class="breadcrumb-item">
                                 <a href="{{url('panel/user/list')}}">Користувачі</a>
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
                     <form class="form-horizontal m-t-30" method="post">
                         @csrf
                         <div class="form-group">
                             <label><strong>Ім'я</strong><span class="text-danger"> *</span></label>
                             <input type="text" name="name" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label for="email"><strong>Електронна пошта</strong><span class="text-danger" > *</span></label>
                             <input type="email" id="email" name="email" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label><strong>Пароль</strong><span class="text-danger" > *</span></label>
                             <input type="password" name="password" class="form-control" required>
                         </div>
                         <div class="form-group">
                             <label><strong>Статус</strong></label>
                             <select class="form-control custom-select" name="status">
                                 <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Активний</option>
                                 <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Неактивний</option>
                             </select>
                         </div>
                         <button type="submit" class="btn btn-primary">Додати</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 @endsection
