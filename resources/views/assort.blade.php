@extends('layouts.app')

@section('style')
@endsection

@section('content')
<main class="main">
    <div class="divider"></div>

    <!-- Menu Section -->
    <section id="menu" class="menu section">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 rounded-3">
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis" href="{{ url('/') }}">
                            <i class="bi bi-house-door-fill"></i>
                            <span class="visually-hidden">Головна</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        {{ $title ?? 'Меню' }}
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span class="description-title">{{ $title ?? 'Меню' }}</span>
            <h2>{{ $title ?? 'Меню' }}</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <!-- Filters -->
                @if(!isset($getMenu)) 
<div class="menu-filters isotope-filters mb-5" data-aos="fade-up" data-aos-delay="200">
    <ul>
        <li data-filter="*" class="filter-active">Всі блюда</li>
        @foreach ($getMenuList as $menu)
            <li data-filter=".filter-{{ $menu->slug }}">{{ $menu->name }}</li>
        @endforeach
    </ul>
</div>
@endif

                <!-- Menu Items -->
                <div class="menu-grid isotope-container row gy-5" data-aos="fade-up" data-aos-delay="300">
                    @foreach ($getRecord as $value)
                        <div class="col-xl-4 col-lg-6 isotope-item filter-{{ $value->menu_slug }}">
                            <div class="menu-card">
                                <div class="menu-card-image">
                                    <img src="{{ $value->getImage() }}" alt="{{ $value->title }}" class="img-fluid">
                                    <div class="dietary-badges">
                                        <a href="{{ url($value->menu_slug) }}">
                                            <span class="badge-gluten-free">{{ $value->menu_name }}</span>
                                        </a>
                                    </div>
                                    <div class="price-overlay">{{ $value->price }} ₴</div>
                                </div>
                                <div class="menu-card-content">
                                    <h4><a href="{{ url($value->slug) }}">{{ $value->title }}</a></h4>
                                    <p>
                                        <a href="{{ url($value->slug) }}" class="btn btn-related">Переглянути</a>
                                    </p>
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

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
        </div>
    </section>
</main>
@endsection

@section('script')
<script>
document.addEventListener("DOMContentLoaded", function() {
    var grid = document.querySelector('.isotope-container');
    var iso = new Isotope(grid, {
        itemSelector: '.isotope-item',
        layoutMode: 'masonry'
    });

    // Фільтрація при натисканні на фільтр
    var filters = document.querySelectorAll('.menu-filters li');
    filters.forEach(function(filter) {
        filter.addEventListener('click', function() {
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
