<!DOCTYPE html>
<html lang="en">

<head>
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ !empty($meta_title) ? $meta_title : '' }}</title>

    @if (!empty($meta_keywords))
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endif
    @if (!empty($meta_description))
        <meta name="description" content="{{ $meta_description }}">
    @endif
    @php
        $getSettingApp = App\Models\SettingModel::getSingle();
    @endphp
    @php
        $getHeroDesc = App\Models\HeroSettingModel::getSingle();
    @endphp

    <!-- Favicons -->
    <link href="{{ $getSettingApp->getFavicon() }}" rel="icon">
    <link href="{{ $getSettingApp->getFavicon() }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ url('front/assets/css/main.css') }}" rel="stylesheet">
    @if (!Request::is('/'))
        <link href="{{ url('front/assets/css/custom.css') }}" rel="stylesheet">
    @endif
    @yield('style')
</head>

<body class="index-page @yield('page_class')">
>
    @include('layouts._header')

    @yield('content')

    @include('layouts._footer')
</body>



<!-- Scroll Top -->

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="{{ 'front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
<script src="{{ 'front/assets/vendor/php-email-form/validate.js' }}"></script>
<script src="{{ 'front/assets/vendor/aos/aos.js' }}"></script>
<script src="{{ 'front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js' }}"></script>
<script src="{{ 'front/assets/vendor/isotope-layout/isotope.pkgd.min.js' }}"></script>
<script src="{{ 'front/assets/vendor/swiper/swiper-bundle.min.js' }}"></script>
<script src="{{ 'front/assets/vendor/glightbox/js/glightbox.min.js' }}"></script>
<script src="{{ 'front/assets/js/main.js' }}"></script>

@stack('scripts')
</body>

</html>
