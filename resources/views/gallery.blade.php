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

                           <li class="breadcrumb-item active" aria-current="page">
                               @if (!empty($title))
                                   {{ $title }}
                               @else
                                   Фотогалерея
                               @endif
                           </li>
                       </ol>
                   </nav>
               </div>
               <!-- Section Title -->
               <div class="container section-title" data-aos="fade-up">
                   <span class="description-title">
                       @if (!empty($title))
                           {{ $title }}
                       @else
                           Фотогалерея
                       @endif
                   </span>
                   <h2>
                       @if (!empty($title))
                           {{ $title }}
                       @else
                           Фотогалерея
                       @endif
                   </h2>

               </div><!-- End Section Title -->

               <div class="container" data-aos="fade-up" data-aos-delay="100">

                   <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                     

                       <div class="row g-3 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($getPortfolio as $portfolio)
                           <div class="col-lg-4 col-md-6 isotope-item filter-">
                               <figure class="gallery-card">
                                   <a href="{{ $portfolio->getImage() }}" class="glightbox"
                                       data-gallery="restaurant-gallery">
                                       <img src="{{ $portfolio->getImage() }}" alt="{!! $portfolio->title !!}"
                                           class="img-fluid rounded" loading="lazy">
                                   </a>
                                   <figcaption class="caption">
                                       <span class="caption-title">{!! $portfolio->title !!}</span>
                                       <span>{!! $portfolio->description !!}</span>
                                       
                                   </figcaption>
                                   
                               </figure>
                           </div>
                           
                            @endforeach
                        
                         
                          
                         
                       </div><!-- End Gallery Items Container -->

                   </div>

               </div>

           </section><!-- /Gallery Section -->
       </main>
   @endsection
   @section('script')
   <script>
    document.addEventListener("DOMContentLoaded", function () {
        var grid = document.querySelector('.isotope-container');
        var iso = new Isotope(grid, {
            itemSelector: '.isotope-item',
            layoutMode: 'masonry'
        });

        // Фільтрація при натисканні на фільтр
        var filters = document.querySelectorAll('.portfolio-filters li');
        filters.forEach(function (filter) {
            filter.addEventListener('click', function () {
                var filterValue = this.getAttribute('data-filter');
                iso.arrange({ filter: filterValue });

                // Активний клас для вибраного фільтра
                filters.forEach(f => f.classList.remove('filter-active'));
                this.classList.add('filter-active');
            });
        });
    });
</script>
   @endsection
