@extends('layouts.app')
@section('style')
    <style>
        .divider {
            min-height: 70px;
            padding: 10px 0;
        }
        .navmenu a, .mobile-nav-toggle {
            color:#352a26;
        }
      
    </style>
@endsection

@section('content')
    <main class="main">
        <div class="divider"></div>
        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">&nbsp;About</span>
                <h2>About</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="about-content">
                            <h2>Experience Our Unique Approach</h2>
                            <p class="fst-italic">Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                Vestibulum id ligula porta felis euismod semper.</p>
                            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam.
                                Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus
                                porttitor.</p>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="feature-item" data-aos="fade-up" data-aos-delay="150">
                                        <i class="bi bi-award"></i>
                                        <h4>Exceptional Service</h4>
                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                                        <i class="bi bi-trophy"></i>
                                        <h4>Industry Recognition</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="signature mt-4" data-aos="fade-up" data-aos-delay="250">
                                <p class="chef-name">Jane Smith, Head of Operations</p>
                                <img src="assets/img/misc/signature-1.webp" alt="Chef Signature" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-gallery">
                            <div class="row g-3">
                                <div class="col-6">
                                    <img src="assets/img/restaurant/showcase-3.webp" class="img-fluid rounded"
                                        alt="Restaurant Image">
                                </div>
                                <div class="col-6">
                                    <img src="assets/img/restaurant/showcase-8.webp" class="img-fluid rounded"
                                        alt="Restaurant Image">
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="years-badge">
                                        <span class="number">18</span>
                                        <span class="text">Years of Dedication</span>
                                    </div>
                                    <img src="assets/img/restaurant/showcase-6.webp" class="img-fluid rounded"
                                        alt="Restaurant Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->
    </main>
@endsection
@section('script')
@endsection
