<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png') }}">
   
    <!-- Custom CSS -->
   
    <title>Кафе Bambetel - Відновлення паролю</title>
    <!-- Custom CSS -->
    <link href="{{ url('dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img src="assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20 m-t-10">Відновити пароль</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" action="" method ="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="emailInput" class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : (old('email') ? 'is-valid' : '') }}"   name="email" value="{{ old('email') }}" type="text" required=" " placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                      <div class="invalid-feedback">Некоректний email</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="passwordInput" class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : (old('password') ? 'is-valid' : '') }}" type="password" name="password" required=" " placeholder="Пароль">
                                     <div class="text-danger">{{ $errors->first('password') }}</div>
                                      <div class="invalid-feedback">Мінімум 6 символів</div>
                                    </div>
                                </div>
                                  <div class="form-group row">
                                    <div class="col-12 ">
                                        <input id="cpasswordInput" class="form-control form-control-lg {{ $errors->has('cpassword') ? 'is-invalid' : (old('cpassword') ? 'is-valid' : '') }}"
                                         type="cpassword" name="cpassword" required=" " placeholder="Підтвердити Пароль">
                                     <div class="text-danger">{{ $errors->first('cpassword') }}</div>
                                      <div class="invalid-feedback">Мінімум 6 символів</div>
                                    </div>
                                </div>
                             
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit ">Відновити пароль</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        Вже маєте акаунт? <a href="{{ route('login') }} " class="text-info m-l-5 "><b> Увійти </b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ url('assets/libs/jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ url('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
    <script>
    const nameInput = document.getElementById('nameInput');
    const emailInput = document.getElementById('emailInput');
    const passwordInput = document.getElementById('passwordInput');

    // Валідація ім’я (мін. 2 букви)
    nameInput.addEventListener('input', function() {
        let value = this.value.trim();
        if (value.length >= 2) {
            this.classList.add('is-valid');
            this.classList.remove('is-invalid');
        } else {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
        }
    });

    // Валідація Email
    emailInput.addEventListener('input', function() {
        let value = this.value.trim();
        let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (pattern.test(value)) {
            this.classList.add('is-valid');
            this.classList.remove('is-invalid');
        } else {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
        }
    });

    // Валідація Пароля (мін. 6 символів)
    passwordInput.addEventListener('input', function() {
        let value = this.value.trim();
        if (value.length >= 6) {
            this.classList.add('is-valid');
            this.classList.remove('is-invalid');
        } else {
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
        }
    });
</script>


</body>

</html>