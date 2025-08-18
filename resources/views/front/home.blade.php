<x-front-layout>

    <!-- Start Hero Area -->
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row align-items-center">
                <!-- النص -->
                <div class="col-lg-6">
                    <div class="hero-content text-lg-start text-center">
                        <h1>{{ __('Welcome to') }} <span>FlexiSite</span></h1>
                        <p>{{ __('FlexiSite is a professional, customizable web platform for small businesses to manage their online presence, products, and content effortlessly.') }}
                        </p>
                        <div class="hero-actions d-flex justify-content-lg-start justify-content-center flex-wrap">
                            <a href="#services" class="btn-primary">{{ __('Contact us') }}</a>
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
                        <img src="{{ asset('assets/images/hero/illustration-14.webp') }}" class="img-fluid floating"
                            alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- Start Featured Categories Area -->

    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title text-center">
            <h2>Services</h2>
            <p>We provide professional hearing solutions to ensure accurate diagnosis and effective treatment.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 justify-content-center">

                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-ear"></i>
                        </div>
                        <h3>Pure Tone Audiometry</h3>
                        <p>Standard hearing assessment to determine hearing thresholds and identify potential loss.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-thermometer-half"></i>
                        </div>
                        <h3>Tympanometry</h3>
                        <p>Evaluation of middle ear pressure and eardrum mobility for accurate diagnosis.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-person"></i> <!-- استبدل bi-child ب bi-person -->
                        </div>
                        <h3>ABR for Children</h3>
                        <p>Assessment of hearing in infants and young children through auditory brainstem response
                            testing.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>


                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-play-btn"></i>
                        </div>
                        <h3>Play Audiometry</h3>
                        <p>Interactive hearing tests for children using engaging games and visual cues.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <h3>ASSR Hearing Test</h3>
                        <p>Advanced computer-based hearing evaluation for precise detection of hearing thresholds.</p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3>Hearing Aid Workshop</h3>
                        <p>Fully equipped workshop for repair and maintenance of hearing aids with specialized tools.
                        </p>
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
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
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
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
                        <a href="#" class="service-link">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Features Area -->

    <!-- Start Product Area -->
    <section class="trending-product section">
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
    <!-- End Banner Area -->

    {{-- Services --}}

    <!-- Start Home Product List -->

    <!-- End Home Product List -->

    <!-- Start Blog Section Area -->

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
                <a href="{{ route('blogs.all') }}" class="service-link">
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
    <!-- Start Brands Area -->
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
    <!-- End Brands Area -->
    <!-- Start Shipping Info -->
    <!-- End Shipping Info -->
    @push('scripts')
        <script type="text/javascript">
            //========= Hero Slider 
            tns({
                container: '.hero-slider',
                slideBy: 'page',
                autoplay: true,
                autoplayButtonOutput: false,
                mouseDrag: true,
                gutter: 0,
                items: 1,
                nav: false,
                controls: true,
                controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            });

            //======== Brand Slider
            tns({
                container: '.brands-logo-carousel',
                autoplay: true,
                autoplayButtonOutput: false,
                mouseDrag: true,
                gutter: 15,
                nav: false,
                controls: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    540: {
                        items: 3,
                    },
                    768: {
                        items: 5,
                    },
                    992: {
                        items: 6,
                    }
                }
            });
        </script>
        <script>
            const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

            const timer = () => {
                const now = new Date().getTime();
                let diff = finaleDate - now;
                if (diff < 0) {
                    document.querySelector('.alert').style.display = 'block';
                    document.querySelector('.container').style.display = 'none';
                }

                let days = Math.floor(diff / (1000 * 60 * 60 * 24));
                let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
                let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
                let seconds = Math.floor(diff % (1000 * 60) / 1000);

                days <= 99 ? days = `0${days}` : days;
                days <= 9 ? days = `00${days}` : days;
                hours <= 9 ? hours = `0${hours}` : hours;
                minutes <= 9 ? minutes = `0${minutes}` : minutes;
                seconds <= 9 ? seconds = `0${seconds}` : seconds;

                document.querySelector('#days').textContent = days;
                document.querySelector('#hours').textContent = hours;
                document.querySelector('#minutes').textContent = minutes;
                document.querySelector('#seconds').textContent = seconds;

            }
            timer();
            setInterval(timer, 1000);
        </script>
    @endpush

</x-front-layout>
