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
                 <h4 class="page-title"> {{ auth()->user()->is_admin ? 'Адмін-панель' : 'Панель користувача' }}</h4>
             </div>
             <div class="col-7 align-self-center">
                 <div class="d-flex align-items-center justify-content-end">
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item">
                                 <a href="{{ url('panel/dashboard') }}">
                                     {{ auth()->user()->is_admin ? 'Адмін-панель' : 'Панель користувача' }}</a>
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
                     <form class="form-horizontal m-t-30" method="post" enctype="multipart/form-data">
                         @csrf
                         <!-- Виведення помилок -->
                         @if ($errors->any())
                             <div class="alert alert-danger">
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif
                         <div class="form-group">
                             <label>Фавікон<span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">Завантажити</span>
                                 </div>
                                 <div class="custom-file">
                                     <input type="file" name="favicon" class="custom-file-input" id="inputGroupFile01">
                                     <label class="custom-file-label" for="inputGroupFile01">Вибрати файл</label>
                                 </div>
                             </div>
                               @if (!empty($getRecord) && !empty($getRecord->getFavicon()))
                                     <div class="mt-3">
                                         <img class="img-thumbnail" src="{{ $getRecord->getFavicon() }}"
                                             style="width:120px; height:120px; object-fit: cover;">
                                     </div>
                                 @endif
                         </div>
                         <div class="form-group">
                             <label>Логотип<span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">Завантажити</span>
                                 </div>
                                 <div class="custom-file">
                                     <input type="file" name="logo" class="custom-file-input" id="inputGroupFile01">
                                     <label class="custom-file-label" for="inputGroupFile01">Вибрати файл</label>
                                 </div>
                                
                             </div>
                              @if (!empty($getRecord) && !empty($getRecord->getLogo()))
                                     <div class="mt-3">
                                         <img class="img-thumbnail" src="{{ $getRecord->getLogo() }}"
                                             style="width:120px; height:120px; object-fit: cover;" alt="">
                                     </div>
                                 @endif
                         </div>

                         <div class="form-group">
                             <label class="form-label">Електронна пошта сайту <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <input type="text" value="{{ old('email', $getRecord->email ?? '') }}"
                                     class="form-control" name="email">

                             </div>
                         </div>
                         <div class="form-group">
                             <label class="form-label">Номер телефону сайту <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <input type="text" value="{{ old('phone', $getRecord->phone ?? '') }}"
                                     class="form-control" name="phone">

                             </div>
                         </div>
                         <div class="form-group">
                             <label class="form-label">Адреса сайту <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <textarea name="address" class="form-control tinymce-editor">{{ old('address', $getRecord->address ?? '') }}</textarea>

                             </div>
                         </div>
                         <div class="form-group">
                             <label class="form-label">Адреса в Google Maps (вбудований код) <span
                                     class="text-danger">*</span></label>
                             <div class="input-group">
                                 <input type="text" name="google_map_link" class="form-control"
                                     value="{{ old('google_map_link', $getRecord->google_map_link ?? '') }}">
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputName">Instagram <span class="text-danger">*</span></label>
                             <input type="text" name="instagram_link" class="form-control" required
                                 value="{{ old('instagram_link', $getRecord->instagram_link ?? '') }}">
                         </div>
                         <div class="form-group">
                             <label class="form-label">Графік роботи <span class="text-danger">*</span></label>
                             <div class="input-group">
                                 <input type="text" value="{{ $getRecord->worktime ?? '' }}" class="form-control"
                                     name="worktime" rows="4">

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
