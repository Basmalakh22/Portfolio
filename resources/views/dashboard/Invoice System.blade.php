@extends('layouts.dashoard')

@section('content')
    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Invoice System Details</h2>
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
                        <h3>Invoice System</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Project URL</strong>: <a
                                    href="https://github.com/Basmalakh22/Invoice-System">Invoice System</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                        <h2>A Laravel project designed to automate invoice creation and management. The system supports:</h2>
                        <p>
                            Generating PDF invoices and sending them via email.<br>
                            CRUD operations for clients, services, and payments.<br>
                            Secured authentication and authorization for multiple user roles.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Portfolio Details Section -->
@endsection
