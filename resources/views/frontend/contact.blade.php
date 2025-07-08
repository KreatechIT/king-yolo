@extends('frontend.layouts.app')


@section('meta')
    @php
        $metaData = \App\Models\MetaData::where('page', 'contact')->first();
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
        <link rel="canonical" href="https://www.blackrevo.com/contact">
    @endif
@endsection


@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center justify-center bg-cover bg-center">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 py-24 text-center mt-20">
            <h1 class="text-2xl md:text-3xl lg:text-5xl font-semibold text-white leading-tight" data-aos="zoom-in-up"
                data-aos-duration="1000">
                Contact with Trusted Experts in <br> SEO and Web Design in Malaysia
            </h1>

            <div class="py-3 mb-3">
                <p class="text-lg md:text-xl mb-12 mx-auto text-white max-w-4xl" data-aos="zoom-in"
                    data-aos-duration="1000">
                    Let Blackrevo become your strategic partner for tailored digital solutions that drive results
                </p>
            </div>

            <!-- Contact Form Inside the Hero Section -->
            <div class="w-full max-w-3xl mx-auto" data-aos="zoom-in" data-aos-duration="1000">

                <!-- Success Message -->
                @if (session('success'))
                    <div class="text-white py-3 px-6 mb-6 rounded-md max-w-3xl" style="background: rgba(255, 0, 0, 0.3);">
                        {{ session('success') }}
                    </div>
                @endif

                <form id="contact-form" onsubmit="return checkCaptcha();" method="POST"
                    action="{{ route('submit.contact') }}">
                    @csrf

                    <!-- Name & Email Fields -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                        <div class="flex flex-col text-left">
                            <label for="name" class="text-white mb-2">Name</label>
                            <input id="name" type="text" name="name"
                                class="bg-gray-300 text-black rounded-none p-3 focus:outline-none" required>
                        </div>
                        <div class="flex flex-col text-left">
                            <label for="phone" class="text-white mb-2">Phone Number</label>
                            <input id="phone" type="text" name="phone"
                                class="bg-gray-300 text-black rounded-none p-3 focus:outline-none" required>
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="flex flex-col text-left mb-6">
                        <label for="message" class="text-white mb-2">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="bg-gray-300 text-black rounded-none p-3 focus:outline-none" required></textarea>
                    </div>

                    {!! NoCaptcha::display(['data-callback' => 'onSubmit']) !!}

                    <!-- Submit Button -->
                    <div class="w-full py-2">
                        <div class="relative w-full inline-block">
                            <button type="submit"
                                class="w-full block cursor-pointer bg-red-900 text-white font-medium text-center px-6 py-2 rounded transition-colors duration-300 hover:bg-red-800"
                                style="background: rgba(255, 0, 0, 0.3);">
                                SUBMIT
                            </button>

                            <!-- Top-left corner -->
                            <div class="absolute top-0 left-0 w-2.5 h-2.5 border-t border-l border-white/50"></div>

                            <!-- Top-right corner -->
                            <div class="absolute top-0 right-0 w-2.5 h-2.5 border-t border-r border-white/50"></div>

                            <!-- Bottom-left corner -->
                            <div class="absolute bottom-0 left-0 w-2.5 h-2.5 border-b border-l border-white/50"></div>

                            <!-- Bottom-right corner -->
                            <div class="absolute bottom-0 right-0 w-2.5 h-2.5 border-b border-r border-white/50"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    {!! NoCaptcha::renderJs() !!}

    <script>
        function checkCaptcha() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                alert("Please complete the reCAPTCHA.");
                return false;
            }
            return true;
        }
    </script>
@endsection
