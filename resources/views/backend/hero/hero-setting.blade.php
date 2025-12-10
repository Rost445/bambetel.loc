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
                 <div class="card">
                     <div class="card card-body">
                         @include('layouts._message')
                         <form class="form-horizontal m-t-30" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="form-group">
                                 <label class="form-label"><b>Заголовок</b></label>
                                 <div class="input-group">
                                     <input type="text" value="{{ $getRecord->title ?? '' }}" class="form-control"
                                         name="title">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="form-label"><b>Зображення в заголовку</b></label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text"><b>
                                                 Завантажити</b></span>
                                     </div>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="inputGroupFile01"
                                             name="hero_pic" value="" aria-describedby="inputGroupFileAddon01">
                                         <label class="custom-file-label" for="inputGroupFile01">Виберіть файл</label>
                                     </div>
                                 </div>
                                 <div class="mt-3">
                                     @if (!empty($getRecord?->getHeroImg()))
                                         <img src="{{ $getRecord->getHeroImg() }}"
                                             style="width:250px; object-fit: cover; padding: 10px; border:1px solid #eee;">
                                     @endif
                                 </div>

                             </div>
                             <div class="form-group">
                                 <label class="form-label"><b>Опис</b></label>

                                 <textarea class="form-control" rows="10" name="paragraph">{{ $getRecord->paragraph ?? '' }}</textarea>
                             </div>
                             <div class="form-group">
                                 <label class="form-label"><b>Кнопка-1 текст </b></label>
                                 <div class="input-group">
                                     <input type="text" value="{{ $getRecord ? $getRecord->button_start : ''  }}" name="button_start"
                                         class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="form-label"><b>Посилання Кнопки 1</b></label>
                                <div class="input-group">
                                    <input type="text" value="{{ $getRecord ?  $getRecord->button_start_link  : ''  }}"
                                        name="button_start_link" class="form-control">
                                </div>
                             </div>
                              <div class="form-group">
                                 <label class="form-label"><b>Кнопка-2 текст </b></label>
                                 <div class="input-group">
                                     <input type="text" value="{{ $getRecord ? $getRecord->button_end : ''  }}" name="button_end"
                                         class="form-control">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="form-label"><b>Посилання Кнопки 2</b></label>
                                <div class="input-group">
                                    <input type="text" value="{{ $getRecord ?  $getRecord->button_end_link  : ''  }}"
                                        name="button_end_link" class="form-control">
                                </div>
                             </div>
                             <div class="form-group">
                                 <label class="form-label">Фонове відео</label>
                              
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text"><b>
                                                 Завантажити</b></span>
                                     </div>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="inputGroupFile01"
                                             name="video" value="" aria-describedby="inputGroupFileAddon01">
                                         <label class="custom-file-label" for="inputGroupFile01">Виберіть файл</label>
                                     </div>
                                 </div>
                                 <div class="mt-3">
                                     @if(!empty($getRecord) && !empty($getRecord->getHeroVideo()))
                                        <video width="250" controls>
                                            <source src="{{ $getRecord->getHeroVideo() }}" type="video/mp4">
                                            Ваш браузер не підтримує відео.
                                        </video>
                                     @endif
                                 </div>
                             </div>
                             <button type="submit" class="btn btn-primary">Оновити налаштування</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 @endsection
