<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon-white.png') }}" type="image/x-icon">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS CDN -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')

    @yield('schema')

</head>

<body>

    <!-- Navigation Bar -->
    @include('frontend.layouts.navbar')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- Scripts -->
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> --}}

    @yield('scripts')

</body>

</html>
