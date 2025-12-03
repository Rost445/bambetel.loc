 @extends('layouts.app')
@section('style')
<style>
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
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
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
                  <div class="reservation-info-section">
                    <div class="hero-image">
                      <img src="assets/img/restaurant/showcase-2.webp" alt="Restaurant dining area" class="img-fluid">
                      <div class="overlay-content">
                        <h4>Experience Fine Dining</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      </div>
                    </div>

                    <div class="info-cards">
                      <div class="row g-3">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                          <div class="info-card">
                            <div class="card-icon">
                              <i class="bi bi-clock"></i>
                            </div>
                            <div class="card-content">
                              <h5>Business Hours</h5>
                              <p>Tuesday - Thursday: 5:00 PM - 10:00 PM<br>
                                Friday - Saturday: 5:00 PM - 11:00 PM<br>
                                Sunday: 4:00 PM - 9:00 PM<br>
                                <em>Closed Mondays</em>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                          <div class="info-card">
                            <div class="card-icon">
                              <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="card-content">
                              <h5>Find Us</h5>
                              <p>4567 Elm Avenue, Floor 2<br>
                                Chicago, IL 60614</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
                          <div class="info-card">
                            <div class="card-icon">
                              <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="card-content">
                              <h5>Reservations</h5>
                              <p>+1 (312) 555-9876<br>
                                <small>Available daily 2:00 PM - 9:00 PM</small>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="550">
                          <div class="info-card">
                            <div class="card-icon">
                              <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="card-content">
                              <h5>Email Us</h5>
                              <p>reservations@example.com<br>
                                <small>Response within 24 hours</small>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="additional-info" data-aos="fade-up" data-aos-delay="600">
                      <div class="info-highlight">
                        <i class="bi bi-star-fill"></i>
                        <span>Recommended to book 2-3 days in advance for weekend dining</span>
                      </div>
                    </div>
                  </div>
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

