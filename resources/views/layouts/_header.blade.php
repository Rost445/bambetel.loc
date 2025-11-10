

    <header id="header" class="header fixed-top">

        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                  
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span> +380 (97) 882 05 90</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                  
                    <a href="{{ route('login') }}" class="facebook"><i class="bi bi-box-arrow-in-left"></i>&nbsp;Логін</a>
                    <a href="{{ route('register') }}" class="facebook"><i class="bi bi-person-plus"></i>&nbsp;Реєстрація</a>
                    <a href="#" class="disabled"> | </a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i>&nbsp;Instagram</a>
                   
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                   <img src="{{ url('assets/images/logo-icon.png') }}" alt=""> 
                    {{-- <h1 class="sitename">Platia</h1> --}}
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Головна</a></li>
                        <li class="dropdown"><a href="#"><span>Меню</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Загальне</a></li>
                                <li><a href="#">Дитяче</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Про кафе</a></li>
                        <li><a href="#">Фото</a></li>
                        <li><a href="#">Контакти</a></li>
                        <li><a href="#">Бронювання</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>