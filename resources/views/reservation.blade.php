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
        <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="reservation-container">
              <div class="row g-0">

                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                  <div class="reservation-form-section">
                    <div class="form-header text-center">
                      <h3>Make a Reservation</h3>
                      <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
                    </div>

                    <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
                      <div class="row gy-3">
                        <div class="col-12">
                          <input type="text" name="name" class="form-control" placeholder="Full Name" required="">
                        </div>
                        <div class="col-12">
                          <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                        </div>
                        <div class="col-12">
                          <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required="">
                        </div>
                        <div class="col-6">
                          <input type="date" name="date" class="form-control" required="">
                        </div>
                        <div class="col-6">
                          <input type="time" class="form-control" name="time" required="">
                        </div>
                        <div class="col-6">
                          <select name="people" class="form-select" required="">
                            <option value="">Guests</option>
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                            <option value="5">5 Guests</option>
                            <option value="6">6+ Guests</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <select name="occasion" class="form-select">
                            <option value="">Occasion</option>
                            <option value="birthday">Birthday</option>
                            <option value="anniversary">Anniversary</option>
                            <option value="business">Business Dinner</option>
                            <option value="date">Date Night</option>
                            <option value="celebration">Celebration</option>
                            <option value="other">Other</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <textarea class="form-control" name="message" rows="3" placeholder="Special requests or dietary requirements"></textarea>
                        </div>
                      </div>

                      <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your reservation request has been submitted successfully. We'll contact you shortly to confirm.</div>
                      </div>

                      <button type="submit" class="btn-reserve w-100">
                        <i class="bi bi-calendar-check me-2"></i>
                        Reserve Table
                      </button>
                    </form>
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

