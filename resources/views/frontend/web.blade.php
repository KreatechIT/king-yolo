@extends('frontend.layouts.app')

@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'web')->first();
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
        <link rel="canonical" href="https://www.blackrevo.com/web-design-development">
    @endif
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient h-auto flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center pt-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    Web Design & Web Development
                </h1>
            </div>
        </div>
    </section>

    <section class="article-gradient flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center pt-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    Revolutionize Your Brand with Our Custom Web Development & Design Services
                </h2>

                <div class="py-3">
                    <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-7xl" data-aos="zoom-in"
                        data-aos-duration="1000">
                        Regular websites are now outdated. It is time for you to step up your game on website development
                        and design with us. At BlackRevo, we make sure your website visitors go through an immersive digital
                        experience for them to find what they need.
                    </p> <br>
                    <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-7xl" data-aos="zoom-in"
                        data-aos-duration="1000">
                        As a leading web design company in Malaysia, we don’t just specialize in creating websites, we also
                        specialize in directing your customers to the next course of action. No matter how complicated your
                        products or services may be, we guarantee that we will deliver outstanding results.

                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <div class="bg-black text-white py-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto text-center px-4">
            <h2 data-aos="zoom-in-up" data-aos-duration="1000"
                class="text-[48px] md:text-[68px] leading-tight font-[400] tracking-[-0.02em] custom-text-shadow font-vollkorn">
                Our Web Design Services
            </h2>
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
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Responsive Web Design</h2>
                                        <p>Our web development team ensures your web design automatically adapts to the layout that fits the screen size of any device that your clients are most likely going to use. These devices include smartphones, laptops, tablets, and desktop computers.                                        </p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Fast Loading</h2>
                                        <p>If your current website loads slow, you need to rectify that immediately. Not only do people hate slow loading speeds, but search engine algorithms would also not recommend your website to your potential customers. We can fix this for you by optimizing and compressing your website’s content for a quick loading time.</p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Great UI/UX</h2>
                                        <p>For many online platforms or applications, user interface (UI) and user experience (UX) are extremely important to improve user satisfaction. It ensures that users find it a seamless and enjoyable experience to navigate through your website.</p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 4 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Custom Web Design</h2>
                                        <p>Our custom web design is inclusive of all the elements your company needs. This service allows you to share your thoughts, ideas, opinions, and concepts that you have. Our job is to visualize and transform them into reality.</p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 5 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Advanced Functions/Features Ready</h2>
                                        <p>We offer custom-made solutions to streamline complex and other processes that may be time-consuming.</p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 6 -->
                            <div class="card-wrapper">
                               <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>SEO-Optimized Structure</h2>
                                        <p>An SEO-optimized web development structure ensures your website is built with clean code, fast load speeds, mobile responsiveness, and a proper content structure. This helps search engines understand and rank your site better.</p>
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

    <section class="article-gradient flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center pt-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    Importance of UI and UX for Businesses
                </h2>

                <div class="py-3">
                    <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-7xl" data-aos="zoom-in"
                        data-aos-duration="1000">
                        Website interfaces should have the ability to create exceptional user experience. This is because
                        they tend to revolve around your brand identity which in return align with your users’ needs. By
                        prioritizing both UI and UX, your website or application becomes more than just a means for
                        functionality – it can become your greatest asset for engagement, conversion, and growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-gradient flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center pt-20">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-12"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    Our Web Design and Development Work Process
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-3 md:gap-x-20 md:gap-y-50 sm:gap-x-20 sm:gap-y-[50px] relative">

                    <!-- CARD 1 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-1 sm:col-start-1 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            1</div>
                        <img src="{{ asset('assets/images/blackrevo-logo-2.png') }}" alt="BlackRevo"
                            class="w-auto h-auto mx-auto">
                        <!-- arrow to 2 -->
                        <img src="{{ asset('assets/images/arrow-right.png') }}" alt=""
                            class="hidden sm:block absolute top-1/2 right-[-70px] w-auto h-6 transform -translate-y-1/2">
                    </div>

                    <!-- CARD 2 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-1 sm:col-start-2 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            2</div>
                        <div class="text-center text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Consultation & Proposal</h3>
                            <p class="text-sm">
                                We usually begin with understanding your business’s unique selling points to
                                create a proposal that adds value and visibility to your website.
                            </p>
                        </div>
                        <!-- arrow to 3 -->
                        <img src="{{ asset('assets/images/arrow-right.png') }}" alt=""
                            class="hidden sm:block absolute top-1/2 right-[-70px] w-auto h-6 transform -translate-y-1/2">
                    </div>

                    <!-- CARD 3 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-1 sm:col-start-3 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            3</div>
                        <div class="text-center text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Onboarding</h3>
                            <p class="text-sm">
                                Our IT team will provide you a schedule and detailed follow-up dates for
                                deliverables, site architecture and design standards.
                            </p>
                        </div>
                        <!-- arrow down to 4 -->
                        <img src="{{ asset('assets/images/arrow-down.png') }}" alt=""
                            class="hidden sm:block absolute bottom-[-180px] left-1/2 w-auto h-auto transform -translate-x-1/2">
                    </div>

                    <!-- CARD 4 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-2 sm:col-start-3 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            4</div>
                        <div class="text-center text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Design & Develop</h3>
                            <p class="text-sm">
                                Once the design is approved, our front-end devs code with best practices
                                for responsiveness & SEO.
                            </p>
                        </div>
                        <!-- arrow left to 5 -->
                        <img src="{{ asset('assets/images/arrow-right.png') }}" alt=""
                            class="hidden sm:block absolute top-1/2 left-[-70px] w-auto h-6 transform -translate-y-1/2 rotate-180">
                    </div>

                    <!-- CARD 5 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-2 sm:col-start-2 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            5</div>
                        <div class="text-center z-10">
                            <h3 class="text-2xl font-extrabold text-white mb-1">EFFICIENT</h3>
                            <span class="block text-xl font-bold text-red-500 italic mb-1">&amp;</span>
                            <h3 class="text-2xl font-extrabold text-white">ORGANIZED</h3>
                        </div>
                        <!-- arrow left to 6 -->
                        <img src="{{ asset('assets/images/arrow-right.png') }}" alt=""
                            class="hidden sm:block absolute top-1/2 left-[-70px] w-auto h-6 transform -translate-y-1/2 rotate-180">
                    </div>

                    <!-- CARD 6 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-2 sm:col-start-1 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            6</div>
                        <div class="text-center text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Design Research & Analysis</h3>
                            <p class="text-sm">
                                We perform competitor & industry analysis to ensure your brand leads,
                                then validate the concept before prototyping.
                            </p>
                        </div>
                        <!-- arrow down to 7 -->
                        <img src="{{ asset('assets/images/arrow-down.png') }}" alt=""
                            class="hidden sm:block absolute bottom-[-180px] left-1/2 w-auto h-auto transform -translate-x-1/2">
                    </div>

                    <!-- CARD 7 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-3 sm:col-start-1 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            7</div>
                        <div class="text-center text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Testing & Quality Assurance</h3>
                            <p class="text-sm">
                                We test across devices & browsers, then run user-acceptance to catch any final issues.
                            </p>
                        </div>
                        <!-- arrow to 8 -->
                        <img src="{{ asset('assets/images/arrow-right.png') }}" alt=""
                            class="hidden sm:block absolute top-1/2 right-[-70px] w-auto h-6 transform -translate-y-1/2">
                    </div>

                    <!-- CARD 8 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-3 sm:col-start-2 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            8</div>
                        <div class="text-center text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Launch</h3>
                            <p class="text-sm">
                                We do a final A→Z review with real-world or simulated users, then go live!
                            </p>
                        </div>
                        <!-- arrow to 9 -->
                        <img src="{{ asset('assets/images/arrow-right.png') }}" alt=""
                            class="hidden sm:block absolute top-1/2 right-[-70px] w-auto h-6 transform -translate-y-1/2">
                    </div>

                    <!-- CARD 9 -->
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="relative aspect-square bg-gradient-to-br from-gray-700/70 to-red-400/50 rounded-3xl flex items-center justify-center p-6
                         sm:row-start-3 sm:col-start-3 mb-3">
                        <div
                            class="absolute top-2 left-2 text-white rounded-full w-6 h-6 flex items-center justify-center text-3xl font-bold z-10">
                            9</div>
                        <div class="text-center text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Continuous Improvement & Future Partnerships</h3>
                            <p class="text-sm">
                                We set up analytics & feedback loops to keep your site performing—and build a long-term
                                partnership.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="service-gradient base-template py-20">
        <div class="wrapper base-template__wrapper mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="max-w-7xl mx-auto text-center pt-16 mb-12">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight" data-aos="zoom-in-up"
                    data-aos-duration="1000">
                    Why Choose BlackRevo?
                </h2>
            </div>

            <!-- Slider + Nav -->
            <div>
                <!-- Swiper Slider -->
                <div class="emotions-slider__slider swiper overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="swiper-wrapper">
                        @foreach ($cards as $card)
                            <div class="swiper-slide flex justify-center px-2">
                                <div
                                    class="relative overflow-hidden rounded-3xl border-2 border-red-800/70 bg-gray-900 flex flex-col items-center p-6 w-full max-w-sm h-100">
                                    <div class="absolute inset-0 bg-gradient-to-b from-gray-800 to-gray-900"></div>
                                    <div class="relative z-10 text-center">
                                        <img src="{{ asset('assets/images/' . $card['image']) }}" alt=""
                                            class="w-auto h-24 mx-auto mb-4">
                                        <h3 class="text-xl font-bold text-white uppercase mb-3">{{ $card['title'] }}</h3>
                                        <p class="text-sm text-white mx-auto">{{ $card['desc'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation Buttons Below -->
                <div class="flex justify-center space-x-4 mt-6" data-aos="zoom-in-up" data-aos-duration="1000">
                    <button
                        class="slider-nav__item_prev w-10 h-10 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center cursor-pointer">
                        <!-- Left arrow SVG -->
                        <svg width="24" height="24" fill="none" stroke="#C81111" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 18l-6-6 6-6" />
                        </svg>
                    </button>
                    <button
                        class="slider-nav__item_next w-10 h-10 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center cursor-pointer">
                        <!-- Right arrow SVG -->
                        <svg width="24" height="24" fill="none" stroke="#C81111" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 6l6 6-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-gradient px-4 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight" data-aos="zoom-in-up"
                    data-aos-duration="1000">Common FAQS
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
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new Swiper('.emotions-slider__slider', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 16,
                navigation: {
                    nextEl: '.slider-nav__item_next',
                    prevEl: '.slider-nav__item_prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                },
            });
        });
    </script>

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
