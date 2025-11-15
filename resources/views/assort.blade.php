@extends('layouts.app')
@section('style')
    <style>
        .divider {
            min-height: 70px;
            padding: 10px 0;
        }

        .navmenu a,
        .mobile-nav-toggle {
            color: #352a26;
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <div class="divider"></div>
        <!-- Menu Section -->
        <section id="menu" class="menu section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">Menu</span>
                <h2>Menu</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">



                    <div class="menu-grid isotope-container row gy-5" data-aos="fade-up" data-aos-delay="300">
                        @foreach ($getRecord as $value)
                            <div class="col-xl-4 col-lg-6 isotope-item filter-starters">

                                <div class="menu-card">
                                    <div class="menu-card-image">
                                        <img src="{{ $value->getImage() }}" alt="Appetizer"
                                            class="img-fluid">
                                       {{--  <div class="dietary-badges">
                                            <span class="badge-vegetarian">V</span>
                                        </div> --}}
                                        <div class="price-overlay">{{$value->price}} ₴</div>
                                    </div>
                                    <div class="menu-card-content">
                                        <h4><a href="{{ url($value->slug) }}">{{$value->title}}</a></h4>
                                       
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

        </section><!-- /Menu Section -->
    </main>
@endsection
@section('script')
@endsection
