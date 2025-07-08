@extends('frontend.layouts.app')

@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'terms-conditions')->first();
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
        <link rel="canonical" href="https://www.blackrevo.com/terms-conditions">

    @endif
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    TERMS AND CONDITIONS
                </h1>

                <div class="py-3">
                    <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-4xl" data-aos="zoom-in"
                        data-aos-duration="1000">
                        Welcome to BlackRevo’s terms and conditions page. These Terms & Conditions ("Terms") govern your use
                        of our website, services, and any related content provided by BlackRevo. By accessing or using our
                        platform, you agree to comply with these Terms. Please read them carefully to understand your rights
                        and responsibilities.
                    </p>
                </div>
            </div>


            <div class="text-white overflow-hidden w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="zoom-in" data-aos-duration="1000">
                {!! str($content->payload)->sanitizeHtml() !!}
            </div>

        </div>
    </section>
@endsection