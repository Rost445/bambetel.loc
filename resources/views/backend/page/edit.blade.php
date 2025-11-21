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

         .form-label {
             font-weight: bold;
         }

         .bootstrap-tagsinput .tag {
             background: #7460ee !important;
         }
     </style>
     <link rel="stylesheet" type="text/css" href ="{{ url('assets/tagsinput/bootstrap-tagsinput.css') }}">
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
                             <li class="breadcrumb-item">
                                 <a href="{{ url('panel/page/list') }}">Сторінки</a>
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
                         <div class="form-group">
                             <label for="slu" class="form-label">Слаг</label><span class="text-danger"> *</span>
                             <input type="text" name="slug" value="{{ $getRecord->slug }}" required
                                 class="form-control" id="slug">
                         </div>
                             <div class="form-group">
                                <label for="title" class="form-label">Назва</label><span class="text-danger"> *</span>
                                <input type="text" name="title" value="{{ $getRecord->title }}" required
                                    class="form-control" id="title">
                            </div>
                         <div class="form-group"> <label>Опис<span class="text-danger"> *</span></label>
                             <textarea class="form-control" name="description" id="mymce">{{ $getRecord->description }}</textarea>
                         </div>
                           <div class="form-group">
                                <label for="meta_title" class="form-label">Мета заголовок</label><span class="text-danger"> *</span>
                                <input type="text" name="meta_title" value="{{ $getRecord->meta_title }}" required
                                    class="form-control" id="meta_title">
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords" class="form-label">Ключові слова</label><span
                                    class="text-danger"> *</span>
                                <input type="text" name="meta_keywords" required value="{{ $getRecord->meta_keywords }}"
                                    class="form-control" id="meta_keywords">
                            </div>
                            <div class="form-group"> <label>Мета опис<span class="text-danger"> *</span></label>
                                <textarea class="form-control" name="meta_description">{{ $getRecord->meta_description }}</textarea>
                            </div>
                         <div class="text-start pt-3">
                             <button type="submit" class="btn btn-primary">Зберегти</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
     <script src="{{ url('assets/tagsinput/bootstrap-tagsinput.js') }}"></script>
     <script>
         $("#tags").tagsinput()
     </script>
 @endsection
