@extends('frontend.layouts.app')

@section('meta')
    @if ($blog->meta_title != null)
        <title>{{ $metaData->meta_title ?? $blog->title }}</title>
    @endif

    @if ($blog->meta_description != null)
        {!! $blog->meta_description !!}
    @endif
@endsection


@if ($blog->schema_data != null)
    @section('schema')
        {!! $blog->schema_data !!}
    @endsection
@endif


@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center pt-20">

                <div data-aos="zoom-in" data-aos-duration="1000" class="text-white mb-20">
                    <div class="max-w-3xl mx-auto mb-6">
                       <div class="group w-full border border-gray-300 hover:border-red-600 rounded-xl overflow-hidden transition-all duration-500">
                            <img src="{{ asset($blog->image_url) }}"
                                alt="{{ $blog->image_alt ?? 'blog-img' }}"
                                class="w-full h-full object-contain rounded-xl" />
                        </div>
                    </div>
                    <div class="mb-5 text-center md:text-left">
                        <h2 class="text-2xl md:text-4xl font-semibold leading-tight">
                            {{ $blog->title }}
                        </h2>
                        <p class="text-white">
                            @if ($blog->author)
                                By <span class="font-bold">{{ $blog->author }}</span> -
                                {{ date('F d, Y', strtotime($blog->uploaded_date)) }}
                            @else
                                {{ date('F d, Y', strtotime($blog->uploaded_date)) }}
                            @endif
                        </p>
                    </div>
                    <div id="blog-content" class="text-white text-start">
                        {!! str($blog->content)->sanitizeHtml() !!}
                    </div>
                </div>

                <!-- Blog Navigation Buttons -->
                <div class="flex justify-between items-center mt-8 mb-8" data-aos="fade-up" data-aos-duration="800">
                    <a href="{{ route('individual.blog', $prevBlog->slug) }}"
                        class="flex items-center text-white hover:text-gray-300 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        <span>Previous Blog</span>
                    </a>

                    <a href="{{ route('individual.blog', $nextBlog->slug) }}"
                        class="flex items-center text-white hover:text-gray-300 transition-colors">
                        <span>Next Blog</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Other Blogs Section -->
                @if ($latestBlogs->count() > 0)
                    <div class="mt-16 mb-8" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="text-3xl font-semibold text-white mb-8 text-left">Recent Blogs</h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @foreach ($latestBlogs as $blog)
                                <div>
                                    <div class="cursor-pointer group w-full h-64 bg-cover bg-center rounded-xl cursor-pointer border border-gray-300 hover:border-red-600 hover:shadow-sm slide_active:border-red-600 overflow-hidden transition-all duration-500"
                                        style="background-image: url('{{ asset($blog->image_url) }}')"
                                        onclick="window.location.href='{{ route('individual.blog', ['slug' => $blog->slug]) }}'">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="{{ route('individual.blog', ['slug' => $blog->slug]) }}">
                                            <h3 class="cursor-pointer text-xl font-semibold text-white">{{ $blog->title }}
                                            </h3>
                                            <p class="text-white text-center">
                                                {{ date('F d, Y', strtotime($blog->uploaded_date)) }}</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        #blog-content h1,
        #blog-content h2,
        #blog-content h3,
        #blog-content h4,
        #blog-content h5,
        #blog-content h6 {
            text-transform: capitalize !important;
        }
    </style>
@endsection