@extends('layouts.app')
@section('style')
  
@endsection

@section('content')
    <main class="main">
        <div class="divider"></div>
        <!-- Menu Section -->
        <section id="menu" class="menu section">
<div class="container">
    <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 rounded-3">
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis" href="{{  url('/')  }}">
                           <i class="bi bi-house-door-fill"></i>
                            <span class="visually-hidden">Головна</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
           @if (!empty($title))
                        {{ $title }}
                    @else
                       Меню
                    @endif


                    </li>
                   
                </ol>
            </nav>
</div>
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">@if (!empty($title))
                        {{ $title }}
                    @else
                       Меню
                    @endif</span>
                <h2> @if (!empty($title))
                        {{ $title }}
                    @else
                         Меню
                    @endif</h2>
             
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="menu-grid isotope-container row gy-5" data-aos="fade-up" data-aos-delay="300">
                        @foreach ($getRecord as $value)
                            <div class="col-xl-4 col-lg-6 isotope-item filter-starters">

                                <div class="menu-card">
                                    <div class="menu-card-image">
                                        
                                        <img src="{{ $value->getImage() }}" alt="Appetizer" class="img-fluid">
                                       <div class="dietary-badges">
                                            <a href="{{ url($value->menu_slug) }}"><span class="badge-gluten-free">{{ $value->menu_name }}</span></a>
                                        </div>
                                        <div class="price-overlay">{{ $value->price }} ₴</div>
                                    </div>
                                    <div class="menu-card-content">
                                        <h4><a href="{{ url($value->slug) }}">{{ $value->title }}</a></h4>
                                        <p><a href="{{ url($value->slug) }}" class="btn btn-related f">Переглянути </a></p>
                                        <div class="spice-level">
                                            <span class="spice-dot"></span>
                                            <span class="spice-dot"></span>
                                            <span class="spice-dot active"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
<div class="d-flex justify-content-center mt-3">
                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>
        </section><!-- /Menu Section -->
    </main>
@endsection
@section('script')
@endsection
