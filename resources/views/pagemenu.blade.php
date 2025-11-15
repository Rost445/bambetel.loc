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

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <div class="menu-filters isotope-filters mb-5" data-aos="fade-up" data-aos-delay="200">
                        <ul>
                            <li data-filter="*" class="filter-active">All Dishes</li>
                            <li data-filter=".filter-starters">Appetizers</li>
                            <li data-filter=".filter-main">Entrees</li>
                            <li data-filter=".filter-dessert">Sweet Treats</li>
                            <li data-filter=".filter-drinks">Beverages</li>
                        </ul>
                    </div>

                    <div class="menu-grid isotope-container row gy-5" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-xl-4 col-lg-6 isotope-item filter-starters">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/starter-1.webp') }}" alt="Appetizer"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-vegetarian">V</span>
                                    </div>
                                    <div class="price-overlay">$12.50</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Prosciutto-Wrapped Asparagus</h4>
                                    <p>Vivamus tempor magna et tempus elementum. Sed consequat libero vel mauris cursus.
                                    </p>
                                    <div class="spice-level">
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot active"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 isotope-item filter-starters">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/starter-3.webp') }}" alt="Appetizer"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-seafood">SF</span>
                                    </div>
                                    <div class="price-overlay">$14.95</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Seared Scallops with Cauliflower</h4>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.
                                    </p>
                                    <div class="spice-level">
                                        <span class="spice-dot active"></span>
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 isotope-item filter-main">
                            <div class="menu-card featured">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/main-2.webp') }}" alt="Main Course"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-chef">Chef's Choice</span>
                                    </div>
                                    <div class="price-overlay">$28.00</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Herb-Crusted Rack of Lamb</h4>
                                    <p>Mauris auctor nulla et felis tempor, eu consectetur ante vulputate non.</p>
                                    <div class="spice-level">
                                        <span class="spice-dot active"></span>
                                        <span class="spice-dot active"></span>
                                        <span class="spice-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 isotope-item filter-main">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/main-6.webp') }}" alt="Main Course"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-vegetarian">V</span>
                                        <span class="badge-gluten-free">GF</span>
                                    </div>
                                    <div class="price-overlay">$22.75</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Quinoa Stuffed Bell Peppers</h4>
                                    <p>Donec vel nunc non erat vehicula cursus. Integer pharetra mauris vel lorem.</p>
                                    <div class="spice-level">
                                        <span class="spice-dot active"></span>
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 isotope-item filter-dessert">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/dessert-4.webp') }}" alt="Dessert"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-signature">Signature</span>
                                    </div>
                                    <div class="price-overlay">$11.25</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Salted Caramel Cheesecake</h4>
                                    <p>Cras fermentum odio eu feugiat luctus. Aliquam erat volutpat sed bibendum.</p>
                                    <div class="spice-level">
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 isotope-item filter-dessert">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/dessert-9.webp') }}" alt="Dessert"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-vegan">VG</span>
                                    </div>
                                    <div class="price-overlay">$9.50</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Dark Chocolate Avocado Mousse</h4>
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</p>
                                    <div class="spice-level">
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 isotope-item filter-drinks">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/drink-2.webp') }}" alt="Beverage"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-alcoholic">21+</span>
                                    </div>
                                    <div class="price-overlay">$15.00</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Elderflower Gin Fizz</h4>
                                    <p>Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non.</p>
                                    <div class="spice-level">
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 isotope-item filter-drinks">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ url('front/assets/img/restaurant/drink-6.webp') }}" alt="Beverage"
                                        class="img-fluid">
                                    <div class="dietary-badges">
                                        <span class="badge-fresh">Fresh</span>
                                    </div>
                                    <div class="price-overlay">$8.75</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4>Tropical Green Smoothie</h4>
                                    <p>Ut pharetra sit amet aliquam id diam maecenas ultricies mi eget mauris.</p>
                                    <div class="spice-level">
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                        <span class="spice-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="menu-actions" data-aos="fade-up" data-aos-delay="400">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="seasonal-notice">
                                <i class="bi bi-info-circle"></i>
                                <span>Our seasonal menu changes quarterly. Some items may vary based on ingredient
                                    availability.</span>
                            </div>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="#" class="menu-download-btn">
                                <i class="bi bi-download"></i>
                                <span>Full Menu PDF</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="chef-recommendations" data-aos="fade-up" data-aos-delay="500">
                    <div class="section-header">
                        <h3><i class="bi bi-star-fill"></i> Today's Chef Recommendations</h3>
                        <p>Carefully curated dishes featuring the finest seasonal ingredients</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="recommendation-card">
                                <div class="recommendation-image">
                                    <img src="{{ url('front/assets/img/restaurant/main-9.webp') }}" alt="Chef Recommendation"
                                        class="img-fluid">
                                    <div class="chef-badge">
                                        <i class="bi bi-award"></i>
                                        <span>Chef's Pick</span>
                                    </div>
                                </div>
                                <div class="recommendation-content">
                                    <div class="recommendation-header">
                                        <h4>Pan-Seared Duck Breast</h4>
                                        <div class="recommendation-price">$34.50</div>
                                    </div>
                                    <p>Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit
                                        amet fermentum.</p>
                                    <div class="recommendation-details">
                                        <div class="serving-info">
                                            <i class="bi bi-clock"></i>
                                            <span>25 min preparation</span>
                                        </div>
                                        <div class="dietary-info">
                                            <span class="mini-badge gluten-free">GF</span>
                                            <span class="mini-badge dairy-free">DF</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="recommendation-card">
                                <div class="recommendation-image">
                                    <img src="{{ url('front/assets/img/restaurant/main-8.webp')}}" alt="Chef Recommendation"
                                        class="img-fluid">
                                    <div class="chef-badge">
                                        <i class="bi bi-award"></i>
                                        <span>Chef's Pick</span>
                                    </div>
                                </div>
                                <div class="recommendation-content">
                                    <div class="recommendation-header">
                                        <h4>Lobster Thermidor Risotto</h4>
                                        <div class="recommendation-price">$39.95</div>
                                    </div>
                                    <p>Fusce dapibus tellus ac cursus commodo tortor mauris condimentum nibh ut
                                        fermentum massa.</p>
                                    <div class="recommendation-details">
                                        <div class="serving-info">
                                            <i class="bi bi-clock"></i>
                                            <span>30 min preparation</span>
                                        </div>
                                        <div class="dietary-info">
                                            <span class="mini-badge seafood">SF</span>
                                            <span class="mini-badge premium">Premium</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Menu Section -->
    </main>
@endsection
@section('script')
@endsection
