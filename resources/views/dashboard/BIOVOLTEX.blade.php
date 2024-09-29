@extends('layouts.dashoard')

@section('content')
    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>BIOVOLTEX Details</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper init-swiper">

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

                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/portfolio/app-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/portfolio/product-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/portfolio/branding-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/portfolio/books-1.jpg') }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                        <h3>BIOVOLTEX</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Project URL</strong>: <a
                                    href="https://github.com/BioVoltex/BioVoltex-Backend">BIOVOLTEX</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                        <h2>A device that converts organic waste into clean energy using biovoltaic technology. I led a team to design the backend system for controlling the device, enabling:</h2>
                        <p>
                            User authentication OTP, password reset, and login/logout.<br>
                            Real-time monitoring of energy production and system status.<br>
                            Contribution to reaching the final stage of several tech competitions.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Portfolio Details Section -->
@endsection
