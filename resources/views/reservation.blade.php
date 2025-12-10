 @extends('layouts.app')
@section('style')
<style>
.modal {
    z-index: 9999 !important;
    position: fixed !important;
}

.modal-backdrop {
    z-index: 9000 !important;
}
        .send-btn {
            background: linear-gradient(45deg, var(--accent-color),
                    color-mix(in srgb, var(--accent-color), blue 15%));
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }

        .send-btn:hover {
            background: linear-gradient(45deg, var(--accent-color),
                    color-mix(in srgb, var(--accent-color), blue 15%));
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }

        .send-btn:active {
            background: linear-gradient(45deg, var(--accent-color),
                    color-mix(in srgb, var(--accent-color), blue 15%));
            color: var(--contrast-color);
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }
        #captcha{
            width: 60%;
        }
</style>
@endsection

@section('content')
    <main class="main">
        <div class="divider"></div>
        <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">
<div class="container">
    <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 rounded-3">
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis" href="#">
                           <i class="bi bi-house-door-fill"></i>
                            <span class="visually-hidden">Головна</span>
                        </a>
                    </li>
                   
                    <li class="breadcrumb-item active" aria-current="page">{{  $title }}</li>
                </ol>
            </nav>
</div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
 @include('layouts._message')
        <div class="row">
          <div class="col-12">
            <div class="reservation-container">
              <div class="row g-0">

                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                  <div class="reservation-form-section">
                    <div class="form-header text-center">
                      <h3>Забронювати столик</h3>
                      
                    </div>
                    <x-universal-form />
                   
                  </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                 {!! $description  !!}
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Book A Table Section -->
     </main>
@endsection
@section('script')
@endsection

