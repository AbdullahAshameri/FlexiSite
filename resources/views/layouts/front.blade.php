<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>FlexiSite</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=xdevice-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}" />
    <!-- Favicons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css" />

    <!-- Google Fonts  -->
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&#038;display=swap"
        rel="stylesheet" />
    <script src="https://unpkg.com/lottie-web@latest/build/player/lottie.min.js"></script> --}}

    @stack('styles')
</head>

<body>






    <!-- Hero Section -->
    <header id="header" class="header d-flex align-items-center fixed-top"
        style="background-color: #ffffff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); z-index: 9999;">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/images/hero/flexisite-logo.svg') }}" alt="Logo" class="logo-img">
            </a>

            <!-- Navbar Links (center) -->
            <nav id="navmenu" class="navmenu mx-auto">
                <ul class="d-flex justify-content-center align-items-center mb-0">
                    <li><a href="{{ route('home') }}" class="active">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('about.page') }}">{{ __('About As') }}</a></li>
                    <li><a href="{{ route('services.page') }}">{{ __('Services') }}</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)"><span>{{ __('Products') }}</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('products.index') }}">{{ __('Products') }}</a></li>
                            <li><a href="product-list.html">Shop List</a></li>
                            <li><a href="product-details.html">Shop Single</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blogs.all') }}">{{ __('Blog') }}</a></li>
                    <li><a href="{{ route('contact.page') }}">{{ __('Contact Us') }}</a></li>
                </ul>
            </nav>

            <!-- Desktop language select (right) -->
            <div class="header-lang d-none d-xl-flex align-items-center">
                <i class="lni lni-world me-2" aria-hidden="true"></i>
                <select id="language-selector-desktop" aria-label="Select language"
                    style="border:1px solid #ccc; padding:4px 8px; border-radius:4px; background-color:#fff;">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <option value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                            {{ LaravelLocalization::getCurrentLocale() === $localeCode ? 'selected' : '' }}>
                            {{ $properties['native'] }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- mobile toggle -->
            <i class="mobile-nav-toggle d-xl-none bi bi-list" aria-label="Toggle navigation"></i>
        </div>
    </header>
    <!-- End Hero Area -->


    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    {{ $breadcrumb ?? '' }}
    <!-- End Breadcrumbs -->

    {{ $slot }}

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <!-- End Footer Top -->
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>{{ __('Get In Touch With Us') }}</h3>

                                @if ($footer->address_one)
                                    <p class="phone"><i class="lni lni-map-marker"></i> {{ $footer->address_one }}
                                    </p>
                                @endif

                                @if ($footer->address_two)
                                    <p class="phone"><i class="lni lni-map-marker"></i> {{ $footer->address_two }}
                                    </p>
                                @endif

                                @if ($footer->address_three)
                                    <p class="phone"><i class="lni lni-map-marker"></i> {{ $footer->address_three }}
                                    </p>
                                @endif

                                @if ($footer->number_one)
                                    <p class="phone"><i class="lni lni-phone"></i>
                                        <a href="tel:{{ $footer->number_one }}"
                                            style="color: inherit; text-decoration: none;">
                                            +967 {{ $footer->number_one }}
                                        </a>
                                    </p>
                                @endif

                                @if ($footer->number_two)
                                    <p class="phone"><i class="lni lni-phone"></i>
                                        <a href="tel:{{ $footer->number_two }}"
                                            style="color: inherit; text-decoration: none;">
                                            +967 {{ $footer->number_two }}
                                        </a>
                                    </p>
                                @endif

                                @if ($footer->email)
                                    <p class="phone"><i class="lni lni-envelope"></i>
                                        <a href="mailto:{{ $footer->email }}"
                                            style="color: inherit; text-decoration: none;">
                                            {{ $footer->email }}
                                        </a>
                                    </p>
                                @endif
                            </div>
                            <!-- End Single Widget -->
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>{{ __('Quick Links') }}</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">{{ __('Products') }}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Services') }}</a></li>
                                    {{-- <li><a href="javascript:void(0)">{{ __('Information') }}</a></li> --}}
                                    <li><a href="javascript:void(0)">{{ __('About Us') }}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Contact Us') }}</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>{{ __('Quick Links') }}</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">{{ __('About Us') }}</a></li>
                                    <li><a href="javascript:void(0)">{{ __('Contact Us') }}</a></li>
                                    <li><a href="javascript:void(0)">Downloads</a></li>
                                    <li><a href="javascript:void(0)">Sitemap</a></li>
                                    {{-- <li><a href="javascript:void(0)">FAQs Page</a></li> --}}
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>{{ __('FlexiSite') }}</h3>
                                @if (!empty($footer->short_description_one))
                                    <p class="mb-2" style="line-height: 1.6; color: rgb(214, 214, 214);">
                                        {{ $footer->short_description_one }}
                                    </p>
                                @endif

                                @if (!empty($footer->short_description_two))
                                    <p style="line-height: 1.6; color: rgb(214, 214, 214);">
                                        {{ $footer->short_description_two }}
                                    </p>
                                @endif
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="copyright">
                                <p>{{ __('All rights reserved') }} ©<a href="https://graygrids.com/" rel="nofollow"
                                        target="_blank">2025</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="socila">
                                <li>
                                    <span>{{ __('Follow Us On') }}:</span>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
