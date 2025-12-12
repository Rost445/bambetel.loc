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
                             <li class="breadcrumb-item">
                                 <a href="{{ url('panel/portfolio/list') }}">Фотогалерея</a>
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
                             <label for="title" class="form-label"><b>Назва</b></label><span class="text-danger"> *</span>
                             <input type="text" name="title" value="{{ old('title') }}" required class="form-control"
                                 id="title">
                             <div class="text-danger">{{ $errors->first('title') }}</div>
                         </div>
                        {{--  <div class="form-group">
                             <label for="menu_id" class="form-label"><b>Розділ меню</b></label><span class="text-danger"> *</span>
                             <select class="form-control" name="menu_id" id="menu_id">
                                 <option value="">Оберіть розділ меню</option>
                                 @foreach ($menu as $item)
                                     <option value="{{ $item->id }}">{{ $item->name }}</option>
                                 @endforeach
                             </select>
                         </div> --}}

                         <div class="form-group">
                             <label><b>Завантаження власного файлу</b></label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><b>
                                             Завантажити</b></span>
                                 </div>
                                 <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="inputGroupFile01" type="file" name="image_name"
                                     value="{{ old('image_name') }}" required>
                                     <label class="custom-file-label" for="inputGroupFile01">Виберіть файл</label>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="description" class="form-label"><b>Опис</b></label><span class="text-danger"> *</span>
                             <textarea class="form-control" name="description" id="description" rows="3" required>{{ old('description') }}</textarea>
                             <div class="text-danger">{{ $errors->first('description') }}</div>
                         </div>
                          {{--   <div class="form-group">
                             <label for="button_name" class="form-label"><b>Назва кнопки</b></label><span class="text-danger">
                                 *</span>
                             <input type="text" name="button_name" value="{{ old('button_name') }}" required
                                 class="form-control" id="button_name">
                             <div class="text-danger">{{ $errors->first('button_name') }}</div>
                         </div>
                      <div class="form-group">
                            <label for="button_link" class="form-label"><b>Посилання кнопки</b></label><span class="text-danger">
                                 *</span>
                             <input type="text" name="button_link" value="{{ old('button_link') }}" required
                                 class="form-control" id="button_link">
                             <div class="text-danger">{{ $errors->first('button_link') }}</div>
                         </div> --}}
                         <div class="form-group">
                             <label for="status" class="form-label"><b>Статус</b></label><span class="text-danger"> *</span>
                             <select class="form-control" name="status" id="status">
                                 <option {{ 'status' == 1 ? 'selected' : '' }} value="1">Активний</option>
                                 <option {{ 'status' == 0 ? 'selected' : '' }} value="0">Неактивний</option>
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
