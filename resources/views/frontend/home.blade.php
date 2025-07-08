@extends('frontend.layouts.app')

@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'home')->first();
    @endphp

    @if ($metaData)
        <title>{{ $metaData->meta_title ?? 'BlackRevo' }}</title>
        @if ($metaData->keywords != null)
            <meta name="keywords" content="{{ $metaData->keywords }}">
        @endif
        <meta name="description" content="{{ $metaData->meta_description }}">

        <meta name="google-site-verification" content="HZOF6hbZwbQULneem8BMwaFVBDuk_Z1hDy7tZ0ppgP4">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.blackrevo.com/">
        <meta property="og:title" content="{{ $metaData->meta_title }}">
        <meta property="og:description" content="{{ $metaData->meta_description }}">
        <meta property="og:image" content="https://www.blackrevo.com/favicon.ico">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.blackrevo.com/">
        <meta property="twitter:title" content="{{ $metaData->meta_title }}">
        <meta property="twitter:description" content="{{ $metaData->meta_description }}">
        <meta property="twitter:image" content="https://www.blackrevo.com/favicon.ico">
        <link rel="canonical" href="https://www.blackrevo.com/">
    @endif
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center flex-col overflow-hidden" id="hero-section">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24 pb-0">
            <div class="max-w-5xl mx-auto text-center pt-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <span>Fuel Your Digital Presence with SEO </span> Malaysia and Expert Website Development Solutions
                </h1>
                <p class="text-lg text-gray-300 mb-12 max-w-3xl mx-auto font-manrope" data-aos="zoom-in-up"
                    data-aos-duration="1000">
                    At BlackRevo, we strive to become the best SEO company in Malaysia alongside our team of passionate
                    digital marketing professionals. With a history of helping businesses thrive in digital settings, we
                    don't plan on stopping just there. Over here, we're built different. Our company culture is built on our
                    growth mindset and passion for continuous innovation and growth to enhance customer experience.
                </p>
            </div>
        </div>

        <div class="relative h-64 sm:h-96 md:h-[450px] lg:h-[550px] md:-mt-14 xl:h-[700px] w-full overflow-hidden">
            <!-- Red Elliplse -->
            <img src="{{ asset('assets/images/globe-ellipse.svg') }}" alt="" class="absolute top-0 right-0 z-20">

            <!-- Globe Image -->
            <img src="{{ asset('assets/images/hero-globe.svg') }}" alt="Globe"
                class="animate-spin absolute -top-6 md:-top-10 lg:-top-16 w-full z-10"
                style="animation-duration: 50s; transform-origin: center;">
        </div>
    </section>


    <!-- Ticker Headline Section -->
    <section class="ticker-headline bg-black overflow-hidden relative z-[10]">
        <div class="ticker-container">
            <div class="ticker-content">
                <div class="flex items-center animate-marquee whitespace-nowrap">

                    @for ($i = 0; $i < 5; $i++)
                        <span class="text-red-600 mx-2">
                            <svg width="20" height="30" viewBox="0 0 21 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.9303 14.6383C20.8753 14.5268 20.7906 14.4327 20.6854 14.3664C20.5803 14.3001 20.4589 14.2642 20.3346 14.2626L12.2255 14.1609L15.9219 0.854399C15.9646 0.701657 15.9519 0.538761 15.8861 0.394461C15.8204 0.25016 15.7057 0.13373 15.5625 0.0657192C15.4194 -0.00264048 15.2567 -0.0182577 15.1033 0.0216237C14.9498 0.0615052 14.8153 0.154321 14.7236 0.283693L0.124431 20.8345C0.0528357 20.9353 0.0103646 21.0539 0.00166851 21.1772C-0.00702759 21.3006 0.0183875 21.424 0.0751299 21.5338C0.131872 21.6437 0.217754 21.7358 0.323369 21.8001C0.428984 21.8644 0.550259 21.8985 0.673913 21.8984H6.95067L1.82644 38.6588C1.77992 38.8106 1.78849 38.9739 1.85065 39.12C1.9128 39.2661 2.02455 39.3856 2.16619 39.4573C2.30782 39.5291 2.47024 39.5485 2.6248 39.5122C2.77935 39.4759 2.91612 39.3861 3.01098 39.2588L20.8666 15.339C20.9408 15.2394 20.986 15.1213 20.9972 14.9976C21.0085 14.874 20.9853 14.7496 20.9303 14.6383Z"
                                    fill="#C20101" />
                            </svg>
                        </span>
                        <span class="text-white font-bold">ILLUMINATING DIGITAL PATHS, IGNITING BUSINESS FUTURES</span>
                        <span class="text-red-600 mx-2">
                            <svg width="20" height="30" viewBox="0 0 21 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.9303 14.6383C20.8753 14.5268 20.7906 14.4327 20.6854 14.3664C20.5803 14.3001 20.4589 14.2642 20.3346 14.2626L12.2255 14.1609L15.9219 0.854399C15.9646 0.701657 15.9519 0.538761 15.8861 0.394461C15.8204 0.25016 15.7057 0.13373 15.5625 0.0657192C15.4194 -0.00264048 15.2567 -0.0182577 15.1033 0.0216237C14.9498 0.0615052 14.8153 0.154321 14.7236 0.283693L0.124431 20.8345C0.0528357 20.9353 0.0103646 21.0539 0.00166851 21.1772C-0.00702759 21.3006 0.0183875 21.424 0.0751299 21.5338C0.131872 21.6437 0.217754 21.7358 0.323369 21.8001C0.428984 21.8644 0.550259 21.8985 0.673913 21.8984H6.95067L1.82644 38.6588C1.77992 38.8106 1.78849 38.9739 1.85065 39.12C1.9128 39.2661 2.02455 39.3856 2.16619 39.4573C2.30782 39.5291 2.47024 39.5485 2.6248 39.5122C2.77935 39.4759 2.91612 39.3861 3.01098 39.2588L20.8666 15.339C20.9408 15.2394 20.986 15.1213 20.9972 14.9976C21.0085 14.874 20.9853 14.7496 20.9303 14.6383Z"
                                    fill="#C20101" />
                            </svg>
                        </span>
                    @endfor
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <div class="bg-black text-white py-16 relative overflow-hidden">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-[48px] md:text-[68px] leading-tight font-[400] tracking-[-0.02em] custom-text-shadow font-vollkorn"
                data-aos="zoom-in-up" data-aos-duration="1000">
                Our Services & Capabilities
            </h2>
            <p class="font-manrope text-white/60 max-w-4xl mx-auto mt-4" data-aos="zoom-in" data-aos-duration="1000">
                At BlackRevo, we are all about redefining the current industry standards. We want to revolutionize the way
                businesses appear online and focus on improving their online presence. As a digital marketing agency pioneer
                in
                Malaysia, we believe that our commitment to innovation and excellence will ensure you meet your business’
                goals.
            </p>
        </div>

        <div class="relative py-60 md:py-30 lg:py-20 xl:py-10 2xl:py-0" data-aos="zoom-in" data-aos-duration="1000">
            <img src="{{ asset('assets/images/services-bg.svg') }}" alt="" class="w-full object-cover" />
            <img src="{{ asset('assets/images/energy-preview.png') }}" alt=""
                class="absolute -top-60 scale-[0.4] -right-28 z-30 opacity-50 hidden lg:block" />
            <div class="absolute inset-0 red-mask"></div>

            <!-- Carousel Section -->
            <div class="absolute inset-0 flex justify-center items-center">
                <section class="carousel-section">
                    <div class="carousel-container">
                        <div class="carousel font-manrope" id="carousel">
                            <!-- Card 1 -->
                            <div class="card-wrapper relative">
                                <a href="{{ route('web') }}" class="card-link">
                                    <div class="card">
                                        <h2>Web Design & Development</h2>
                                        <p>There is more to your website than being just a platform – it reflects the very
                                            core of your brand. At BlackRevo, we do more than just build websites. We also
                                            create digital experiences that compel your audiences with streamlined
                                            functionality to elevate your brand.</p>
                                        <div class="btn">
                                            <span>Learn more</span>
                                            <span><img src="{{ asset('assets/images/learn-more-arrow.png') }}"
                                                    alt="" /></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card-wrapper">
                                <a href="{{ route('contact') }}" class="card-link">
                                    <div class="card">
                                        <h2>Rank 1st with Professional Google SEO Service Provider in Malaysia</h2>
                                        <p>With BlackRevo, you will be able to see how we redefine what it means to be an
                                            online marketing agency</p>
                                        <div class="btn">
                                            <span>Learn more</span>
                                            <span><img src="{{ asset('assets/images/learn-more-arrow.png') }}"
                                                    alt="" /></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card-wrapper">
                                <a href="{{ route('seo') }}" class="card-link">
                                    <div class="card">
                                        <h2>Search Engine Optimization (SEO)</h2>
                                        <p>Search engine optimization has become a necessity in the digital marketing world
                                            as one of the most important factors when it comes to growing your business.</p>
                                        <div class="btn">
                                            <span>Learn more</span>
                                            <span>
                                                <img src="{{ asset('assets/images/learn-more-arrow.png') }}"
                                                    alt="" />
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 4 -->
                            <div class="card-wrapper">
                                <a href="{{ route('web') }}" class="card-link">
                                    <div class="card">
                                        <h2>Web Design & Development</h2>
                                        <p>There is more to your website than being just a platform – it reflects the very
                                            core of your brand. At BlackRevo, we do more than just build websites. We also
                                            create digital experiences that compel your audiences with streamlined
                                            functionality to elevate your brand.</p>
                                        <div class="btn">
                                            <span>Learn more</span>
                                            <span><img src="{{ asset('assets/images/learn-more-arrow.png') }}"
                                                    alt="" /></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 5 -->
                            <div class="card-wrapper">
                                <a href="{{ route('contact') }}" class="card-link">
                                    <div class="card">
                                        <h2>Rank 1st with Professional Google SEO Service Provider in Malaysia</h2>
                                        <p>With BlackRevo, you will be able to see how we redefine what it means to be an
                                            online marketing agency</p>
                                        <div class="btn">
                                            <span>Learn more</span>
                                            <span><img src="{{ asset('assets/images/learn-more-arrow.png') }}"
                                                    alt="" /></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 6 -->
                            <div class="card-wrapper">
                                <a href="{{ route('seo') }}" class="card-link">
                                    <div class="card">
                                        <h2>Search Engine Optimization (SEO)</h2>
                                        <p>Search engine optimization has become a necessity in the digital marketing world
                                            as one of the most important factors when it comes to growing your business.</p>
                                        <div class="btn">
                                            <span>Learn more</span>
                                            <span><img src="{{ asset('assets/images/learn-more-arrow.png') }}"
                                                    alt="" /></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                        </div>

                        <div class="controls w-full flex justify-between">
                            <button class="control-btn" id="prev"><svg width="30" height="30"
                                    viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_214_10857)">
                                        <path d="M41.1973 24.5164H7.84175" stroke="white" stroke-width="2.42586"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.4863 10.8718L7.84089 24.5173L21.4863 38.1627" stroke="white"
                                            stroke-width="2.42586" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_214_10857">
                                            <rect width="48.5171" height="48.5171" fill="white"
                                                transform="matrix(-1 0 0 1 48.7754 0.258545)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                            <button class="control-btn" id="next">
                                <svg width="30" height="30" viewBox="0 0 49 49" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_214_10862)">
                                        <path d="M7.6084 24.5164H40.9639" stroke="white" stroke-width="2.42586"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M27.3193 10.8718L40.9648 24.5173L27.3193 38.1627" stroke="white"
                                            stroke-width="2.42586" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_214_10862">
                                            <rect width="48.5171" height="48.5171" fill="white"
                                                transform="translate(0.0302734 0.258545)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Ticker Headline-2 Section -->
    <div class="relative bg-black h-48 -mt-28">
        <section
            class="absolute w-full overflow-hidden bg-black -skew-y-5 py-6 my-19 border-t border-b z-30 top-0 border border-y border-y-white/30">
            <div class="flex whitespace-nowrap animate-marquee font-sans font-[700]">
                <div class="flex items-center">
                    <span class="text-red-600 font-bold text-2xl mx-4">CREATIVE</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">DIGITAL</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">SEARCH</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">ENGINE</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">CREATIVE</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">DIGITAL</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">SEARCH</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">ENGINE</span>
                </div>

                <div class="flex items-center">
                    <span class="text-red-600 font-bold text-2xl mx-4">CREATIVE</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">DIGITAL</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">SEARCH</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">ENGINE</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">CREATIVE</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">DIGITAL</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">SEARCH</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">ENGINE</span>
                </div>

                <div class="flex items-center">
                    <span class="text-red-600 font-bold text-2xl mx-4">CREATIVE</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">DIGITAL</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">SEARCH</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">ENGINE</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">CREATIVE</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">DIGITAL</span>
                    <span class="text-red-600 font-bold text-2xl mx-4">SEARCH</span>
                    <span
                        class="text-white font-bold text-2xl mx-4 drop-shadow-[0_1.2px_2px_rgba(255,0,0,1)]">ENGINE</span>
                </div>
            </div>
        </section>
    </div>

    <!-- Why Choose Us -->
    <section class="bg-gradient-to-b bg-black text-white flex items-center justify-center p-6 relative overflow-hidden">
        <div class="max-w-6xl w-full text-center">
            <h2 data-aos="zoom-in-up" data-aos-duration="1000"
                class="text-[68px] leading-[112px] text-center font-[400] tracking-[-0.02em]  custom-text-shadow font-vollkorn">
                Why Choose Us?
            </h2>

            <div class="relative" data-aos="zoom-in-up" data-aos-duration="1000">
                <div
                    class="absolute left-1/2 top-24 transform -translate-x-1/2 h-[400px] w-px bg-gradient-to-b from-white/50 to-[#C20101]/30 hidden lg:block z-30">
                </div>
                <div
                    class="absolute left-1/2 top-16 transform -translate-x-1/2 h-24 w-[69%] bg-gradient-to-b from-white/30 to-[#C20101]/30 hidden lg:block rounded-t-3xl p-0.5 pb-0">
                    <div class="w-full h-full bg-black"
                        style="border-top-right-radius: 22px;border-top-left-radius: 22px;">
                    </div>
                </div>

                <div class="mt-10 relative z-20">
                    <div class="flex">
                        <div class="flex p-1 rounded-full border-2 border-white/30 mx-auto">
                            <div class="flex p-1 rounded-full border-2 border-white/30 mx-auto">
                                <div class="flex p-1 rounded-full border-2 border-white/30 mx-auto">
                                    <div class="flex p-0.5 rounded-full border-2 border-white/30 mx-auto">
                                        <div
                                            class="bg-gradient-to-b size-20 rounded-full from-[#C20101] to-[#FFAFAF] flex  justify-center items-center mx-auto">
                                            <img src="{{ asset('assets/images/why-choose-us-stack-icon.png') }}"
                                                alt="" class="scale-75">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 gap-y-10 mt-16" data-aos="zoom-in-up"
                    data-aos-duration="1000">
                    <!-- Integrity (Top-left) -->
                    <div class="border border-white/30 rounded-xl custom-linear-bg px-8 pb-8 font-manrope w-full relative">
                        <div
                            class="bg-gradient-to-b size-14 -mt-7 rounded-full from-[#C20101] to-[#FFAFAF] flex justify-center items-center mx-auto border border-[#CB97FF]">
                            <img src="{{ asset('assets/images/integrity-icon.svg') }}" alt="" class="scale-75">
                        </div>
                        <div class="absolute">
                            <img src="{{ asset('assets/images/star.svg') }}" alt="" class="scale-75">
                        </div>
                        <div class="absolute right-8">
                            <img src="{{ asset('assets/images/star.svg') }}" alt="" class="scale-75">
                        </div>
                        <h3 class="text-xl font-semibold mt-6 mb-4">Integrity</h3>
                        <p class="text-sm text-gray-300">
                            {{ $whyChooseUs->firstWhere('name', 'Integrity')->payload ?? '' }}</p>
                    </div>

                    <!-- Empty Column -->
                    <div class="hidden lg:block"></div>

                    <!-- Customer-Centric (Top-right) -->
                    <div class="border border-white/30 rounded-xl custom-linear-bg px-8 pb-8 font-manrope w-full relative">
                        <div
                            class="bg-gradient-to-b size-14 -mt-7 rounded-full from-[#C20101] to-[#FFAFAF] flex justify-center items-center mx-auto border border-[#CB97FF]">
                            <img src="{{ asset('assets/images/customer-centric-icon.svg') }}" alt=""
                                class="scale-75">
                        </div>
                        <div class="absolute">
                            <img src="{{ asset('assets/images/star.svg') }}" alt="" class="scale-75">
                        </div>
                        <div class="absolute right-8">
                            <img src="{{ asset('assets/images/star.svg') }}" alt="" class="scale-75">
                        </div>
                        <h3 class="text-xl font-semibold mt-6 mb-4">Customer-Centric</h3>
                        <p class="text-sm text-gray-300">
                            {{ $whyChooseUs->firstWhere('name', 'Customer-Centric')->payload ?? '' }}</p>
                    </div>

                    <!-- Innovation (Second row, centered on lg) -->
                    <div
                        class="border border-white/30 rounded-xl custom-linear-bg px-8 pb-8 font-manrope w-full lg:col-start-2 relative">
                        <div
                            class="bg-gradient-to-b size-14 -mt-7 rounded-full from-[#C20101] to-[#FFAFAF] flex justify-center items-center mx-auto border border-[#CB97FF]">
                            <img src="{{ asset('assets/images/innovation-icon.svg') }}" alt="" class="scale-75">
                        </div>
                        <div class="absolute">
                            <img src="{{ asset('assets/images/star.svg') }}" alt="" class="scale-75">
                        </div>
                        <div class="absolute right-8">
                            <img src="{{ asset('assets/images/star.svg') }}" alt="" class="scale-75">
                        </div>
                        <h3 class="text-xl font-semibold mt-6 mb-4">Innovation</h3>
                        <p class="text-sm text-gray-300">
                            {{ $whyChooseUs->firstWhere('name', 'Innovation')->payload ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-1/2 -translate-y-1/2 right-0">
            <img src="{{ asset('assets/images/why-choose-us-ellipse.svg') }}" alt="" class="">
        </div>
        <div
            class="absolute lg:-bottom-32 xl:-bottom-20 2xl:bottom-0 bottom-0 right-0 lg:-right-24 xl:-right-20 2xl:right-0 opacity-30 lg:opacity-100 floating-element">
            <img src="{{ asset('assets/images/why-choose-us-bg1.png') }}" alt=""
                class="lg:scale-70 xl:scale-80 2xl:scale-100">
        </div>
        <div class="absolute bottom-20 -left-10 xl:left-0 hidden lg:block floating-element-delayed">
            <img src="{{ asset('assets/images/SEO-binary.svg') }}" alt="" class="lg:scale-50 xl:scale-80">
        </div>
    </section>

    <!-- Award & Recognition Section -->
    <section class="bg-gradient-to-b px-4 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight" data-aos="zoom-in-up"
                    data-aos-duration="1000">Awards and Recognition
                </h2>
                <p class="font-manrope text-white/60 max-w-4xl mx-auto mt-4" data-aos="zoom-in" data-aos-duration="1000">
                    We’re proud to have received recognition from respected industry platforms and partners over the years.
                    These acknowledgements serve as a reflection of the dedication we bring to every project — from strategy
                    and design to development and delivery. While awards aren’t our end goal, they affirm our ongoing
                    commitment to creating meaningful, results-driven digital experiences.
                </p>
            </div>
            <div class="flex items-center justify-center space-y-2" data-aos="zoom-in-up" data-aos-duration="1000">
                <div
                    class="award-card rounded-2xl p-8 w-full max-w-xs h-64 flex flex-col items-center justify-center text-center">
                    <div class="rounded-xl p-6 mt-5 mb-4 shadow-lg">
                        <a href="https://www.designrush.com/agency/website-design-development" target="_blank">
                            <img src="{{ asset('assets/images/top-web-design-agencies.png') }}"
                                alt="top-web-design-agencies" class="w-full h-auto rounded-lg shadow-lg mb-4">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-gradient px-4 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight" data-aos="zoom-in-up"
                    data-aos-duration="1000">Frequently Asked Questions
                </h2>
            </div>
            <div class="space-y-2" data-aos="zoom-in-up" data-aos-duration="1000">
                @foreach ($faqs as $item)
                    <div class="accordion p-4 {{ !$loop->last ? 'border-b border-b-gray-300' : '' }}">
                        <button class="accordion-toggle w-full text-left text-lg font-semibold text-white py-3">
                            <div class="flex items-center justify-between cursor-pointer">
                                <span class="pr-8 flex-1">{{ $item->question }}</span>
                                <span
                                    class="icon text-xl font-bold w-8 h-8 flex-shrink-0 flex items-center justify-center border border-gray-400 rounded-full">
                                    +
                                </span>
                            </div>
                        </button>
                        <div class="accordion-content hidden max-w-6xl">
                            <p class="text-white mt-2">{{ $item->answer }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


@section('styles')
    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        /* For the second element, we can offset the timing */
        .floating-element-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: 2s;
            /* Creates an offset so elements don't float in sync */
        }

        /* Css for Award Cards */
        .award-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .award-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .highlight {
            background: linear-gradient(120deg, #fbbf24 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all accordion toggle buttons
            const accordionToggles = document.querySelectorAll('.accordion-toggle');

            // Add click event listener to each toggle button
            accordionToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {

                    console.log('accordian clicked');

                    // Get the content panel that follows this toggle
                    const content = this.nextElementSibling;

                    // Get the icon span inside this toggle
                    const icon = this.querySelector('.icon');

                    // Toggle the display of the content
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        // Change + to - when expanded
                        icon.textContent = '-';
                    } else {
                        content.classList.add('hidden');
                        // Change - to + when collapsed
                        icon.textContent = '+';
                    }

                    // Optional: Close other open accordions (uncomment if you want this behavior)
                    accordionToggles.forEach(otherToggle => {
                        if (otherToggle !== toggle) {
                            const otherContent = otherToggle.nextElementSibling;
                            const otherIcon = otherToggle.querySelector('.icon');
                            otherContent.classList.add('hidden');
                            otherIcon.textContent = '+';
                        }
                    });
                });
            });


        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("carousel");
            const prev = document.getElementById("prev");
            const next = document.getElementById("next");
            const cardWrappers = document.querySelectorAll(".card-wrapper");
            const cards = document.querySelectorAll(".card");

            let angle = 0;
            const cardCount = cardWrappers.length;
            const angleIncrement = 360 / cardCount;
            let isRotating = false; // ✅ Prevent multiple clicks during animation

            // Function to update active card border
            function updateActiveCard() {
                const activeIndex = Math.round((-angle / angleIncrement) % cardCount);
                const normalizedIndex =
                    activeIndex < 0 ?
                    (cardCount + (activeIndex % cardCount)) % cardCount :
                    activeIndex % cardCount;

                cards.forEach((card) => {
                    card.style.border = "1px solid rgba(255, 255, 255, 0.2)";
                    card.classList.remove("active-card");
                });

                if (normalizedIndex >= 0 && normalizedIndex < cards.length) {
                    const activeCard = cards[normalizedIndex];
                    activeCard.style.border = "1px solid rgba(255, 62, 62, 0.3)";
                    activeCard.classList.add("active-card");
                }
            }

            // Rotation function with disable during transition
            function rotateTo(newAngle) {
                if (isRotating) return; // 🚫 Prevent click if rotating

                isRotating = true; // Lock
                angle = newAngle;
                carousel.style.transition = "transform 0.5s ease";
                carousel.style.transform = `rotateX(-10deg) rotateY(${angle}deg)`;

                updateActiveCard();

                setTimeout(() => {
                    carousel.style.transition = "none";
                    isRotating = false; // 🔓 Unlock after transition
                }, 500); // Match the duration with CSS transition
            }

            // Button Events
            prev.addEventListener("click", () => rotateTo(angle + angleIncrement));
            next.addEventListener("click", () => rotateTo(angle - angleIncrement));

            // Initial setup
            carousel.style.transform = `rotateX(-10deg) rotateY(${angle}deg)`;
            updateActiveCard();

            // Keyboard Navigation
            document.addEventListener("keydown", (e) => {
                if (e.key === "ArrowLeft") {
                    rotateTo(angle + angleIncrement);
                } else if (e.key === "ArrowRight") {
                    rotateTo(angle - angleIncrement);
                }
            });
        });
    </script>
@endsection
