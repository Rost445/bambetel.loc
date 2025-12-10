@extends('layouts.app')
@section('style')
   
@endsection

@section('content')
    <main class="main">
        <div class="divider"></div>
        <!-- About Section -->
        <section id="about" class="about section">
<div class="container">
    <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 rounded-3">
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis" href="#">
                           <i class="bi bi-house-door-fill"></i>
                            <span class="visually-hidden">Головна</span>
                        </a>
                    </li>
                   
                    <li class="breadcrumb-item active" aria-current="page">@if (!empty($title))
            {{ $title }}
            @else
         Політика конфіденційності
        @endif</li>
                </ol>
            </nav>
</div>
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">&nbsp;@if (!empty($title))
            {{ $title }}
            @else
           Політика конфіденційності
        @endif</span>
                <h2>@if (!empty($title))
            {{ $title }}
            @else
          Політика конфіденційності
        @endif</h2>
                
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5 align-items-center">
                     {!! $description !!} 
                </div>

            </div>

        </section><!-- /About Section -->
    </main>
@endsection
@section('script')
@endsection
