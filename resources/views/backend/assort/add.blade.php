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

         .form-label {
             font-weight: bold;
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
                                 <a href="{{ url('panel/assort/list') }}">Асортимент меню</a>
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
                             <label for="title" class="form-label">Назва</label><span class="text-danger"> *</span>
                             <input type="text" name="title" required class="form-control" id="title">
                             <div class="text-danger">{{ $errors->first('title') }}</div>
                         </div>
                         <div class="form-group">
                             <label for="menu_id" class="form-label">Розділ меню</label><span class="text-danger">
                                 *</span>
                             <select class="form-control" name="menu_id" required>
                                 <option value="">Вибрати категорію</option>
                                  @foreach ($getMenu as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach

                             </select>
                         </div>
                         <div class="form-group">
                             <label for="description" class="form-label">Зображення</label><span class="text-danger"></span>
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">Завантажити</span>
                                 </div>
                                 <div class="custom-file">
                                     <input type="file" name="image_file" class="custom-file-input"
                                         id="inputGroupFile01">
                                     <label class="custom-file-label" for="inputGroupFile01">Виберіть файл</label>
                                 </div>
                             </div>
                         </div>

                         <div class="form-group">
                             <label for="description" class="form-label">Опис</label><span class="text-danger">
                                 *</span>
                          <textarea name="description" rows="7" class="form-control" id="mymce"></textarea>

                             <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                         </div>
                         <div class="form-group">
                             <label for="weight" class="form-label">Вага (г/кг)</label>
                             <input type="number" step="1" class="form-control" id="weight" name="weight"
                                 placeholder="Наприклад: 250">
                         </div>
                         <div class="form-group">
                             <label for="price" class="form-label">Ціна (грн)</label>
                             <input type="number" step="1" class="form-control" id="price" name="price"
                                 placeholder="Наприклад: 120.50">
                         </div>

                         <div class="form-group">
                             <label for="title" class="form-label">Теги</label>
                             <input type="text" name="tags" class="form-control">
                             <div class="text-danger">{{ $errors->first('title') }}</div>
                         </div>

                         <hr>

                         <div class="form-group">
                             <label for="meta_title" class="form-label">Мета Заголовок</label><span class="text-danger">
                                 *</span>
                             <input type="text" name="meta_title" required class="form-control" id="meta_title">
                             <div class="text-danger">{{ $errors->first('meta_title') }}</div>
                         </div>

                         <div class="form-group">
                             <label for="meta_description" class="form-label">Мета Опис</label><span class="text-danger">
                                 *</span>
                             <textarea name="meta_description" required class="form-control" id="meta_description"></textarea>
                             <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                         </div>

                         <div class="form-group">
                             <label for="meta_keywords" class="form-label">Ключові слова</label><span
                                 class="text-danger">
                                 *</span>
                             <input type="text" name="meta_keywords" required class="form-control"
                                 id="meta_keywords">
                             <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                         </div>
                         <div class="form-group">
                             <label for="status" class="form-label">Опубліковано</label><span class="text-danger">
                                 *</span>
                             <select class="form-control" name="is_publish">
                                 <option {{ old('publish') == 1 ? 'selected' : '' }} value="1">Так</option>
                                 <option {{ old('publish') == 0 ? 'selected' : '' }} value="0">Ні</option>
                             </select>
                         </div>


                         <div class="form-group">
                             <label for="status" class="form-label">Статус</label><span class="text-danger"> *</span>
                             <select class="form-control" name="status" id="status">
                                 <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Активний</option>
                                 <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Неактивний</option>
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
