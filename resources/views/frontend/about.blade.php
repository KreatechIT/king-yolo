@extends('frontend.layouts.app')
@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'about')->first();
    @endphp

    @if ($metaData)
        <title>{{ $metaData->meta_title ?? 'BlackRevo'  }}</title>
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
        <link rel="canonical" href="https://www.blackrevo.com/about">
    @endif
    
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-5xl mx-auto text-center pt-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    Revolutionizing Digital Growth with Purpose-Driven Strategies
                </h1>
                <p class="text-lg md:text-xl text-gray-300 mb-12 max-w-3xl mx-auto" data-aos="zoom-in"
                    data-aos-duration="1000">
                    Powered by the SMART methodology, driven by innovation - we don't follow trends, we create them to spark
                    your brand's evolution.
                </p>
            </div>

            <div class="max-w-5xl mx-auto text-center pt-20">
                <p class="text-lg md:text-xl text-gray-300 mb-12 max-w-7xl mx-auto" data-aos="zoom-in"
                    data-aos-duration="1000">
                    The secret to our clients’ online success is due to our company’s strict adherence and commitment to the
                    SMART methodology – this ensures every strategy is Specific, Measurable, Achievable, Relevant, and
                    Time-bound with a huge emphasis on being detail-oriented. <br>
                    But there’s more to our story than the eye can see – something revolutionary. <br>
                    Our name actually stems from the term “Revolution” to remind us to never settle for the ordinary when we
                    can achieve the extraordinary. Instead, we seek to ignite the spark of change to fuel your brand’s
                    evolution. We’ve also set a goal to transform how businesses connect with their audiences and find new
                    ways to redefine your goalposts for success and opportunities within the digital landscape. <br>
                    This industry has always been about keeping up with trends however, we want to show up differently by
                    setting them. We also want to explore untapped opportunities for greater potential that can drive your
                    business more organic traffic and sales. As a leading online marketing agency in Malaysia, our SEO
                    strategies differ from one client to another. This is because we don’t believe in one-size-fits-all
                    solutions. But, the one thing we never fail to deliver is results. <br>
                    So, are you ready to be part of the revolution?

                </p>
            </div>
        </div>

    </section>
@endsection