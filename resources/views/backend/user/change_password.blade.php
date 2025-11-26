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
                                 <a href="{{url('panel/dashboard')}}"> {{ auth()->user()->is_admin ? 'Адмін-панель' : 'Панель користувача' }}</a>
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
                             <label class="form-label">Старий пароль</label><span class="text-danger"> *</span>
                              <div class="input-group">
                                  <input type="password" name="old_password" required class="form-control" id="old_password">
                                  <button type="button" class="btn btn-outline-secondary toggle-password" data-target="old_password">
                                      <i class="mdi mdi-eye-off"></i>
                                  </button>
                              </div>
                         </div>
                         <div class="form-group">

                              <label class="form-label">Новий пароль</label><span class="text-danger"> *</span>
                              <div class="input-group">
                                  <input type="password" required name="new_password" class="form-control" id="new_password">
                                  <button type="button" class="btn btn-outline-secondary toggle-password" data-target="new_password">
                                      <i class="mdi mdi-eye-off"></i>
                                  </button>
                              </div>
                         </div>
                         <div class="form-group">
                             <label class="form-label">Підтвердити пароль</label><span class="text-danger"> *</span>
                              <div class="input-group">
                                  <input type="password" required name="confirm_password" class="form-control" id="confirm_password">
                                  <button type="button" class="btn btn-outline-secondary toggle-password" data-target="confirm_password">
                                      <i class="mdi mdi-eye-off"></i>
                                  </button>
                              </div>
                         </div>
                       
                       
                      
                         <button type="submit" class="btn btn-primary">Змінити</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 <script>
 document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', function () {
        let target = document.getElementById(this.getAttribute('data-target'));
        let icon = this.querySelector('i');

        if (target.type === "password") {
            // показуємо пароль
            target.type = "text";
            icon.classList.remove('mdi-eye-off');
            icon.classList.add('mdi-eye');
        } else {
            // приховуємо пароль
            target.type = "password";
            icon.classList.remove('mdi-eye');
            icon.classList.add('mdi-eye-off');
        }
    });
});


</script>
 @endsection
