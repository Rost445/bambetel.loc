@extends('layouts.app')
@section('style')
@endsection

@section('content')
    @php
        $getSettingApp = App\Models\SettingModel::getSingle();
    @endphp
    <main class="main">
        <div class="divider"></div>

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3 rounded-3">
                        <li class="breadcrumb-item">
                            <a class="link-body-emphasis" href="#">
                                <i class="bi bi-house-door-fill"></i>
                                <span class="visually-hidden">Головна</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            @if (!empty($title))
                                {{ $title }}
                            @else
                                Контакти
                            @endif
                        </li>

                    </ol>
                </nav>
            </div>
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">
                    @if (!empty($title))
                        {{ $title }}
                    @else
                        Контакти
                    @endif
                </span>
                <h2>
                    @if (!empty($title))
                        {{ $title }}
                    @else
                        Контакти
                    @endif
                </h2>
             
                <div class="my-2">
                     @include('layouts._message')
                </div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Contact Info Boxes -->
               <div class="row gy-4 mb-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Наша адреса</h4>
                                <p>{{ $getSettingApp->address ??
                                    'вул. Леся Курбаса, 2 Городенка' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>Електрона пошта</h4>
                                <p>{{ $getSettingApp->email ?? 'email@example.com' }}</p>

                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div class="info-content">
                                <h4>Телефон:</h4>
                                <p>{{ $getSettingApp->phone ?? ' +380 (97) 882 05 90' }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-info-box">
                            <div class="icon-box">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div class="info-content">
                                <h4>Графік роботи</h4>
                                <p>{{ $getSettingApp->worktime ?? 'Пн–Сб: 09:00–18:00' }}</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Google Maps (Full Width) -->
            <div class="map-section" data-aos="fade-up" data-aos-delay="200">
                @if (!empty($getSettingApp->google_map_link))
                    <iframe src="{{ $getSettingApp->google_map_link }}" width="100%" height="500" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                @endif
            </div>

            <!-- Contact Form Section (Overlapping) -->
            <div class="container form-container-overlap">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-10">
                        <div class="contact-form-wrapper">
                            <h2 class="text-center mb-4">Зв'яжіться з нами</h2>

                            <form action="{{ route('submit.contact') }}" method="post">
                                     @csrf
                                      <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-person"></i>
                                                <input type="text" class="form-control" name="name" placeholder="Ім'я"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-envelope"></i>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Адреса електронної пошти" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                               <i class="bi bi-telephone-fill"></i>
                                                <input type="tel" name="phone" id="phone" class="form-control"
                                                    required placeholder="+380(XX)XXX-XX-XX" maxlength="18"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-text-left"></i>
                                                <input type="text" class="form-control" name="subject" placeholder="Тема"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <i class="bi bi-chat-dots message-icon"></i>
                                                <textarea class="form-control" name="message" placeholder="Написати повідомлення..." style="height: 180px"
                                                    required=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                   
                                    
                                      <div class="row">
                                    <div class="col-md-4">
                                        <label for="verification" class="pb-2 pt-2">{{ $first_number }} +
                                            {{ $second_number }} = ?</label>
                                        <input type="text" name="verification" class="form-control" id="verification"
                                            required placeholder="Сума перевірки">
                                    </div>
                                </div>
            
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-submit"> <i
                                                class="bi bi-send"></i> &nbsp;ВІДПРАВИТИ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Contact Section -->



    </main>
@endsection
@section('script')
@endsection
