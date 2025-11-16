@extends('layouts.app')
@section('style')
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
                <h2>Starter Section</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container aos-init aos-animate" data-aos="fade-up">
                <p>Use this page as a starter for your own custom pages.</p>
            </div>

        </section>

    </main>
@endsection
@section('script')
@endsection
