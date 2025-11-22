@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
      <div class="container position-relative">
        <h1>404</h1>
       
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ url('')}}>головнаli>
            <li class="current">404</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Error 404 Section -->
    <section id="error-404" class="error-404 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">

            <div class="error-number" data-aos="zoom-in" data-aos-delay="200">
              404
            </div>

            <h1 class="error-title" data-aos="fade-up" data-aos-delay="300">
             Сторінка не знайдена
            </h1>

            <p class="error-description" data-aos="fade-up" data-aos-delay="400">
            Можливо, сторінку, яку ви шукаєте, видалили, її назву змінили або вона тимчасово недоступна. 
            </p>

            <div class="error-actions" data-aos="fade-up" data-aos-delay="500">
              <a href="{{ url('')}}" class="btn-primary">
                <i class="bi bi-house"></i>
               На головну
              </a>
            </div>

          </div>
        </div>

      

      </div>

    </section><!-- /Error 404 Section -->

  </main>

@endsection
