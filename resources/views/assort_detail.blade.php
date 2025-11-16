@extends('layouts.app')
@section('style')
    <style>
        .booking-card {
            background: color-mix(in srgb, var(--surface-color), transparent 70%);
            border: 1px solid color-mix(in srgb, var(--contrast-color), transparent 90%);
            padding: 40px;
            border-radius: 15px;

        }

        .booking-card .btn-primary {
            background-color: var(--accent-color);
            border: 2px solid var(--accent-color);
            color: var(--contrast-color);
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .hero .booking-card .btn-primary:hover {
            background-color: color-mix(in srgb, var(--accent-color), black 15%);
            border-color: color-mix(in srgb, var(--accent-color), black 15%);
            transform: translateY(-2px);
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <div class="divider"></div>
        <section id="starter-section" class="starter-section section">
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
                            <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">

                <span class="description-title">Starter Section</span>
                <h2>{{ $getRecord->title }}</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container aos-init aos-animate" data-aos="fade-up">
                <section class="section blog-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 mb-5">
                                        <div class="single-blog-item">
                                            @if (!empty($getRecord->getImage()))
                                                <img src="{{ $getRecord->getImage() }}" alt="" class="img-fluid"
                                                    style="height: 532px; width: 1024px; object-fit: cover; object-position: center;">
                                            @endif
                                            <div class="blog-item-content mt-5">
                                                <div class="blog-item-meta mb-3">
                                                    <span class="text-color-2 text-capitalize mr-3"><i
                                                            class="icofont-book-mark mr-2"></i> {{ $getRecord->menu_name }}
                                                        | </span>
                                                    <span class="text-muted text-capitalize mr-3"><i
                                                            class="icofont-comment mr-2"></i>5 Comments</span>
                                                    <span class="text-black text-capitalize mr-3"><i
                                                            class="icofont-calendar mr-2"></i> | 28th January 2019</span>
                                                </div>

                                                <h2 class="mb-4 text-md"><a
                                                        href="blog-single.html">{{ $getRecord->title }}</a></h2>

                                                {!! $getRecord->description !!}

                                                <div class="mt-5 clearfix">
                                                    <ul class="float-left list-inline tag-option">
                                                        <li class="list-inline-item"><a href="#">Advancher</a></li>
                                                        <li class="list-inline-item"><a href="#">Landscape</a></li>
                                                        <li class="list-inline-item"><a href="#">Travel</a></li>
                                                    </ul>

                                                    <ul class="float-right list-inline">
                                                        <li class="list-inline-item"> Share: </li>
                                                        <li class="list-inline-item"><a href="#" target="_blank"><i
                                                                    class="icofont-facebook" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#" target="_blank"><i
                                                                    class="icofont-twitter" aria-hidden="true"></i></a></li>
                                                        <li class="list-inline-item"><a href="#" target="_blank"><i
                                                                    class="icofont-pinterest" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#" target="_blank"><i
                                                                    class="icofont-linkedin" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="comment-area mt-4 mb-5">
                                            <h4 class="mb-4">2 Comments on Healthy environment... </h4>
                                            <ul class="comment-tree list-unstyled">
                                                <li class="mb-5">
                                                    <div class="comment-area-box">
                                                        <div class="comment-thumb float-left">
                                                            <img alt="" src="" class="img-fluid">
                                                        </div>

                                                        <div class="comment-info">
                                                            <h5 class="mb-1">John</h5>
                                                            <span>United Kingdom</span>
                                                            <span class="date-comm">| Posted April 7, 2019</span>
                                                        </div>
                                                        <div class="comment-meta mt-2">
                                                            <a href="#"><i
                                                                    class="icofont-reply mr-2 text-muted"></i>Reply</a>
                                                        </div>

                                                        <div class="comment-content mt-3">
                                                            <p>Some consultants are employed indirectly by the client via a
                                                                consultancy staffing company, a company that provides
                                                                consultants on an agency basis. </p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="comment-area-box">
                                                        <div class="comment-thumb float-left">
                                                            <img alt="" src="images/blog/testimonial2.jpg"
                                                                class="img-fluid">
                                                        </div>

                                                        <div class="comment-info">
                                                            <h5 class="mb-1">Philip W</h5>
                                                            <span>United Kingdom</span>
                                                            <span class="date-comm">| Posted June 7, 2019</span>
                                                        </div>

                                                        <div class="comment-meta mt-2">
                                                            <a href="#"><i
                                                                    class="icofont-reply mr-2 text-muted"></i>Reply </a>
                                                        </div>

                                                        <div class="comment-content mt-3">
                                                            <p>Some consultants are employed indirectly by the client via a
                                                                consultancy staffing company, a company that provides
                                                                consultants on an agency basis. </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <form class="comment-form my-5" id="comment-form">
                                            <h4 class="mb-4">Ваш коментар</h4>

                                            <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5"
                                                placeholder="Коментар"></textarea>

                                            <input class="btn btn-primary btn-round-full" type="submit"
                                                name="submit-contact" id="submit_contact" value="Опублікувати">
                                        </form>
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-4">
                                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                                    <div class="sidebar-widget mb-5 Make-a-Reservation">

                                        <div class="booking-card aos-init aos-animate" data-aos="fade-left"
                                            data-aos-delay="200">
                                            <h3>Замовити страву</h3>
                                            <form action="" method="post" class="php-email-form">
                                                <div class="row gy-3">
                                                    <div class="col-md-12">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Ваше ім'я" required="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="tel" name="phone" class="form-control"
                                                            placeholder="Ваш телефон" required="">
                                                    </div>

                                                    <div class="col-12">
                                                        <textarea name="message" class="form-control" rows="3" placeholder="ваше повідомлення"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="loading">Loading</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Your reservation request has been sent.
                                                            We'll contact
                                                            you shortly!</div>
                                                        <button type="submit"
                                                            class="btn btn-primary w-100">Надіслати</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>



                                    <div class="sidebar-widget search  mb-5">
                                        <h5 class="mb-2">Пошук</h5>
                                        <form action="#" class="search-form">
                                            <input type="text" class="form-control" placeholder="пошук">
                                            <i class="ti-search"></i>
                                        </form>
                                    </div>


                                    <div class="sidebar-widget latest-post mb-2">
                                        <h5>Популярні страви</h5>

                                        <div class="py-2">
                                            <span class="text-sm text-muted">03 Mar 2018</span>
                                            <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
                                        </div>

                                    </div>

                                    <div class="sidebar-widget category mb-5">
                                        <h5 class="mb-2">Розділи меню</h5>
                                        <ul class="list-unstyled">
                                            <li class="align-items-center">
                                                <a href="#">Medicine</a>
                                                <span>(14)</span>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="sidebar-widget tags mb-5">
                                        <h5 class="mb-2">Теги</h5>

                                        <a href="#">Doctors</a>

                                    </div>

                                    <div class="sidebar-widget schedule-widget mb-5">
                                        <h5 class="mb-2">Години роботи:</h5>

                                        <ul class="list-unstyled">
                                            <li class="d-flex  align-items-start">
                                                <a href="#">Пн–Сб:</a>
                                                <span> &nbsp;09:00–18:00</span>
                                            </li>
                                            <li class="d-flex  align-items-center">
                                                <a href="#">Неділя:</a>
                                                <span> &nbsp;Зачинено</span>
                                            </li>
                                        </ul>

                                        <div class="sidebar-contatct-info mt-4">
                                            <p class="mb-0">Маєте питання? Ми на зв'язку.</p>
                                            <h3>+380 (97) 882 05 90</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

    </main>
@endsection
@section('script')
@endsection
