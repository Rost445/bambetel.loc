   @extends('layouts.app')
   @section('style')
   @endsection

   @section('content')
       <main class="main">
           <div class="divider"></div>
           <!-- Gallery Section -->
           <section id="gallery" class="gallery section">
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
               <div class="container section-title" data-aos="fade-up">
                   <span class="description-title">Gallery</span>
                   <h2>Gallery</h2>
                   <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
               </div><!-- End Section Title -->

               <div class="container" data-aos="fade-up" data-aos-delay="100">

                   <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                       <ul class="restaurant-gallery-filters isotope-filters mb-4 justify-content-center d-flex gap-2"
                           data-aos="fade-up" data-aos-delay="100">
                           <li data-filter="*" class="filter-active">All</li>
                           <li data-filter=".filter-food">Food</li>
                           <li data-filter=".filter-drinks">Drinks</li>
                           <li data-filter=".filter-interior">Interior</li>
                           <li data-filter=".filter-staff">Staff</li>
                       </ul>

                       <div class="row g-3 isotope-container" data-aos="fade-up" data-aos-delay="200">
                           <div class="col-lg-4 col-md-6 isotope-item filter-food">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/main-3.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/main-3.webp" alt="Grilled Salmon"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Grilled Salmon</span>
                                       <span>Fresh salmon with lemon butter sauce.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-interior">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/showcase-2.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/showcase-2.webp" alt="Dining Hall"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Dining Hall</span>
                                       <span>Spacious, warm and welcoming ambiance.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-staff">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/chef-5.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/chef-5.webp" alt="Chef Maria"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Chef Maria</span>
                                       <span>Our creative chef behind every dish.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-drinks">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/drink-2.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/drink-2.webp" alt="Signature Mocktail"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Signature Mocktail</span>
                                       <span>Vibrant blend of fresh citrus and herbs.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-food">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/dessert-4.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/dessert-4.webp" alt="Raspberry Tart"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Raspberry Tart</span>
                                       <span>Sweet pastry filled with creamy vanilla custard.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-interior">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/showcase-5.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/showcase-5.webp" alt="Bar Area"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Bar Area</span>
                                       <span>Cozy spot for cocktails and good conversation.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-staff">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/chef-2.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/chef-2.webp" alt="Sous Chef Daniel"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Sous Chef Daniel</span>
                                       <span>Expert in modern fusion cuisine.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-drinks">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/drink-8.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/drink-8.webp" alt="Classic Espresso"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Classic Espresso</span>
                                       <span>Rich and aromatic, served to perfection.</span>
                                   </figcaption>
                               </figure>
                           </div>
                           <div class="col-lg-4 col-md-6 isotope-item filter-food">
                               <figure class="gallery-card">
                                   <a href="assets/img/restaurant/main-7.webp" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="assets/img/restaurant/main-7.webp" alt="Beef Fillet"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">Beef Fillet</span>
                                       <span>Tender beef with herb roasted vegetables.</span>
                                   </figcaption>
                               </figure>
                           </div>
                       </div><!-- End Gallery Items Container -->

                   </div>

               </div>

           </section><!-- /Gallery Section -->
       </main>
   @endsection
   @section('script')
   @endsection
