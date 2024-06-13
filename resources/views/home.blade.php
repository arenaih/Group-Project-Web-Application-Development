@extends('master.layout')
@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
            @auth
            <h2><span>Welcome to DineConnect,</span> {{ Auth::user()->name }}</h2>
            @endauth
            <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 18 years!</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              {{-- <a href="#menu" class="cta-btn">Our Menu</a> --}}
              <a href="/book-table" class="cta-btn">Book a Table</a>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
            <a href="https://youtube.com/shorts/jmNoX9qjFxo" class="glightbox play-btn"></a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>WHY US</h2>
        <p>Why Choose DineConnect?</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <span>01</span>
              <h4><a href="" class="stretched-link">Comprehensive Dining Experience</a></h4>
              <p>Dine Connect offers a comprehensive platform where users can effortlessly find, book, and explore a wide range of restaurants. From discovering hidden gems to enjoying exclusive promotions, we simplify your dining experience.
                </p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <span>02</span>
              <h4><a href="" class="stretched-link">Community-Driven Reviews</a></h4>
              <p>We foster a community where authenticity thrives. With genuine reviews and ratings from fellow diners, you can make informed decisions and share your own dining experiences, creating a trusted environment for food enthusiasts.
            </p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <span>03</span>
              <h4><a href="" class="stretched-link">Interactive and Engaging Features</a></h4>
              <p>Experience dining like never before with personalized recommendations. Whether you're planning a special occasion or simply exploring new cuisines, Dine Connect enhances your journey with interactive tools designed for food lovers</p>
            </div>
          </div><!-- Card Item -->

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Events Section -->
<section id="events" class="events section">
    <img class="slider-bg" src="assets/img/events-bg.jpg" alt="" data-aos="fade-in">

    <div class="container">
      <div class="swiper" data-aos="fade-up" data-aos-delay="100">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">

          <!-- Dynamic Slider Items -->
          @foreach ($restaurants as $restaurant)
          <div class="swiper-slide">
            <div class="row gy-4 event-item">
              <div class="col-lg-6">
                <img src="{{ asset('storage/' . $restaurant->image_url) }}" class="img-fluid" alt="{{ $restaurant->name }}">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>{{ $restaurant->name }}</h3>
                <div class="price">
                  <p><span>RM{{ $restaurant->price }}</span></p>
                </div>
                <p class="fst-italic">
                  Welcome to {{ $restaurant->name }}, located in {{ $restaurant->address }}.
                  Our restaurant offers delicious dishes made with the best ingredients, served in a cozy and friendly atmosphere.
                  Whether you're here for a casual meal with friends or a special celebration, our team is dedicated to making your dining experience memorable.
                  Join us for great food and good times at {{ $restaurant->name }}.
                </p>
                <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>Name: {{ $restaurant->name }}</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Address: {{ $restaurant->address }}</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Phone Number: {{ $restaurant->phone }}</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Cuisine Type: {{ $restaurant->cuisine_type }}</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Price: RM{{ $restaurant->price }}</span></li>
                </ul>
                <p>
                  {{ $restaurant->name }} offers a warm atmosphere, fresh local ingredients,
                  and a menu with options for all dietary preferences,
                  ensuring an enjoyable dining experience for everyone.
                </p>
              </div>
            </div>
          </div><!-- End Dynamic Slider item -->
          @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team Members</h2>
        <p>DineConnect Developers</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                <span>"Our prime purpose in this life is to help others. And if you can't help them, at least don't hurt them".</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img" alt="">
                <h3>Ahmad Iman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"There are three constants in life...change, choice and principles."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img" alt="">
                <h3>Azam</h3>
                <h4>CMO</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"In three words I can sum up everything I've learned about life: it goes on." </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.png" class="testimonial-img" alt="">
                <h3>Anas</h3>
                <h4>CISO</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Pr4y for Gaza".</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.png" class="testimonial-img" alt="">
                <h3>Azri</h3>
                <h4>CIO</h4>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">



            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+012 345 6789</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>dineconnect@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  @endsection
