<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('../../assets/images/favicon.png')  }}">
    <title>Bambetel-Панель адміна</title>
    <!-- Custom CSS -->
    <link href="{{url('../../dist/css/style.min.css')  }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    @yield('style')
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        @include('backend.layouts._header')
        @include('backend.layouts._sidebar')
        <div class="page-wrapper">
            @yield('content')
            @include('backend.layouts._footer')
        </div>
    </div>

    <script src="{{ url('../../assets/libs/jquery/dist/jquery.min.js' )}}"></script>
    <script src="{{ url('../../assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('../../assets/libs/bootstrap/dist/js/bootstrap.min.js' )}}"></script>
    <script src="{{ url('../../dist/js/app.min.js') }}"></script>
    <script src="{{ url('../../dist/js/app.init.js' )}}"></script>
    <script src="{{ url('../../dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ url('../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ url('../../assets/extra-libs/sparkline/sparkline.js' )}}"></script>
    <script src="{{ url('../../dist/js/waves.js' )}}"></script>
    <script src="{{ url('../../dist/js/sidebarmenu.js' )}}"></script>
    <script src="{{ url('../../dist/js/custom.min.js' )}}"></script>
    @yield('script')

</body>

</html>
