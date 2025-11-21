<footer id="footer" class="footer dark-background">

    <div class="container">
        <div class="row gy-5">

            <div class="col-lg-4">
                <div class="footer-content">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-4">
                        <span class="sitename">Bambetel</span>
                    </a>
                    <p class="mb-4">Бамбетель | Вареники | Сніданки | Гофри <br>
                        Справжня домашня кухня з любов’ю та турботою. 
                       
                    </p>

                    <div class="newsletter-form">
                       
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
                        <a href="{{ url('') }}"><i class="bi bi-chevron-right"></i> Головна</a></li>
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
                            <p>вул. Леся Курбаса, 2<br>Городенка 78100</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-info">
                            <p> +380 (97) 882 05 90</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="https://www.instagram.com/cafe_bambetel_/"><i class="bi bi-instagram"></i></a><p class="pt-2">Instagram</p>
                  
                      
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
                        <p>© <span>Copyright</span> <strong class="px-1 sitename">Bambetel</strong> <span>All Rights
                                Reserved</span></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-bottom-links">
                        <a href="#">Політика конфенденційності</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</footer>
