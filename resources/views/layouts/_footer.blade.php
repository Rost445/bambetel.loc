<footer id="footer" class="footer dark-background">

    <div class="container">
        <div class="row gy-5">

            <div class="col-lg-4">
                <div class="footer-content">

                    <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-4">
                        <div class="newsletter-form">
                            <img src="{{ $getSettingApp->getLogo() }}" alt="" class="footer-logo">
                        </div>
                    </a>
                    <p class="mb-4">

{{ $getHeroDesc->paragraph }}
                    </p>

  <div class="social-links d-none d-md-flex align-items-center mx-5">
                        @auth
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/panel/dashboard') }}"
                                title="Адмін-панель">
                                <i class="bi bi-person"></i>&nbsp;

                            </a>

                            <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}" title="Вийти">
                                <i class="bi bi-box-arrow-right"></i>&nbsp;

                            </a>
                        @else
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('login') }}" title="Логін">
                                <i class="bi bi-box-arrow-in-left"></i>&nbsp;

                            </a>

                            <a class="dropdown-item d-flex align-items-center" href="{{ url('register') }}"
                                title="Реєстрація">
                                <i class="bi bi-person-plus"></i>&nbsp;

                            </a>
                        @endauth

                        {{-- <a href="{{ route('login') }}" class="facebook"><i class="bi bi-box-arrow-in-left"></i>&nbsp;Логін</a>
                <a href="{{ route('register') }}" class="facebook"><i class="bi bi-person-plus"></i>&nbsp;Реєстрація</a> --}}
<a href="{{ $getSettingApp->instagram_link ?? 'https://www.instagram.com/cafe_bambetel_/' }}" class="instagram" title="instagram"><i class="bi bi-instagram"></i></a>
                      

                    </div>
                </div>
            </div>
            @php
                $getMenuHeader = App\Models\MenuModel::getMenuMenu();
            @endphp

            <div class="col-lg-2 col-6">
                <div class="footer-links">
                    <h4>Сторінки</h4>
                    <ul>
                       <li><a href="{{ url('') }}"><i class="bi bi-chevron-right"></i> Головна</a></li>
                        <li><a href="{{ url('assort') }}"><i class="bi bi-chevron-right"></i> Меню</a></li>
                        <li><a href="{{ url('gallery') }}"><i class="bi bi-chevron-right"></i>Фото</a></li>
                        <li><a href="{{ url('contacts') }}"><i class="bi bi-chevron-right"></i>Контакти</a></li>
                        <li><a href="{{ url('reservation') }}"><i class="bi bi-chevron-right"></i>Бронювання</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-6">
                <div class="footer-links">
                    <h4>Меню</h4>
                    <ul>
                        @foreach ($getMenuHeader as $MenuHeader)
                            <li>
                                <a href="{{ url($MenuHeader->slug) }}"
                                    class="{{ Request::segment(1) == $MenuHeader->slug ? 'active' : '' }}">
                                    <i class="bi bi-chevron-right"></i> {{ $MenuHeader->title }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-contact">
                    <h4>Зв'яжіться з нами</h4>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-info">
                            <p>{{ $getSettingApp->address ?? 'вул. Леся Курбаса, 2
Городенка 78100' }}</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-info">
                            <p>{{ $getSettingApp->phone ?? '+380 (97) 882 05 90' }}</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <p>{{ $getSettingApp->email ?? 'reservation@bambetel.ua' }}</p>
                        </div>
                    </div>

                  
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copyright">
                       <p>{{ date('Y') }} | &copy; <span>Авторське право</span> <strong class="px-1 sitename"><a
                    href="{{ url('') }}">{{ env('APP_NAME') }}</a></strong> <span>Усі права захищено.</span></p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-bottom-links">
                        <a href="{{ url('privacy') }}">Політика конфенденційності</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>
