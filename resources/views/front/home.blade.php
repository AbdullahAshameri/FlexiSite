<x-front-layout>

    <!-- Start Hero Area -->
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row align-items-center">
                <!-- النص -->
                <div class="col-lg-6">
                    <div class="hero-content text-lg-start text-center">
                        <h1>{{ __('Welcome to') }} <span>NHC</span></h1>
                        <p>{{ __('At National Hearing Center, we provide advanced audiology solutions with precision and care, helping you experience the world of sound like never before.') }}
                        </p>
                        <div class="hero-actions d-flex justify-content-lg-start justify-content-center flex-wrap">
                            <a href="{{ route('contact.page') }}" class="btn-primary">{{ __('Contact us') }}</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="btn-video d-flex align-items-center">
                                <i class="bi bi-play-fill"></i>
                                <span>{{ __('Watch Demo') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- الصورة -->
                <div class="col-lg-6">
                    <div class="hero-image text-center">
                        <img src="{{ asset('assets/images/hero/ConsultationintheMedicalOffice.png') }}"
                            class="img-fluid floating" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- Start Featured Categories Area -->
    {{-- <section class="featured-categories section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('NHC Services') }}</h2>
                        <p>{{ __('We offer comprehensive hearing services to ensure accurate diagnosis and effective solutions for better hearing.') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">TV & Audios</h3>
                        <ul>
                            <li><a href="product-grids.html">Smart Television</a></li>
                            <li><a href="product-grids.html">QLED TV</a></li>
                            <li><a href="product-grids.html">Audios</a></li>
                            <li><a href="product-grids.html">Headphones</a></li>
                            <li><a href="product-grids.html">View All</a></li>
                        </ul>
                        <div class="images">
                            <img src="" alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">Desktop & Laptop</h3>
                        <ul>
                            <li><a href="product-grids.html">Smart Television</a></li>
                            <li><a href="product-grids.html">QLED TV</a></li>
                            <li><a href="product-grids.html">Audios</a></li>
                            <li><a href="product-grids.html">Headphones</a></li>
                            <li><a href="product-grids.html">View All</a></li>
                        </ul>
                        <div class="images">
                            <img src="https://via.placeholder.com/180x180" alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">Cctv Camera</h3>
                        <ul>
                            <li><a href="product-grids.html">Smart Television</a></li>
                            <li><a href="product-grids.html">QLED TV</a></li>
                            <li><a href="product-grids.html">Audios</a></li>
                            <li><a href="product-grids.html">Headphones</a></li>
                            <li><a href="product-grids.html">View All</a></li>
                        </ul>
                        <div class="images">
                            <img src="https://deeganhearingclinic.com/wp-content/uploads/2025/03/infant-child-hearing-assessment.webp" alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">Dslr Camera</h3>
                        <ul>
                            <li><a href="product-grids.html">Smart Television</a></li>
                            <li><a href="product-grids.html">QLED TV</a></li>
                            <li><a href="product-grids.html">Audios</a></li>
                            <li><a href="product-grids.html">Headphones</a></li>
                            <li><a href="product-grids.html">View All</a></li>
                        </ul>
                        <div class="images">
                            <img src="https://via.placeholder.com/180x180" alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">Smart Phones</h3>
                        <ul>
                            <li><a href="product-grids.html">Smart Television</a></li>
                            <li><a href="product-grids.html">QLED TV</a></li>
                            <li><a href="product-grids.html">Audios</a></li>
                            <li><a href="product-grids.html">Headphones</a></li>
                            <li><a href="product-grids.html">View All</a></li>
                        </ul>
                        <div class="images">
                            <img src="https://via.placeholder.com/180x180" alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">Game Console</h3>
                        <ul>
                            <li><a href="product-grids.html">Smart Television</a></li>
                            <li><a href="product-grids.html">QLED TV</a></li>
                            <li><a href="product-grids.html">Audios</a></li>
                            <li><a href="product-grids.html">Headphones</a></li>
                            <li><a href="product-grids.html">View All</a></li>
                        </ul>
                        <div class="images">
                            <img src="https://via.placeholder.com/180x180" alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Start Brands Area -->
    <div class="brands section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <h2 class="title">{{ __('The Exclusive Agent of Widex in the Republic of Yemen') }}</h2>
                </div>
            </div>
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brands Area -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title text-center">
            <h2>{{ __('Services') }}</h2>
            <p>{{ __('We provide professional hearing solutions to ensure accurate diagnosis and effective treatment') }}
            </p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 justify-content-center">

                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-ear"></i>
                        </div>
                        <h3>{{ __('Pure Tone Audiometry') }}</h3>
                        <p>{{ __('Standard hearing assessment to determine hearing thresholds and identify potential loss.') }}
                        </p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-thermometer-half"></i>
                        </div>
                        <h3>{{ __('Tympanometry') }}</h3>
                        <p>{{ __('Evaluation of middle ear pressure and eardrum mobility for accurate diagnosis.') }}
                        </p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-person"></i> <!-- استبدل bi-child ب bi-person -->
                        </div>
                        <h3>{{ __('ABR for Children') }}</h3>
                        <p>{{ __('Assessment of hearing in infants and young children through auditory brainstem response testing.') }}
                        </p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>


                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-play-btn"></i>
                        </div>
                        <h3>{{ __('Play Audiometry') }}</h3>
                        <p>{{ __('Interactive hearing tests for children using engaging games and visual cues.') }}</p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <h3>{{ __('ASSR Hearing Test') }}</h3>
                        <p>{{ __('Advanced computer-based hearing evaluation for precise detection of hearing thresholds.') }}
                        </p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3>{{ __('Hearing Aid Workshop') }}</h3>
                        <p>{{ __('Fully equipped workshop for repair and maintenance of hearing aids with specialized tools.') }}
                        </p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-earbuds"></i>
                        </div>
                        <h3>Custom Ear Molds</h3>
                        <p>Precision-made ear molds crafted from patient impressions using high-quality materials for
                            optimal fit.</p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-battery-half"></i>
                        </div>
                        <h3>Hearing Aid Batteries</h3>
                        <p>Sale of all types of batteries for hearing aids to ensure uninterrupted hearing support.</p>
                        {{-- <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Features Area -->

    <!-- Start Product Area -->
    <section id="products" class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('Products') }}</h2>
                        <p>{{ __('Explore the latest hearing aids from Widex and other leading brands — advanced technology tailored to your needs.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- call the product form from views/component --}}
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-12">

                        <x-product-card :product="$product" />

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Product Area -->

    <!-- Start Banner Area -->
    {{-- <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image:url('https://via.placeholder.com/620x340')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('https://via.placeholder.com/620x340')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Banner Area -->

    {{-- Services --}}

    <!-- Start Home Product List -->
    {{-- <section class="home-product-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">Best Sellers</h4>
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9CWc9cQl402zui9pApkn9exwAwX8XjBialw&s"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">GoPro Hero4 Silver</a>
                            </h3>
                            <span>$287.99</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Puro Sound Labs BT2200</a>
                            </h3>
                            <span>$95.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">HP OfficeJet Pro 8710</a>
                            </h3>
                            <span>$120.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                </div>
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">New Arrivals</h4>
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">iPhone X 256 GB Space Gray</a>
                            </h3>
                            <span>$1150.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Canon EOS M50 Mirrorless Camera</a>
                            </h3>
                            <span>$950.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Microsoft Xbox One S</a>
                            </h3>
                            <span>$298.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h4 class="list-title">Top Rated</h4>
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Samsung Gear 360 VR Camera</a>
                            </h3>
                            <span>$68.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Samsung Galaxy S9+ 64 GB</a>
                            </h3>
                            <span>$840.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img src="https://via.placeholder.com/100x100"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Zeus Bluetooth Headphones</a>
                            </h3>
                            <span>$28.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Home Product List -->

    <!-- Start Blog Section Area -->
    {{-- <section class="blog-section fsection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('Information That Matters') }}</h2>
                        <p>{{ __('Everything you need to know about hearing loss, tests, and tips to improve your hearing wellness') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="https://www.horendgoed.nl/wp-content/uploads/2024/08/horend-goed-widex-smartric-1170x578.jpg" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">eCommerce</a>
                            <h4>
                                <a href="blog-single-sidebar.html">What information is needed for shipping?</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="https://www.ideafit.com/wp-content/uploads/2020/02/Ear-Diagram.jpg" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Gaming</a>
                            <h4>
                                <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="https://audientes.com/cdn/shop/articles/audiologist_1400x.jpg?v=1635426168" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Electronic</a>
                            <h4>
                                <a href="blog-single-sidebar.html">Electronics, instrumentation & control engineering
                                </a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section blog-section">
        {{-- <section class="blog-section fsection"> --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ __('Information That Matters') }}</h2>
                        <p>{{ __('Everything you need to know about hearing loss, tests, and tips to improve your hearing wellness') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 col-12">
                        <x-blog-article-card :article="$article" />
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('blogs.all') }}" class="service-link" style="color: #12948B">
                    Go to Blogs
                    <i class="bi bi-arrow-right"></i>
                </a>
                {{-- <button type="button" class="btn btn-outline-primary">Go to Blogs
                    <i class="bi bi-arrow-right"></i>
                </button> --}}

            </div>
        </div>
    </section>

    <!-- End Blog Section Area -->
    {{-- <!-- Start Brands Area -->
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <h2 class="title">{{ __('The Exclusive Agent of Widex in the Republic of Yemen') }}</h2>
                </div>
            </div>
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="https://www.ashhearing.co.uk/wp-content/uploads/2019/01/21.01-Widex-Digital-Black-RGB.png"
                            alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brands Area --> --}}
    <!-- Start Shipping Info -->
    {{-- <section class="shipping-info">
        <div class="container">
            <ul>
                <!-- Free Shipping -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Live Chat Or Call.</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section> --}}
    <!-- End Shipping Info -->
    @push('scripts')
        <script type="text/javascript">
            //======== Brand Slider
            tns({
                container: '.brands-logo-carousel',
                autoplay: true,
                autoplayTimeout: 2000, // الزمن بين الشرائح (أصغر = أسرع), القيمة الافتراضية 3000
                speed: 500, // سرعة الانتقال بالمللي ثانية, القيمة الافتراضية 300
                autoplayButtonOutput: false,
                mouseDrag: true,
                gutter: 15,
                nav: false,
                controls: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    540: {
                        items: 3
                    },
                    768: {
                        items: 5
                    },
                    992: {
                        items: 6
                    }
                }
            });
        </script>
    @endpush







</x-front-layout>
