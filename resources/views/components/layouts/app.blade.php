<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Data -->
    @stack('meta')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/king-yolo.png') }}" type="image/x-icon">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/review-carousel.js', 'resources/js/script.js'])

    <!-- Schema Data -->
    @stack('schema')

    <!-- Styles -->
    @stack('styles')

</head>

<body class="premium-gradient">

    <!-- Header Section -->
    <x-layouts.header />

    @if ($slot->isEmpty())
        <p>
            Empty $slot
        </p>
    @else
        {{ $slot }}
    @endif

    <!-- Footer Section -->
    <x-layouts.footer />

    <!-- AOS Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    </script>

    <!-- Scripts -->
    @stack('scripts')

</body>

</html>
