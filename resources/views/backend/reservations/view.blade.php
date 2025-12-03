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
                                 <a href="{{ url('panel/dashboard') }}">Адмін-панель</a>
                             </li>
                             <li class="breadcrumb-item">
                                 <a href="{{ url('panel/reservations/list') }}">Бронювання</a>
                             </li>

                             <li class="breadcrumb-item active" aria-current="page">{{ $header_title . ' #' . $item->id }}
                             </li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>

     <div class="container-fluid">
         <!-- ============================================================== -->
         <!-- Start Page Content -->
         <!-- ============================================================== -->
         <div class="row">
             <!-- Column -->
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <div class="card-title m-0">
                             <div class="btn-group float-right" role="group" aria-label="Basic example">
                                 <a href="{{ route('panel.reservations.list') }}"
                                     class=" btn waves-effect waves-light btn-rounded btn-primary"> 
                                     <i class="mdi mdi-arrow-left mr-2" aria-hidden="true"></i>Назад</a>
                                 <a href="{{ route('panel.reservations.delete', $item->id) }}"
                                     class=" btn waves-effect waves-light btn-rounded btn-danger"
                                     onclick="return confirm('Ви впевнені, що хочете видалити бронювання?')"><i
                                    class="mdi mdi-delete mr-2"></i>Видалити</a>
                             </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12">
                             <h3 class="box-title m-t-40">{{ $header_title }} #{{ $item->id }}</h3>
                             <div class="table-responsive">
                                 <table class="table">
                                     <tbody>
                                         <tr>
                                             <td width="390">Ім'я:</td>
                                             <td> {{ $item->name }}</td>
                                         </tr>
                                         <tr>
                                             <td>Телефон:</td>
                                             <td> {{ $item->phone }} </td>
                                         </tr>
                                         <tr>
                                             <td>Email:</td>
                                             <td>{{ $item->email }}</td>
                                         </tr>
                                         <tr>
                                             <td>Сторінка заявки:</td>
                                             <td> <a target="_blank"
                                                     href="{{ $item->page ?? '-' }}">{{ $item->page ?? '-' }}</a></td>
                                         </tr>
                                         <tr>
                                             <td>Створено:</td>
                                             <td> {{ $item->created_at }}</td>
                                         </tr>
                                         <tr>
                                             <td>Оновлено:</td>
                                             <td>{{ $item->updated_at }}</td>
                                         </tr>
                                         <tr>
                                             @if ($item->deleted_at)
                                                 <td>Видалено:</td>
                                                 <td> {{ $item->deleted_at }}</td>
                                             @endif
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 @endsection
