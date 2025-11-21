@extends('layouts.app')
@section('style')
@endsection

@section('content')
<main class="main">
    <div class="divider"></div>
    <section id="starter-section" class="starter-section section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 rounded-3">
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis" href="{{ url('') }}">
                            <i class="bi bi-house-door-fill"></i>
                            <span class="visually-hidden">Головна</span>
                        </a>
                    </li>
                {{--     <li class="breadcrumb-item">
                        <a class="link-body-emphasis fw-semibold text-decoration-none"
                            href="{{ url('/assort') }}">Меню</a>
                    </li> --}}
                    <li class="breadcrumb-item active" aria-current="page">{{ $header_title }}</li>
                </ol>
            </nav>
        </div>
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">

            <span class="description-title">{{ $getRecord->title }}</span>
            <h2>{{ $getRecord->title }}</h2>

        </div><!-- End Section Title -->
        </div>
        <div class="container py-5">
            <div class="row">

                <!-- LEFT CONTENT -->
                <div class="col-lg-8">

                    <article class="mb-4">
                        <div class="mb-5">
                            @if (!empty($getRecord->getImage()))
                                <img src="{{ $getRecord->getImage() }}" alt=""
                                    class="img-fluid p-2 border small shadow"
                                    style="height: 532px; width: 1024px; object-fit: cover; object-position: center; border-radius:7px ;">
                            @endif
                        </div>


                        <h1 class="fw-bold mb-3">{{ $getRecord->title }}</h1>

                        <div class="d-flex gap-3 text-muted mb-3">
                           <span><i class="bi bi-tag"></i> Категорія: <a href="{{ url($getRecord->menu_slug) }}"> {{ $getRecord->menu_name }}</a></span>
                            <span><i class="bi bi-clock"></i>
                                {{ $getRecord->created_at->locale('uk')->translatedFormat('d F Y') }}</span>
                        </div>

                        <p class="lead">
                            {!! $getRecord->description !!}
                        </p>

                        <h4 class="mt-4 assort-price">Ціна: <strong>{{ intval($getRecord->price) }} грн</strong></h4>
                        <h5 class="mb-4">
                            <div class="assort-w">
                                Вага: {{ intval($getRecord->weight) }} г
                            </div>
                        </h5>

                        <hr>
                        @if (!empty($getRecord->getTag->count()))
                            <div class="mt-4">
                                <h5>Хештеги:</h5>
                                <div class="d-flex flex-wrap gap-2 mt-2 mb-4">
                                    <ul class="awards list-unstyled ">
                                        @foreach ($getRecord->getTag as $tag)
                                            <li class="award-badge"><a href="{{ 'assort?q=' . $tag->name }}"><i
                                                        class="bi bi-tags"></i> {{ $tag->name }}</a></li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        @endif
                        <!-- YOU MAY ALSO LIKE -->
                        <div class="mt-5">
                            <h3 class="fw-bold mb-4">Вам може сподобатись</h3>

                            <div class="row g-4">
                                @if (!empty($getRelatedPost->count()))
                                    <!-- ITEM -->
                                    <div class="col-md-4">
                                        @foreach ($getRelatedPost as $related)
                                            <div class="card card-bg shadow-sm h-100">
                                                @if (!empty($related->getImage()))
                                                    <img src="{{ $related->getImage() }}" class="card-img-top"
                                                        style="height: 180px; object-fit: cover;">
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title fw-semibold">{{ $related->title }}</h5>
                                                    <p class="fw-bold mb-1">195 грн</p>
                                                    <a href="#" class="btn btn-related  w-100">Переглянути</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif



                            </div>
                        </div>

                    </article>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="col-lg-4">
 <div class="card card-bg shadow-sm mb-4">
                        <p class="mb-0">Маєте питання? Ми на зв'язку.</p>
                        <h3>+380 (97) 882 05 90</h3>
                    </div>
                    <!-- FORM -->
                    <div class="booking-card aos-init aos-animate shadow-sm mb-4" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Залишити повідомлення</h5>

                            <form class="php-email-form">
                                <div class="mb-3">
                                    <label class="form-label">Ім’я</label>
                                    <input type="text" class="form-control" placeholder="Ваше ім’я">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Телефон</label>
                                    <input type="text" class="form-control" placeholder="+380 (__) ___-__-__">
                                </div>

                                <button class="btn btn-assort w-100">Надіслати</button>
                            </form>
                        </div>
                    </div>
                    <!--Пошук-->
                    <div class=" card card-bg mb-4 shadow-sm search-widget">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Пошук</h5>
                            <form action="{{ url('assort') }}" method="get">
                                <input type="text" name="q" required class="form-control">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!--Пошук-->
                    <!-- CATEGORIES -->
                    <div class=" card card-bg mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Розділи меню</h5>
                            <ul class="list-unstyled">
                                @foreach ($getMenu as $menu)
                                    <li class="align-items-center">
                                        <a class="text-decoration" href="{{ $menu->slug }}">{{ $menu->name }}</a>
                                        <span>({{ $menu->totalAssort() }})</span>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <!-- LAST ADDED -->
                    <div class="card card-bg mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Останні додані</h5>
                            @foreach ($getRecentPost as $recent)
                                <div class="d-flex mb-3">
                                    @if (!empty($recent->getImage()))
                                        <img src="{{ $recent->getImage() }}" class="me-3 rounded" width="70"
                                            height="70" style="object-fit: cover;" alt="{{ $recent->title }}">
                                    @endif
                                    <div>
                                        <a href="{{ $recent->slug }}"
                                            class="text-decoration-none fw-semibold">{{ $recent->title }}</a>
                                        <div class="text-muted ">{{ $recent->price }} грн</div>
                                        <span
                                            class="small">{{ $recent->created_at->locale('uk')->translatedFormat('d F Y') }}</span>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>

                    <!-- WORKING HOURS -->
                    <div class="card card-bg shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Години роботи:</h5>
                            <ul class="list-unstyled text-muted">
                                <li class="d-flex  align-items-start">
                                    <a href="#"><b>Понеділок–Субота:</b></a>
                                    <span> &nbsp;09:00–18:00</span>
                                </li>
                                <li class="d-flex  align-items-center">
                                    <a href="#"><b>Неділя:</b></a>
                                    <span> &nbsp;Зачинено</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                   

                </div>

            </div>
        </div>
    </section>

</main>
@endsection

@section('script')
@endsection
