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
                             <label for="title" class="form-label"><b>Назва</b></label><span class="text-danger">
                                 *</span>
                             <input type="text" name="title" value="{{ $getRecord->title }}" class="form-control"
                                 id="title">
                             <div class="text-danger">{{ $errors->first('name') }}</div>
                         </div>
                         <div class="form-group">
                             <label for="   menu_id" class="form-label"><b>Розділ меню</b></label><span class="text-danger">
                                 *</span>
                             <select class="form-control" name="menu_id" id="menu_id">
                                 @foreach ($menu as $item)
                                     <option value="{{ $item->id }}"
                                         {{ $getRecord->menu_id == $item->id ? 'selected' : '' }}>
                                         {{ $item->name }}
                                     </option>
                                 @endforeach
                             </select>
                         </div>
                         
                         <div class="form-group">
                             <label><b>Завантаження власного файлу</b></label>
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><b>
                                             Завантажити</b></span>
                                 </div>
                                 <div class="custom-file">
                                     <input type="file" name="image_name" class="custom-file-input" id="inputGroupFile01">
                                     <label class="custom-file-label" for="inputGroupFile01">Виберіть файл</label>
                                 </div>
                                 
                             </div>
                              <div class="my-3">
                                 @if (!empty($getRecord->getImage()))
                                     <img alt="" src="{{ $getRecord->getImage() }}" style="height: 120px;"
                                         class="img-thumbnail">
                                 @endif
                             </div>
                         </div>

                         <div class="form-group">
                             <label><b>Опис</b><span class="text-danger"> *</span></label>
                             <textarea class="form-control" name="description">{{ $getRecord->description }}</textarea>
                         </div>
                         <div class="form-group">
                             <label for="button_name" class="form-label"><b>Назва кнопки</b></label><span
                                 class="text-danger">
                                 *</span>
                             <input type="text" name="button_name" value="{{ $getRecord->button_name }}"
                                 class="form-control" id="button_name">
                         </div>
                         <div class="form-group">
                             <label for="button_link" class="form-label"><b>Посилання кнопки</b></label><span
                                 class="text-danger">
                                 *</span>
                             <input type="text" name="button_link" value="{{ $getRecord->button_link }}"
                                 class="form-control" id="button_link">
                         </div>
                         <div class="form-group">
                             <label><strong>Статус</strong></label>
                             <select class="form-control" name="status">
                                 <option value="1" {{ $getRecord->status == 1 ? 'selected' : '' }}>Активний</option>
                                 <option value="0" {{ $getRecord->status == 0 ? 'selected' : '' }}>Неактивний</option>
                             </select>
                         </div>

                         <button type="submit" class="btn btn-primary">Зберегти</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 @endsection
