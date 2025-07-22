<!-- Navbar -->
<nav class="fixed top-0 w-full z-50 glass-effect">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{route('home')}}">
                    <img src="assets/king-yolo.png" alt="KingYolo logo" class="max-w-60" />
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{route('home')}}" class="nav-link">Home</a>

                <!-- Products & Services with Dropdown -->
                <div class="relative group">
                    <a href="{{route('service')}}" class="nav-link flex items-center">
                        Products & Services
                        <svg class="w-3.5 h-3.5 ml-1.5 mt-0.5 transition-transform group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </a>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute top-full left-0 mt-2 w-48 bg-dark border border-primary-gold rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <a href="{{route('kingbot')}}"
                            class="block px-4 py-3 text-text-light hover:bg-primary-gold hover:text-background-dark transition-colors hover:underline">KingBot</a>
                        <a href="{{route('kingmedia')}}"
                            class="block px-4 py-3 text-text-light hover:bg-primary-gold hover:text-background-dark transition-colors hover:underline">KingMedia</a>
                    </div>
                </div>

                <a href="{{route('about')}}" class="nav-link">About</a>
            </div>

            <!-- Contact Us Button -->
            <div class="hidden md:block">
                <a href="{{route('contact')}}" class="px-6 py-2 rounded-full border glass-effect">Contact Us</a>
            </div>

            <!-- Mobile Hamburger -->
            <button id="hamburger" class="md:hidden relative w-6 h-6 focus:outline-none">
                <span id="hamburger-line-1"
                    class="absolute top-2 left-0 w-7 h-0.5 bg-primary-gold transform transition-all duration-500"></span>
                <span id="hamburger-line-2"
                    class="absolute top-4 left-0 w-7 h-0.5 bg-primary-gold transform transition-all duration-500"></span>
                <span id="hamburger-line-3"
                    class="absolute top-6 left-0 w-5 h-0.5 bg-primary-gold transform transition-all duration-500"></span>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Navigation Menu -->
<div id="mobile-nav"
    class="md:hidden fixed top-16 left-0 w-full bg-dark border-t border-primary-gold transform -translate-y-full transition-transform duration-300 ease-in-out z-40">
    <div class="px-6 py-4 space-y-4">
        <a href="{{route('home')}}" class="block py-2 text-text-light hover:text-primary-gold transition-colors">Home</a>

        <!-- Mobile Products & Services -->
        <div>
            <button id="mobile-services-toggle"
                class="flex items-center justify-between w-full py-2 text-text-light hover:text-primary-gold transition-colors">
                Products & Services
                <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="mobile-services-menu"
                class="ml-4 mt-2 space-y-2 max-h-0 overflow-hidden transition-all duration-300">
                <a href="{{route('kingbot')}}"
                    class="block py-2 text-text-muted hover:text-primary-gold transition-colors">KingBot</a>
                <a href="{{route('kingmedia')}}"
                    class="block py-2 text-text-muted hover:text-primary-gold transition-colors">KingMedia</a>
            </div>
        </div>

        <a href="{{route('about')}}" class="block py-2 text-text-light hover:text-primary-gold transition-colors">About</a>
        <a href="{{route('contact')}}" class="block py-2 rounded-lg mt-4">Contact Us</a>
    </div>
</div>