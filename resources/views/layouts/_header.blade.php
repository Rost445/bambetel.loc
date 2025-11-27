<header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">

                <i class="bi bi-phone d-flex align-items-center ms-4"><span> +380 (97) 882 05 90</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                @auth
                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/panel/dashboard') }}">
                        <i class="bi bi-person"></i>&nbsp;
                        <span>Адмін-панель</span>
                    </a>

                    <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}">
                        <i class="bi bi-box-arrow-right"></i>&nbsp;
                        <span> Вийти</span>
                    </a>
                @else
                    <a class="dropdown-item d-flex align-items-center" href="{{ url('login') }}">
                        <i class="bi bi-box-arrow-in-left"></i>&nbsp;
                        <span> Увійти</span>
                    </a>

                    <a class="dropdown-item d-flex align-items-center" href="{{ url('register') }}">
                        <i class="bi bi-person-plus"></i>&nbsp;
                        <span> Реєстрація</span>
                    </a>
                @endauth

                {{-- <a href="{{ route('login') }}" class="facebook"><i class="bi bi-box-arrow-in-left"></i>&nbsp;Логін</a>
                <a href="{{ route('register') }}" class="facebook"><i class="bi bi-person-plus"></i>&nbsp;Реєстрація</a> --}}
               
                <a href="https://www.instagram.com/cafe_bambetel_/" class="instagram"><i
                        class="bi bi-instagram"></i></a>

            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ url('') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ url('assets/images/logo-icon.png') }}" alt="">
                {{-- <h1 class="sitename">Platia</h1> --}}
            </a>
            @php
                $getMenuHeader = App\Models\MenuModel::getMenuMenu();
                $menuSlugs = $getMenuHeader->pluck('slug')->toArray();
            @endphp

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="{{ url('/') }}" class="{{ Request::segment(1) == '' ? 'active' : '' }}">
                            Головна
                        </a>
                    </li>

                   <li class="dropdown">
    <a href="{{ url('assort') }}"
       class="{{ in_array(Request::segment(1), $menuSlugs) || Request::segment(1) == 'assort' ? 'active' : '' }}">
        <span>Меню</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
    </a>

    <ul>
        @foreach ($getMenuHeader as $MenuHeader)
            <li>
                <a href="{{ url($MenuHeader->slug) }}"
                   class="{{ Request::segment(1) == $MenuHeader->slug ? 'active' : '' }}">
                    {{ $MenuHeader->title }}
                </a>
            </li>
        @endforeach
    </ul>
</li>


                    <li>
                        <a href="{{ url('about') }}" class="{{ Request::segment(1) == 'about' ? 'active' : '' }}">
                            Про кафе
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('gallery') }}" class="{{ Request::segment(1) == 'gallery' ? 'active' : '' }}">
                            Фото
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('contacts') }}"
                            class="{{ Request::segment(1) == 'contacts' ? 'active' : '' }}">
                            Контакти
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('reservation') }}"
                            class="{{ Request::segment(1) == 'reservation' ? 'active' : '' }}">
                            Бронювання
                        </a>
                    </li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>




        </div>

    </div>

</header>
