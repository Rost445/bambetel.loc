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
                                 <a href="{{url('panel/menu/list')}}">Меню</a>
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
                        <div class="col-12">
                                <label for="name" class="form-label">Ім'я</label><span class="text-danger"> *</span>
                                <input type="text" name="name" value="{{ old('name')}}" required class="form-control" id="name">
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                            </div>
                            
                            <div class="col-12">
                                <label for="title" class="form-label">Назва</label><span class="text-danger"> *</span>
                                <input type="text" name="title" value="{{ old('title') }}" required class="form-control" id="title">
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                            </div>
                            
                            <div class="col-12">
                                <label for="slug" class="form-label">Слаг</label><span class="text-mute"> *</span>
                                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" id="slug">
                                <div class="text-danger">{{ $errors->first('slug') }}</div>
                                <p class="text-muted"><small>* Можна залишити поле пустим</small></p>
                            </div>
                            
                            <div class="col-12">
                                <label for="meta_title" class="form-label">Мета Заголовок</label><span class="text-danger"> *</span>
                                <input type="text" name="meta_title" value="{{ old('meta_title') }}" required class="form-control" id="meta_title">
                                <div class="text-danger">{{ $errors->first('meta_title') }}</div>
                            </div>
                            
                            <div class="col-12">
                                <label for="meta_description" class="form-label">Мета Опис</label><span class="text-danger"> *</span>
                                <textarea name="meta_description" required class="form-control" id="meta_description">{{ old('meta_description') }}</textarea>
                                <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                            </div>
                            
                            <div class="col-12">
                                <label for="meta_keywords" class="form-label">Ключові слова</label><span class="text-danger"> *</span>
                                <input type="text" name="meta_keywords" required value="{{ old('meta_keywords') }}" class="form-control" id="meta_keywords">
                                <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                            </div>


                            <div class="col-12">
                                <label for="status" class="form-label">Меню</label><span class="text-danger"> *</span>
                                <select class="form-control" name="is_menu" id="status">
                                    <option  value="0">Ні</option>
                                    <option  value="1">Так</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="status" class="form-label">Статус</label><span class="text-danger"> *</span>
                                <select class="form-control" name="status" id="status">
                                    <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Активний</option>
                                    <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Неактивний</option>
                                </select>
                            </div>
                            
                            <div class="text-start pt-3">
                                <button type="submit" class="btn btn-primary">Додати</button>
                            </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 @endsection
