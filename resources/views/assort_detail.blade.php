@extends('layouts.app')
@section('style')
    <style>
.modal {
    z-index: 9999 !important;
    position: fixed !important;
}

.modal-backdrop {
    z-index: 9000 !important;
}
        .comment-form {
            padding-top: 10px;
        }

        .comment-form form {
            background-color: var(--surface-color);
            margin-top: 30px;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .comment-form form h4 {
            font-weight: bold;
            font-size: 22px;
        }

        .comment-form form p {
            font-size: 14px;
        }

        .comment-form form input {
            background-color: var(--surface-color);
            color: var(--default-color);
            border: 1px solid #F8EFEB;
            font-size: 14px;
            border-radius: 4px;
            padding: 10px 10px;
        }

        .comment-form form input:focus {
            color: var(--default-color);
            background-color: var(--surface-color);
            box-shadow: none;
            border-color: var(--accent-color);
        }

        .comment-form form input::placeholder {
            color: #D7D4D4 !important;
        }

        .comment-form form textarea,
        .reply-form form textarea {
            background-color: var(--surface-color);
            color: var(--default-color);
            border: 1px solid #F8EFEB;
            border-radius: 4px;
            padding: 10px 10px;
            font-size: 14px;
            height: 120px;
        }

        .comment-form form textarea:focus,
        .reply-form form textarea:focus {
            color: var(--default-color);
            box-shadow: none;
            border-color: var(--accent-color);
            background-color: var(--surface-color);
        }

        .comment-form form textarea::placeholder,
        .reply-form form textarea::placeholder {
            color: color-mix(in srgb, var(--default-color), transparent 50%);
        }

        .comment-form form .form-group {
            margin-bottom: 25px;
        }

        .comment-form form .btn,
        .reply-form form .btn {
            background-color: var(--accent-color);
            border: none;
            padding: 10px 30px;
            color: #fff;
            transition: background-color 0.3s ease;
        }
          .send-btn {
            background: #be663a;
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }

        .send-btn:hover {
            background: #be663a;
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }

        .send-btn:active {
           background: #be663a;
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }
        #captcha{
            width: 60%;
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
                            <a class="link-body-emphasis" href="{{ url('') }}">
                                <i class="bi bi-house-door-fill"></i>
                                <span class="visually-hidden">Головна</span>
                            </a>
                        </li>
                       
                        <li class="breadcrumb-item active" aria-current="page">{{ $header_title }}</li>
                    </ol>
                </nav>
            </div>
            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">

                <span class="description-title">{{ $getRecord->title }}</span>
                <h2>{{ $getRecord->title }}</h2>

            </div><!-- End Section Title -->
            
            <div class="container py-5">
                <div class="row">
 @include('layouts._message')
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
                                <span><i class="bi bi-tag"></i> Категорія: <a href="{{ url($getRecord->menu_slug) }}">
                                        {{ $getRecord->menu_name }}</a></span>
                                <span><i class="bi bi-clock"></i>
                                    {{ $getRecord->created_at->locale('uk')->translatedFormat('d F Y') }}</span>
                                <span><i class="bi bi-chat-text"></i> Коментарі:
                                    {{ $getRecord->getCommentCount() }}</span>
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
                            <!--blog comments -->
                            <section id="blog-comments" class="blog-comments section">
                                <div class="container">
                                    <h4 class="comments-count">Коментарів: {{ $getRecord->getCommentCount() }}</h4>

                                    @foreach ($getRecord->getComment as $comment)
                                        <div id="comment-{{ $comment->id }}" class="comment">
                                            <div class="d-flex px-4">
                                                <div>
                                                    <!-- Коментар -->
                                                    <h5>
                                                        <a href="#">{{ $comment->user->name ?? 'Анонім' }}</a>
                                                        <a href="#" class="reply ReplyOpen"
                                                            data-id="{{ $comment->id }}">
                                                            <i class="bi bi-reply-fill"></i> Відповісти
                                                        </a>
                                                    </h5>
                                                    <time>{{ $comment->created_at->locale('uk')->translatedFormat('d F Y H:i:s') }}</time>
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            </div>

                                            <!-- Відповіді до коментаря -->
                                            @if ($comment->getReply->count())
                                                @foreach ($comment->getReply as $reply)
                                                    <div id="comment-reply-{{ $reply->id }}"
                                                        class="comment comment-reply ms-4 mt-2 mb-3 p-2 border-start">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h6><a href="#">{{ $reply->user->name }}</a></h6>
                                                                <time>{{ $reply->created_at->locale('uk')->translatedFormat('d F Y H:i') }}</time>
                                                                <p>{{ $reply->comment }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                            <!-- Reply Form (hidden by default) -->
                                            <div class="reply-form ShowReply{{ $comment->id }} d-none mx-5 mb-4">
                                                <form action="{{ url('assort-comment-reply-submit') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="assort_id" value="{{ $getRecord->id }}">
                                                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                                    <div class="mb-3">
                                                        <textarea name="reply" class="form-control" placeholder="Ваша відповідь *" required></textarea>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit" class="btn  btn-sm">Відправити
                                                            відповідь</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    @endforeach

                                    <!-- Comment Form Section -->
                                    <section id="comment-form" class="comment-form section mt-5">
                                        <div class="container">
                                            <form action="{{ url('assort-comment-submit') }}" method="post">
                                                @csrf
                                                <h4>Опублікувати коментар</h4>
                                                <input type="hidden" name="assort_id" value="{{ $getRecord->id }}">
                                                <div class="row">
                                                    <div class="col form-group">
                                                        <textarea name="comment" class="form-control" placeholder="Ваш коментар *" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Опублікувати
                                                        коментар</button>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                    <!-- /Comment Form Section -->

                                </div>
                            </section>

                            <!--.blog comments -->
                        </article>
                    </div>

                    <!-- RIGHT SIDEBAR -->
                    <div class="col-lg-4">
                        <div class="card card-bg shadow-sm mb-4">
                            <p class="mb-0">Маєте питання? Ми на зв'язку.</p>
                            <h3>{{ $getSettingApp->phone }}</h3>
                        </div>
                        <!-- FORM -->
                        <div class="booking-card aos-init aos-animate shadow-sm mb-4" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Забронювати столик</h5>

                                <x-universal-form />
                               
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
                                            <a class="text-decoration"
                                                href="{{ $menu->slug }}">{{ $menu->name }}</a>
                                            <span>({{ $menu->totalAssort() }})</span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <!-- LAST ADDED -->
                        <div class="card card-bg mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Останні додані:</h5>
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
                                    <li class="d-flex align-items-center">
                                        <a href="#"><b>{{ $workDays }}:</b></a>&nbsp;&nbsp;
                                        <span> {{ $workTime }}</span>
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.body.addEventListener('click', function(e) {

                let btn = e.target.closest('.ReplyOpen');
                if (!btn) return;

                e.preventDefault();

                let id = btn.dataset.id;
                let form = document.querySelector('.ShowReply' + id);

                if (!form) return;

                // Закрити всі інші форми
                document.querySelectorAll('.reply-form').forEach(f => f.classList.add('d-none'));

                // Відкрити потрібну форму
                form.classList.remove('d-none');

                // Прокрутка
                form.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            });

        });
    </script>
@endpush
assort-comment-reply-submit
