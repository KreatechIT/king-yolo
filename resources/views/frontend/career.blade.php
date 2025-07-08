@extends('frontend.layouts.app')

@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'career')->first();
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
        <link rel="canonical" href="https://www.blackrevo.com/career">
    @endif

@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24">
            <div class="max-w-7xl mx-auto text-center pt-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    Be Part of the Revolution
                </h1>

                <div class="py-10">
                    <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-4xl" data-aos="zoom-in"
                        data-aos-duration="1000">
                        Pioneering solutions that drive results and transform brands
                    </p>
                </div>
            </div>

            <div class="container mx-auto max-w-3xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-3">
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="conic-gradient w-full h-96 md:w-full md:h-96 rounded-3xl relative flex flex-col items-center justify-center text-center p-5">
                        <span class="text-red-500 text-2xl font-bold absolute top-4 left-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star Image">
                        </span>
                        <span class="text-red-500 text-2xl font-bold absolute top-4 right-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star Image">
                        </span>

                        <div class="max-w-full mx-auto text-center">
                            <img class="w-auto h-25 mx-auto mb-10" src="{{ asset('assets/images/mission.png') }}"
                                alt="mission">
                            <h2 class="text-2xl font-bold text-white my-2">Mission</h2>
                            <p class="text-white text-base leading-relaxed mt-3">
                                Agile innovation, challenge conventional mindset, create win-win digital ecosystems.
                            </p>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000"
                        class="conic-gradient w-full h-96 md:w-full md:h-96 rounded-3xl relative flex flex-col items-center justify-center text-center p-5">
                        <span class="text-red-500 text-2xl font-bold absolute top-4 left-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star Image">
                        </span>
                        <span class="text-red-500 text-2xl font-bold absolute top-4 right-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star Image">
                        </span>

                        <div class="max-w-full mx-auto text-center">
                            <img class="w-auto h-25 mx-auto mb-10" src="{{ asset('assets/images/core-values.png') }}"
                                alt="core-values">
                            <h2 class="text-2xl font-bold text-white my-2">Core Values</h2>
                            <p class="text-white text-base leading-relaxed mt-3">
                                Trustworthy <br>
                                Simple & Direct <br>
                                Growth & Breakthrough
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="article-gradient py-24">
        <div class="container mx-auto max-w-6xl px-4">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8 text-center"
                data-aos="zoom-in-up" data-aos-duration="1000">
                Benefits
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4 sm:px-0">
                <!-- First row: 4 cards -->
                @for ($i = 0; $i < 4; $i++)
                    <div data-aos="zoom-in" data-aos-duration="1000" class="conic-gradient rounded-3xl relative h-full">
                        <div class="flex flex-col h-full p-6">
                            <!-- Stars - positioned consistently -->
                            <span class="absolute top-4 left-4">
                                <img src="{{ asset('assets/images/star.png') }}" alt="Star">
                            </span>
                            <span class="absolute top-4 right-4">
                                <img src="{{ asset('assets/images/star.png') }}" alt="Star">
                            </span>

                            <!-- Icon section - fixed height for consistency -->
                            <div class="flex items-center justify-center h-20 mb-6">
                                <img class="w-auto h-20" src="{{ asset('assets/images/' . $benifits[$i]['image']) }}"
                                    alt="{{ $benifits[$i]['title'] }}">
                            </div>

                            <!-- Title section - fixed height ensures alignment -->
                            <div class="h-16 flex items-center justify-center">
                                <h3 class="text-2xl font-bold text-white text-center">{{ $benifits[$i]['title'] }}</h3>
                            </div>

                            <!-- Text section - grows to fill remaining space -->
                            <div class="flex-grow flex items-center">
                                <p class="text-white text-base leading-relaxed text-center">
                                    {{ $benifits[$i]['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Second row: 2 cards centered -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4 sm:px-0 mt-6">
                <!-- Two centered cards (using md:col-start positioning) -->
                <div data-aos="zoom-in" data-aos-duration="1000"
                    class="conic-gradient rounded-3xl relative h-full md:col-start-2">
                    <div class="flex flex-col h-full p-6">
                        <span class="absolute top-4 left-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star">
                        </span>
                        <span class="absolute top-4 right-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star">
                        </span>

                        <div class="flex items-center justify-center h-20 mb-6">
                            <img class="w-auto h-20" src="{{ asset('assets/images/' . $benifits[4]['image']) }}"
                                alt="{{ $benifits[4]['title'] }}">
                        </div>

                        <div class="h-16 flex items-center justify-center">
                            <h3 class="text-2xl font-bold text-white text-center">{{ $benifits[4]['title'] }}</h3>
                        </div>

                        <div class="flex-grow flex items-center">
                            <p class="text-white text-base leading-relaxed text-center">
                                {{ $benifits[4]['description'] }}
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-duration="1000" class="conic-gradient rounded-3xl relative h-full">
                    <div class="flex flex-col h-full p-6">
                        <span class="absolute top-4 left-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star">
                        </span>
                        <span class="absolute top-4 right-4">
                            <img src="{{ asset('assets/images/star.png') }}" alt="Star">
                        </span>

                        <div class="flex items-center justify-center h-20 mb-6">
                            <img class="w-auto h-20" src="{{ asset('assets/images/' . $benifits[5]['image']) }}"
                                alt="{{ $benifits[5]['title'] }}">
                        </div>

                        <div class="h-16 flex items-center justify-center">
                            <h3 class="text-2xl font-bold text-white text-center">{{ $benifits[5]['title'] }}</h3>
                        </div>

                        <div class="flex-grow flex items-center">
                            <p class="text-white text-base leading-relaxed text-center">
                                {{ $benifits[5]['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="article-gradient py-24 flex justify-center">
        <div class="max-w-6xl w-full px-4 md:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-8 text-center"
                data-aos="zoom-in-up" data-aos-duration="1000">
                Job Openings
            </h2>
            <div class="flex flex-col lg:flex-row gap-6 items-start mb-20">

                <!-- LEFT PANEL - Made scrollable with responsive heights -->
                <div id="job-list-container" class="w-full lg:w-1/3" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div id="job-list" class="space-y-4 overflow-y-auto h-auto pr-2">
                        @if ($openings)
                            @foreach ($openings as $key => $job)
                                <button data-target="detail-{{ $key }}"
                                    class="w-full cursor-pointer flex flex-col sm:flex-row justify-between items-start sm:items-center px-4 py-3 rounded-lg bg-gray-800 text-white font-medium transition
                                border-2
                                {{ $key === 0 ? 'border-red-600 bg-opacity-100' : 'border-transparent bg-opacity-40 hover:bg-opacity-60' }}">
                                    <span class="mb-1 sm:mb-0">{{ $job->title }}</span>
                                    <span class="text-gray-400 text-sm">{{ $job->location }}</span>
                                </button>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- RIGHT PANEL - Made scrollable with responsive heights -->
                <div id="job-details-container" class="flex-1 w-full" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div id="job-details" class="overflow-y-auto pr-2" style="height: 600px;">
                        @if ($openings)
                            @foreach ($openings as $key => $job)
                                <div id="detail-{{ $key }}"
                                    class="bg-gray-800 bg-opacity-60 p-6 rounded-lg space-y-4 text-white
                           {{ $key === 0 ? 'block' : 'hidden' }}">
                                    <div
                                        class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
                                        <h2 class="text-xl md:text-2xl font-semibold">{{ $job->title }}</h2>
                                        <span class="text-gray-400">{{ $job->location }}</span>
                                    </div>
                                    <p class="text-gray-300 italic">{{ $job->designation }}</p>
                                    <div class="text-gray-200">
                                        {!! str($job->description)->sanitizeHtml() !!}
                                    </div>
                                    <a href="{{ $job->link ? (Str::startsWith($job->link, ['http://', 'https://']) ? $job->link : 'https://' . $job->link) : '#' }}"
                                        target="_blank">

                                        <div class="w-full">
                                            <div class="relative w-full inline-block">
                                                <button type="submit"
                                                    class="cursor-pointer w-full block bg-red-900 text-white font-medium text-center px-6 py-2 rounded transition-colors duration-300 hover:bg-red-800"
                                                    style="background: rgba(255, 0, 0, 0.3);">
                                                    APPLY NOW
                                                </button>

                                                <!-- Top-left corner -->
                                                <div
                                                    class="absolute top-0 left-0 w-2.5 h-2.5 border-t border-l border-white/50">
                                                </div>

                                                <!-- Top-right corner -->
                                                <div
                                                    class="absolute top-0 right-0 w-2.5 h-2.5 border-t border-r border-white/50">
                                                </div>

                                                <!-- Bottom-left corner -->
                                                <div
                                                    class="absolute bottom-0 left-0 w-2.5 h-2.5 border-b border-l border-white/50">
                                                </div>

                                                <!-- Bottom-right corner -->
                                                <div
                                                    class="absolute bottom-0 right-0 w-2.5 h-2.5 border-b border-r border-white/50">
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .conic-gradient {
            background:
                conic-gradient(at center,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(194, 1, 1, 0.6) 40%,
                    rgba(194, 1, 1, 0.4) 60%,
                    rgba(0, 0, 0, 0) 100%),
                rgba(255, 255, 255, 0.1);
        }

        /* Custom scrollbar styles */
        #job-list::-webkit-scrollbar,
        #job-details::-webkit-scrollbar {
            width: 6px;
        }

        #job-list::-webkit-scrollbar-track,
        #job-details::-webkit-scrollbar-track {
            background: rgba(75, 85, 99, 0.3);
            border-radius: 10px;
        }

        #job-list::-webkit-scrollbar-thumb,
        #job-details::-webkit-scrollbar-thumb {
            background: rgba(156, 163, 175, 0.5);
            border-radius: 10px;
        }

        #job-list::-webkit-scrollbar-thumb:hover,
        #job-details::-webkit-scrollbar-thumb:hover {
            background: rgba(156, 163, 175, 0.8);
        }

        /* Support for Firefox scrollbar */
        #job-list,
        #job-details {
            scrollbar-width: thin;
            scrollbar-color: rgba(156, 163, 175, 0.5) rgba(75, 85, 99, 0.3);
        }

        /* Adjust word-wrapping for mobile */
        @media (max-width: 640px) {

            #job-list button span,
            #job-details h2,
            #job-details .text-gray-400 {
                word-break: break-word;
            }
        }
    </style>
@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('#job-list button');
            const panels = document.querySelectorAll('#job-details > div');

            // Set initial heights based on screen size
            adjustHeightsForScreenSize();

            // Re-adjust heights when window is resized
            window.addEventListener('resize', adjustHeightsForScreenSize);

            function adjustHeightsForScreenSize() {
                // On small screens (mobile), make job-details taller if it's the active panel
                if (window.innerWidth < 1024) { // Below lg breakpoint
                    // Show details panel and hide job list on small screens when a job is selected
                    const activePanel = document.querySelector('#job-details > div:not(.hidden)');
                    if (activePanel && window.innerWidth < 768) {
                        document.getElementById('job-list-container').classList.add('mb-4');
                    }
                }
            }

            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetId = btn.dataset.target;

                    // show / hide panels
                    panels.forEach(panel => {
                        panel.classList.toggle('hidden', panel.id !== targetId);
                    });

                    // toggle borders & opacity on buttons
                    buttons.forEach(b => {
                        b.classList.remove('border-red-600', 'bg-opacity-100');
                        b.classList.add('border-transparent', 'bg-opacity-40');
                    });
                    btn.classList.remove('border-transparent', 'bg-opacity-40');
                    btn.classList.add('border-red-600', 'bg-opacity-100');

                    // Scroll to top of the selected panel
                    document.getElementById('job-details').scrollTop = 0;

                    // On mobile, scroll to the details section when selecting a job
                    if (window.innerWidth < 768) {
                        document.getElementById('job-details-container').scrollIntoView({
                            behavior: 'smooth'
                        });
                    }

                    // Re-adjust heights after selection
                    adjustHeightsForScreenSize();
                });
            });
        });
    </script>
@endsection
