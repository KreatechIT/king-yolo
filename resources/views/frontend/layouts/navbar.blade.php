<!-- Navbar - Sticky and Transparent -->
<header class="fixed top-0 left-0 w-full z-50 transition-all duration-300" id="navbar">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <nav class="flex items-center justify-between py-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-white font-bold text-xl tracking-tight">
                    <img src="{{ asset('assets/images/blackrevo-logo.png') }}" alt="BLACKREVO" class="h-18">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="text-white hover:text-gray-300 focus:outline-none"
                    id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop menu - now centered -->
            <div class="hidden md:flex flex-1 justify-center items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="nav-link text-white hover:text-gray-300 transition-colors duration-300 text-sm font-medium">Home</a>

                <div class="dropdown relative">
                    <a href="#"
                        class="nav-link-custom text-white hover:text-gray-300 transition-colors duration-300 text-sm font-medium flex items-center">
                        Our Service
                        <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('seo') }}" class="dropdown-item">SEO Services</a>
                        <a href="{{ route('web') }}" class="dropdown-item">Web Development</a>

                    </div>
                </div>

                <a href="{{ route('about') }}"
                    class="nav-link text-white hover:text-gray-300 transition-colors duration-300 text-sm font-medium">About
                    Us</a>

                <a href="{{ route('career') }}"
                    class="nav-link text-white hover:text-gray-300 transition-colors duration-300 text-sm font-medium">Career</a>

                <a href="{{ route('blog') }}" class="nav-link text-white hover:text-gray-300 transition-colors duration-300 text-sm font-medium">Blog</a>
            </div>

            <!-- Contact button at right end -->
            <div class="hidden sm:block">
                <x-frontend.gradient-button text="Contact Us" url="{{ route('contact') }}"></x-frontend.gradient-button>
            </div>

        </nav>
    </div>
</header>

<!-- Mobile Sidebar Menu -->
<div class="md:hidden fixed top-0 right-0 w-0 h-full bg-black bg-opacity-95 z-50 overflow-x-hidden transition-all duration-300 side-menu"
    id="mobile-sidebar">
    <!-- Close button -->
    <div class="flex justify-end p-4">
        <button id="close-sidebar" class="text-white hover:text-gray-300 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile menu links -->
    <div class="px-6 py-4 space-y-6">
        <a href="{{ route('home') }}"
            class="mobile-menu-item block text-white hover:text-gray-300 py-2 text-lg">Home</a>

        <div class="py-2">
            <button class="flex items-center justify-between w-full text-white hover:text-gray-300 text-lg"
                id="mobile-dropdown-button">
                Our Service
                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="hidden ml-4 mt-2 space-y-2" id="mobile-dropdown-menu">
                <a href="{{ route('seo') }}" class="mobile-menu-item block text-white hover:text-gray-300 py-2">SEO
                    Services</a>
                <a href="{{ route('web') }}" class="mobile-menu-item block text-white hover:text-gray-300 py-2">Web
                    Development</a>

            </div>
        </div>

        <a href="{{ route('about') }}" class="mobile-menu-item block text-white hover:text-gray-300 py-2 text-lg">About
            Us</a>
        <a href="{{ route('career') }}"
            class="mobile-menu-item block text-white hover:text-gray-300 py-2 text-lg">Career</a>

        <a href="{{ route('blog') }}" class="mobile-menu-item block text-white hover:text-gray-300 py-2 text-lg">Blog</a>

        <div class="pt-6">
            <x-frontend.gradient-button text="Contact Us" url="{{ route('contact') }}"></x-frontend.gradient-button>
        </div>
    </div>
</div>

<!-- Overlay for mobile menu -->
<div id="menu-overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden"></div>
