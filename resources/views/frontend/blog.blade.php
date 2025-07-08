@extends('frontend.layouts.app')

@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'blog')->first();
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
        <link rel="canonical" href="https://www.blackrevo.com/blog">
    @endif

@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center pt-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    INSIGHT AND INNOVATIONS
                </h1>

                <div class="py-10"
                    style="background-image: url('{{ asset('assets/images/energy-preview.png') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 30%;">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                        data-aos="zoom-in" data-aos-duration="1000">
                        Discover Your Digital Potential with Professional SEO Services in Malaysia
                    </h2>
                    <p class="text-lg md:text-xl mb-12 mx-auto text-white" data-aos="zoom-in" data-aos-duration="1000">
                        Explore actionable insights, proven SEO strategies, and web design trends that make a difference
                        from
                        BlackRevo – your trusted partner in growing a strong and results-driven digital presence.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="article-gradient min-h-screen items-center justify-center py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-20">
            <div class="mb-16 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">FEATURED BLOGS
                </h2>
                <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-xl" data-aos="zoom-in" data-aos-duration="1000">
                    Stay informed with our latest insights on
                    SEO, web design, and development to achieve digital success.</p>
            </div>
            <div class="swiper mySwiper" data-aos="zoom-in" data-aos-duration="1000">
                <div class="swiper-wrapper w-max">
                    @foreach ($featuredBlogs as $blog)
                        <div class="swiper-slide mb-3">
                            <div>
                                <div class="cursor-pointer group w-full h-64 bg-cover bg-center rounded-xl border border-gray-300 hover:border-red-600 hover:shadow-sm slide_active:border-red-600 overflow-hidden transition-all duration-500"
                                    style="background-image: url('{{ asset($blog->image_url) }}')"
                                    onclick="window.location.href='{{ route('individual.blog', ['slug' => $blog->slug]) }}'">
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{ route('individual.blog', ['slug' => $blog->slug]) }}">
                                        <h3 class="cursor-pointer text-xl font-semibold text-white">{{ $blog->title }}
                                        </h3>
                                        @if ($blog->author)
                                            <p class="text-white text-center"><span
                                                    class="font-bold">{{ $blog->author }}</span> -
                                                {{ date('F d, Y', strtotime($blog->uploaded_date)) }}</p>
                                        @else
                                            <p class="text-white text-center">
                                                {{ date('F d, Y', strtotime($blog->uploaded_date)) }}</p>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>


        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-20">
            <div class="mb-16 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">All BLOGS
                </h2>
                <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-3xl" data-aos="zoom-in"
                    data-aos-duration="1000">Explore the latest trends and insights –
                    backed by our expertise in SEO, web development, and digital marketing to help you stay one step ahead.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="zoom-in" data-aos-duration="1000">
                @foreach ($blogs as $blog)
                    <div>
                        <div class="cursor-pointer group w-full h-64 bg-cover bg-center rounded-xl cursor-pointer border border-gray-300 hover:border-red-600 hover:shadow-sm slide_active:border-red-600 overflow-hidden transition-all duration-500"
                            style="background-image: url('{{ asset($blog->image_url) }}')"
                            onclick="window.location.href='{{ route('individual.blog', ['slug' => $blog->slug]) }}'">
                        </div>
                        <div class="mt-4 text-center">
                            <a href="{{ route('individual.blog', ['slug' => $blog->slug]) }}">
                                <h3 class="cursor-pointer text-xl font-semibold text-white">{{ $blog->title }}</h3>
                                @if ($blog->author)
                                    <p class="text-white text-center"><span class="font-bold">{{ $blog->author }}</span> -
                                        {{ date('F d, Y', strtotime($blog->uploaded_date)) }}</p>
                                @else
                                    <p class="text-white text-center">{{ date('F d, Y', strtotime($blog->uploaded_date)) }}
                                    </p>
                                @endif
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
             {{ $blogs->links() }}
        </div>
    </section>

    <section class="article-gradient py-12 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold mb-4" data-aos="zoom-in-up" data-aos-duration="1000">
                Rank 1st Page with Professional Google SEO Service Provider in Malaysia
            </h2>

            <p class="text-gray-300 max-w-4xl mx-auto mb-8 text-sm md:text-base" data-aos="zoom-in"
                data-aos-duration="1000">
                BlackRevo isn’t just your other typical marketing company in Malaysia, we are your trusted partner in
                transforming your businesses. With years of experience, a proven track record, and a commitment to
                excellence, we have helped businesses achieve their goals online. Our SEO marketing agency ensures that
                every aspect of your campaign aligns with Google’s best practices and algorithm while delivering value to
                your audience.
            </p>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
        .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
            width: 16px !important;
            height: 4px !important;
            border-radius: 5px !important;
            margin: 0 6px !important;
            background-color: white;
        }

        .swiper-pagination {
            bottom: 2px !important;
        }

        .swiper-wrapper {
            height: max-content !important;
            width: max-content !important;
            padding-bottom: 64px;
        }

        .swiper-pagination-bullet-active {
            background: red !important;
        }

        /* .swiper-slide.swiper-slide-active>.slide_active\:border-indigo-600 {
                                                        --tw-border-opacity: 1;
                                                        border-color: rgb(79 70 229 / var(--tw-border-opacity));
                                                    } */

        .swiper-slide.swiper-slide-active>.group .slide_active\:text-gray-800 {
            ---tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
        }
    </style>
@endsection

@section('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 32,
            loop: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 32,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 32,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 32,
                },
            },
        });
    </script>
@endsection
