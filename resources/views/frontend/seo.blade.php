@extends('frontend.layouts.app')

@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'seo')->first();
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
        <link rel="canonical" href="https://www.blackrevo.com/seo-malaysia">
    @endif
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient h-auto flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">

            <div class="max-w-7xl mx-auto text-center pt-20 min-h-[600px] flex justify-center items-center relative">
                <h1 data-aos="zoom-in" data-aos-duration="1000"
                    class="text-[50px] md:text-[60px] text-center font-[400] tracking-[-0.02em]  custom-text-shadow font-vollkorn leading-tight relative z-20">
                    <span class="text-white/60">Your Most Trusted SEO Marketing</span> <br> <span
                        class="text-white/75">Agency in Malaysia for
                        Expert</span>
                    <br> <span class="text-white/90">Strategies</span>
                </h1>
                <div class="absolute opacity-70">
                    <img src="{{ asset('assets/images/hero-seo.svg') }}" alt="" class="">
                </div>
            </div>
            <div class="max-w-7xl mx-auto text-center pt-20 text-white">
                <h2 data-aos="zoom-in" data-aos-duration="1000"
                    class="text-[50px] md:text-[60px] text-center font-[400] tracking-[-0.02em]  custom-text-shadow font-vollkorn leading-tight">
                    What is SEO?
                </h2>
                <p class="text-lg mb-12 mx-auto text-start mt-10 font-manrope" data-aos="zoom-in-up"
                    data-aos-duration="1000">

                    SEO (Search Engine Optimization) is an integral component of digital marketing strategies if you’re
                    looking to improve your ranking and online visibility in SERPs (Search Engine Result Pages).
                    <br> <br>
                    As a SEO company in Malaysia, we partner with businesses to discuss their website goals – most of which
                    are to improve visibility and ranking in search engine results. Our tailored SEO services ensure that
                    your website can secure top positions. In return, these can boost your website performance by attracting
                    potential customers, closing more sales, getting more inquiries, and improving your overall brand
                    awareness.
                    <br> <br>
                    The four main pillars of SEO that every company practices are: Keyword Research, On-Page Optimization,
                    Link Building, and Technical SEO. However, these strategies may vary depending on the business’ or
                    industry requirements. It is crucial to implement these four into your SEO strategy for optimal results
                    so that queries related to your content, products, or services can be made available for the right
                    audience. This also helps establish authority in your industry.
                    <br> <br>
                    Regardless of size or stage at which your business is currently at, SEO marketing has become one of the
                    most important elements to achieve success in any business. Are you ready to position yourself for
                    success? Contact us today to schedule a consultation and find out how we can make your business goals a
                    reality!

                </p>
            </div>
        </div>
    </section>

    <section class="article-gradient py-24 relative">

        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight mb-8 text-white text-center"
                data-aos="zoom-in-up" data-aos-duration="1000">
                Why is SEO Important?
            </h2>
            <div class="mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    <div class="card-gradient h-80 rounded-3xl border-3 border-red-600 flex items-center justify-center"
                        data-aos="flip-up" data-aos-duration="1000">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/blackrevo-logo-2.png') }}" alt="logo"
                                class="max-w-[80%] mx-auto">
                        </div>
                    </div>

                    <div class="card-gradient h-80 rounded-3xl shadow-lg shadow-black/50 p-6 flex flex-col justify-between"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg text-white/85 mt-5 leading-relaxed">
                            In June 2023, Google was found to be ahead of Bing and Yahoo in the Malaysian search engine
                            market with a market share of
                        </p>
                        <p class="card-value text-4xl font-bold text-right">96.84%</p>
                    </div>


                    <div class="card-gradient h-80 rounded-3xl border-3 border-red-600  shadow-lg shadow-black/50 p-6 flex flex-col justify-between"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg text-white/85 mt-5 leading-relaxed">
                            In 2023, Google as the main the search engine in Malaysia saw a rise in market share of
                        </p>
                        <p class="card-value text-4xl font-bold text-right">96.65%</p>
                    </div>


                    <div class="card-gradient h-80 rounded-3xl shadow-lg shadow-black/50 p-6 flex flex-col justify-between"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg text-white/85 mt-5 leading-relaxed">
                            Surveyed markets show that 65% of consumers tend to research products online before purchasing
                            in retail stores.
                        </p>
                        <p class="card-value text-4xl font-bold text-right">65%</p>
                    </div>

                    <div class="card-gradient h-80 w-full rounded-3xl flex flex-col items-center justify-center"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg uppercase text-white/80 mb-2">
                            Let The
                        </p>

                        <p class="italic text-3xl mb-2 text-white">
                            NUMBERS
                        </p>

                        <p class="text-lg uppercase text-white/80">
                            Show You Why
                        </p>
                    </div>

                    <div class="card-gradient h-80 rounded-3xl border-3 border-red-600 shadow-lg shadow-black/50 p-6 flex flex-col justify-between"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg text-white/85 mt-5 leading-relaxed">
                            Compared to PPC, approximately 70% of marketers vow that SEO services deliver more tangible
                            results.
                        </p>
                        <p class="card-value text-4xl font-bold text-right">70%</p>
                    </div>

                    <div class="card-gradient h-80 rounded-3xl shadow-lg shadow-black/50 p-6 flex flex-col justify-between"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg text-white/85 mt-5 leading-relaxed">
                            In December 2023, Google had accumulated a total of 84.2 billion visitors.
                        </p>
                        <p class="card-value text-4xl font-bold text-right">82.2 B</p>
                    </div>

                    <div class="card-gradient h-80 rounded-3xl border-3 border-red-600 shadow-lg shadow-black/50 p-6 flex flex-col justify-between"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg text-white/85 mt-5 leading-relaxed">
                            With a mobile market share of 95.32%, Google is the most popular search engine in the world.
                        </p>
                        <p class="card-value text-4xl font-bold text-right">95.32%</p>
                    </div>

                    <div class="card-gradient h-80 rounded-3xl border-3 border-red-600 shadow-lg shadow-black/50 p-6 flex flex-col justify-between"
                        data-aos="flip-up" data-aos-duration="1000">
                        <p class="text-lg text-white/85 mt-5 leading-relaxed">
                            68% of consumer online experiences begin with a search engine.
                        </p>
                        <p class="card-value text-4xl font-bold text-right">68%</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/energy-preview.png') }}" alt=""
            class="absolute bottom-0 scale-[0.4] -left-54 z-30 opacity-30 hidden lg:block" />
    </section>

    <section class="red-black-gradient py-24">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight mb-8 text-white text-center"
                data-aos="zoom-in-up" data-aos-duration="1000">
                Importance of SEO for your Business
            </h2>
            <div class="w-full py-16 px-4 md:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                        <div class="flex flex-col p-6 border-b-4 border-red-600 md:border-b-0 md:border-r-4 text-center"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <h3 class="text-xl font-bold text-gray-200 mb-4">Increase Online Visibility</h3>
                            <p class="text-gray-300 text-sm">
                                One of our main priorities to increase your website's online visibility and presence is to
                                use the right SEO strategy. These techniques are personalized per industry. Hence, as your
                                most trusted SEO partner in Malaysia, we want to make it easier for your potential customers
                                to find you on search engines like Google. If you're looking to expand globally or increase
                                your reach on local audiences, you know where to find us.
                            </p>
                        </div>

                        <div class="flex flex-col p-6 border-b-4 border-red-600 md:border-b-0 md:border-r-4 text-center"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <h3 class="text-xl font-bold text-gray-200 mb-4">Drive Organic Traffic</h3>
                            <p class="text-gray-300 text-sm">
                                While organic traffic is important, we think that it is even more effective that we attract
                                the right audience for your website. At Blackbrew, our specialization lies in optimization
                                of websites for relevant keywords that speak to your audience seeking for the products and
                                services that you have to offer. This is a targeted approach that ensures your website's
                                performance along with the possibility that every visitor of your website can potentially
                                convert to your business' loyal customer.
                            </p>
                        </div>

                        <div class="flex flex-col p-6 border-b-4 border-red-600 md:border-b-0 md:border-r-4 text-center"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <h3 class="text-xl font-bold text-gray-200 mb-4">Build Brand Credibility</h3>
                            <p class="text-gray-300 text-sm">
                                The websites that you see rank on Google's search engine results page is the outcome of
                                their efforts of building authority and trust. It isn't just about visibility. It's about
                                proving that your website is informative, helpful, and well-updated according to SEO
                                standards. As your chosen SEO company in Malaysia, we want to position your business as a
                                leader in its respective industry through brand credibility.
                            </p>
                        </div>

                        <div class="flex flex-col p-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
                            <h3 class="text-xl font-bold text-gray-200 mb-4">Increase Conversions</h3>
                            <p class="text-gray-300 text-sm">
                                Real growth occurs only when traffic converts into sales. Through strategic SEO marketing,
                                your website has the ability to attract high-quality and relevant traffic. Compared to other
                                methods of digital marketing, SEO is the best option for long-term and sustainable gains to
                                achieve measurable success.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="black-red-gradient py-24">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight mb-8 text-white text-center"
                data-aos="zoom-in-up" data-aos-duration="1000">
                Why Choose BlackRevo?
            </h2>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Card 1 -->
                    <div class="w-full flex justify-center">
                        <div data-aos="zoom-in" data-aos-duration="1000"
                            class="relative overflow-hidden rounded-3xl border-2 border-red-800/70 bg-gray-900 flex flex-col items-center justify-center p-6 w-full max-w-sm">
                            <!-- gradient background -->
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-800 to-gray-900"></div>
                            <!-- content -->
                            <div class="relative z-10 text-center">
                                <img src="{{ asset('assets/images/dedication.png') }}" alt="Dedication Badge"
                                    class="w-24 h-24 mx-auto mb-4">
                                <h3 class="text-xl font-bold text-white uppercase mb-3">DEDICATION</h3>
                                <p class="text-sm text-white mx-auto">
                                    We are dedicated to transforming businesses of all sizes by positioning your website as
                                    a leader in your specific niche or industry with our SEO experts.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full flex justify-center">
                        <div data-aos="zoom-in" data-aos-duration="1000"
                            class="relative overflow-hidden rounded-3xl border-2 border-red-800/70 bg-gray-900 flex flex-col items-center justify-center p-6 w-full max-w-sm">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-800 to-gray-900"></div>
                            <div class="relative z-10 text-center">
                                <img src="{{ asset('assets/images/adaptation.png') }}" alt="Adaptation Badge"
                                    class="w-24 h-24 mx-auto mb-4">
                                <h3 class="text-xl font-bold text-white uppercase mb-3">ADAPTATION</h3>
                                <p class="text-sm text-white mx-auto">
                                    We don’t believe in a one-size-fits-all approach. Instead, we adapt, innovate, and
                                    deliver only the highest quality of strategies that are customized to your specific
                                    business goals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-full flex justify-center">
                        <div data-aos="zoom-in" data-aos-duration="1000"
                            class="relative overflow-hidden rounded-3xl border-2 border-red-800/70 bg-gray-900 flex flex-col items-center justify-center p-6 w-full max-w-sm">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-800 to-gray-900"></div>
                            <div class="relative z-10 text-center">
                                <img src="{{ asset('assets/images/success.png') }}" alt="Success Badge"
                                    class="w-24 h-24 mx-auto mb-4">
                                <h3 class="text-xl font-bold text-white uppercase mb-3">SUCCESS</h3>
                                <p class="text-sm text-white mx-auto">
                                    BlackRevo thrives when your business thrives. We don’t just work for you; we succeed
                                    with you by creating bold strategies to achieve an online digital presence that will
                                    make both parties proud of how far we have come. Where your success leads, we follow.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <div class="bg-black text-white py-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto text-center px-4">
            <h2 data-aos="zoom-in" data-aos-duration="1000"
                class="text-[48px] md:text-[68px] leading-tight font-[400] tracking-[-0.02em] custom-text-shadow font-vollkorn">
                BlackRevo SEO Optimization Process for Proven Results on 1st Page of Google
            </h2>
            <p class="font-manrope text-white/60 max-w-4xl mx-auto mt-4" data-aos="zoom-in" data-aos-duration="1000">
                Our SEO business process is extremely comprehensive to elevate your website. This process begins from
                research and analysis to monthly reporting.
            </p>

            <br>

            <p class="font-manrope text-white/60 max-w-4xl mx-auto mt-4" data-aos="zoom-in" data-aos-duration="1000">
                As your reliable online marketing agency, we specialize in SEO Malaysia strategies tailored for local
                businesses while global strategies are implemented for businesses looking to venture to other parts of the
                world. We strive to empower businesses of all sizes and industries to make a change in their online
                marketing strategy for tangible results. Our confidence, knowledge, and years of experience have made it
                possible for us to become one of the leading SEO companies in Malaysia with a proven track record.
            </p>
        </div>

        <div class="relative py-60 md:py-30 lg:py-20 xl:py-10 2xl:py-0" data-aos="zoom-in" data-aos-duration="1000">
            <img src="{{ asset('assets/images/services-bg.svg') }}" alt="" class="w-full object-cover" />
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
                                        <h2>Research</h2>
                                        <p>Our business process usually begins with research. This means going through your
                                            industry competitors’ and target audience to analyze which strategy works best
                                            for your business’ needs and goals.
                                        </p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Onboarding</h2>
                                        <p>Our SEO experts will prepare a list of required information from you to set up
                                            necessary tools like Google Search Console (GSC), Google Analytics (GA), and
                                            etc. At this stage, we will also share a detailed overview of our overall SEO
                                            plan and timeframe for a smoother transition into our services</p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Implementation</h2>
                                        <p>Our SEO specialists will begin to execute the strategy as proposed via a
                                            customized strategy. After your approval, we will implement SEO strategies on
                                            the four main pillars: on-page, off-page, link-building, and technical SEO to
                                            increase your online presence and visibility in search engine results.</p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 4 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Analysis and Optimization</h2>
                                        <p>With our SEO analytics tools, we continuously monitor, analyze, and track the
                                            results of our website traffic, keyword rankings, and other important metrics.
                                            This ensures that you are able to see the outcomes you desire based on your
                                            business’ goals.</p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 5 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Monthly Reporting
                                        </h2>
                                        <p>Monthly reporting is one of the most important components of our business
                                            process. We practice the habit of providing our clients with detailed reports
                                            that clearly show our progress and website performance results. This is a
                                            necessary step to ensure you are kept informed and for us to adjust our
                                            strategies accordingly.
                                        </p>
                                    </div>
                                </a>
                                <div class="card-back"></div>
                            </div>

                            <!-- Card 6 -->
                            <div class="card-wrapper">
                                <a href="#" class="card-link">
                                    <div class="card">
                                        <h2>Successful Delivery</h2>
                                        <p>Our SEO team is in a constant state of evolution where we try to innovate and
                                            adapt to the best of our abilities to help you achieve your desired results with
                                            us. We take pride in fulfilling our commitments with utmost consistency and
                                            care.
                                        </p>
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

    <section class="faq-gradient px-4 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight" data-aos="zoom-in-up"
                    data-aos-duration="1000">SEO Service Package and Pricing</h2>
            </div>

            <!-- Navigation Bar -->
            <div class="max-w-4xl mx-auto bg-red-900">
                <nav class="max-w-full mx-auto px-4 py-3" data-aos="zoom-in" data-aos-duration="1000">
                    <ul
                        class="flex flex-col md:flex-row items-center md:justify-start space-y-2 md:space-y-0 md:space-x-6">
                        <li>
                            <a href="#"
                                class="tab-btn active block px-5 py-2 bg-red-700 text-white font-medium rounded-sm"
                                data-tab="website-analysis">
                                WEBSITE ON-PAGE ANALYSIS
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="tab-btn block px-5 py-2 text-white font-medium rounded-sm hover:bg-red-800"
                                data-tab="planning-strategy">
                                PLANNING AND STRATEGY
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="tab-btn block px-5 py-2 text-white font-medium rounded-sm hover:bg-red-800"
                                data-tab="action-optimization">
                                ACTION AND OPTIMIZATION
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Tab Content Containers -->
            <div class="tab-content" id="website-analysis">
                <!-- SEO Package Pricing Table -->
                <div class="bg-opacity-90 p-6 rounded-xl max-w-4xl mx-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <!-- wrapper that enables horizontal scrolling -->
                    <div class="overflow-x-auto">
                        <!-- force a min‑width so it overflows on mobile -->
                        <div class="min-w-[800px] border border-white rounded-lg overflow-hidden">

                            <!-- Table Header -->
                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 font-semibold border-b border-white">Package Type</div>
                                <div class="p-4 font-semibold text-center border-b border-white">Standard</div>
                                <div class="p-4 font-semibold text-center border-b border-white">Business</div>
                                <div class="p-4 font-semibold text-center border-b border-white text-yellow-400">Premium
                                </div>
                            </div>

                            <!-- Table Rows -->
                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Keyword topics</div>
                                <div class="p-4 text-center border-b border-white">2</div>
                                <div class="p-4 text-center border-b border-white">4</div>
                                <div class="p-4 text-center border-b border-white">10</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Number Of Keywords</div>
                                <div class="p-4 text-center border-b border-white">50</div>
                                <div class="p-4 text-center border-b border-white">100</div>
                                <div class="p-4 text-center border-b border-white">200</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">
                                    <div>Our Commitment: At least X</div>
                                    <div>Keywords On Google 1st Page</div>
                                    <div>Within 12 Months</div>
                                </div>
                                <div class="p-4 text-center border-b border-white">7</div>
                                <div class="p-4 text-center border-b border-white">15</div>
                                <div class="p-4 text-center border-b border-white">50</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Search Engine</div>
                                <div class="p-4 text-center border-b border-white col-span-3">google.com.my</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Language</div>
                                <div class="p-4 text-center border-b border-white col-span-3">1 Language</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Project Duration</div>
                                <div class="p-4 text-center border-b border-white col-span-3">12 Months</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Price (Monthly)</div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="#" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="#" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="#" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content hidden" id="planning-strategy">
                <div class="bg-opacity-90 p-6 rounded-xl max-w-4xl mx-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="overflow-x-auto">
                        <div class="min-w-[800px] border border-white rounded-lg overflow-hidden">
                            <!-- Table Header -->
                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 font-semibold border-b border-white">Package Type</div>
                                <div class="p-4 font-semibold text-center border-b border-white">Standard</div>
                                <div class="p-4 font-semibold text-center border-b border-white">Business</div>
                                <div class="p-4 font-semibold text-center border-b border-white text-yellow-400">Premium
                                </div>
                            </div>

                            <!-- Table Rows based on your image -->
                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Requirements & Targeting Consultation</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Keywords Research & Analysis</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Competitors Analysis</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Price (Monthly)</div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="{{route('contact')}}" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="{{route('contact')}}" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="{{route('contact')}}" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content hidden" id="action-optimization">
                <div class="bg-opacity-90 p-6 rounded-xl max-w-4xl mx-auto" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="overflow-x-auto">
                        <div class="min-w-[800px] border border-white rounded-lg overflow-hidden">
                            <!-- Table Header -->
                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 font-semibold border-b border-white">Content Writing And Optimization</div>
                                <div class="p-4 font-semibold text-center border-b border-white">Up To 5 Pages</div>
                                <div class="p-4 font-semibold text-center border-b border-white">Up To 5 Pages</div>
                                <div class="p-4 font-semibold text-center border-b border-white text-yellow-400">Up To 10 Pages</div>
                            </div>

                            <!-- Sample data for the Action and Optimization tab -->
                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">On-Page Optimization</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Backlink Building Management</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Monthly Report</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Quarterly Analysis Report</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                                <div class="p-4 text-center border-b border-white">✓</div>
                            </div>

                            <div class="grid grid-cols-4 text-white">
                                <div class="p-4 border-b border-white">Price (Monthly)</div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="{{route('contact')}}" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="{{route('contact')}}" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                                <div class="p-4 text-center border-b border-white">
                                    <a href="{{route('contact')}}" class="hover:underline">
                                        Get-Quotation
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        // accordian
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

    <script>
        //tab-btn
        document.addEventListener('DOMContentLoaded', function() {
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all buttons
                    tabBtns.forEach(btn => {
                        btn.classList.remove('active');
                        btn.classList.remove('bg-red-700');
                        btn.classList.add('hover:bg-red-800');
                    });

                    // Add active class to clicked button
                    this.classList.add('active');
                    this.classList.add('bg-red-700');
                    this.classList.remove('hover:bg-red-800');

                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Show the selected tab content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.remove('hidden');
                });
            });
        });
    </script>
@endsection
