<section>
    <div class="premium-gradient">
        <!-- Hero Section -->
        <section class="pt-40 pb-16 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="mb-4 text-primary-gold border rounded-full inline-block px-4 py-1 text-sm border-primary-gold font-semibold"
                        data-aos="fade-up">
                        About KingYolo
                    </div>
                    <h1 class="font-inter text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight" data-aos="fade-up"
                        data-aos-delay="100">
                        Pioneering the Future of
                        <span class="text-primary-gold">Digital Excellence</span>
                    </h1>
                    <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                        data-aos-delay="200">
                        Since our inception, we've been at the forefront of digital
                        transformation, empowering businesses worldwide with cutting-edge
                        automation, payment solutions, and marketing excellence.
                    </p>
                </div>

                <!-- Stats Section -->
                <div class="hero-stats rounded-2xl p-8 mb-16" data-aos="fade-up" data-aos-delay="300">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-primary-gold mb-2">
                                500+
                            </div>
                            <div class="text-gray-300">Happy Clients</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-primary-gold mb-2">50+</div>
                            <div class="text-gray-300">Countries Served</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-primary-gold mb-2">
                                99.9%
                            </div>
                            <div class="text-gray-300">Uptime Guarantee</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-primary-gold mb-2">
                                24/7
                            </div>
                            <div class="text-gray-300">Support Available</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating Elements -->
            <div
                class="absolute top-20 left-10 w-32 h-32 bg-primary-gold opacity-10 rounded-full blur-xl animate-float">
            </div>
            <div
                class="absolute bottom-20 right-10 w-40 h-40 bg-blue-500 opacity-10 rounded-full blur-xl animate-float-delayed">
            </div>
        </section>

        <!-- Mission & Vision Section -->
        <section class="py-10 relative">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Mission -->
                    <div class="glass-effect rounded-2xl p-8" data-aos="fade-right">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-[#d4af37] to-yellow-600 rounded-xl flex items-center justify-center mb-6">
                            <!-- Target Icon SVG -->
                        </div>
                        <h3 class="font-inter text-3xl font-bold text-white mb-4">
                            Our Mission
                        </h3>
                        <p class="text-gray-300 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="glass-effect rounded-2xl p-8" data-aos="fade-left" data-aos-delay="100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                            <!-- Book Icon SVG -->
                        </div>
                        <h3 class="font-inter text-3xl font-bold text-white mb-4">
                            Our Vision
                        </h3>
                        <p class="text-gray-300 leading-relaxed">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Timeline -->
        <section class="py-20 relative overflow-x-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
                <div class="text-center mb-16">
                    <div
                        class="mb-4 text-primary-gold border rounded-full inline-block px-4 py-1 text-sm border-primary-gold font-semibold">
                        Our Journey
                    </div>
                    <h2 class="font-inter text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
                        Company <span class="text-primary-gold">Timeline</span>
                    </h2>
                    <p class="text-base sm:text-lg text-gray-300 max-w-2xl mx-auto">
                        From humble beginnings to global impact, discover the key
                        milestones that shaped our journey.
                    </p>
                </div>

                <!-- Timeline Vertical Line -->
                <div class="relative">
                    <div
                        class="absolute block left-1/2 transform -translate-x-1/2 w-1 h-full bg-primary-gold opacity-20">
                    </div>

                    <!-- Timeline Items -->
                    <div class="space-y-16 md:space-y-24">
                        @if ($timelines)
                            @foreach ($timelines as $key => $item)
                                @php
                                    $isEven = $key % 2 === 0;
                                    $contentAlignment = $isEven ? 'md:flex-row' : 'md:flex-row-reverse';
                                    $textAlignment = $isEven ? 'md:text-right md:pr-8' : 'md:text-left md:pl-8';
                                    $animation = $isEven ? 'fade-right' : 'fade-left';
                                    $spacingDiv = $isEven ? 'md:pl-8' : 'md:pr-8';
                                @endphp

                                <div class="relative flex flex-col {{ $contentAlignment }} items-center md:items-start">
                                    <!-- Timeline Content -->
                                    <div class="w-full md:w-1/2 text-center {{ $textAlignment }}"
                                        data-aos="{{ $animation }}">
                                        <div class="glass-effect rounded-xl p-4 md:p-6 scroll-reveal">
                                            <h3 class="text-2xl font-bold text-white mb-2">{{ $item->title }}</h3>
                                            <p class="text-primary-gold font-semibold mb-3">{{ $item->year }}</p>
                                            <p class="text-gray-300 text-sm sm:text-base">{{ $item->description }}</p>
                                        </div>
                                    </div>

                                    <!-- Timeline Dot -->
                                    <div
                                        class="timeline-dot w-6 h-6 rounded-full bg-primary-gold border-2 border-white absolute md:relative left-1/2 md:left-auto transform -translate-x-1/2 md:translate-x-0 z-10 -mt-3 md:mt-0">
                                    </div>

                                    <!-- Empty Spacing (for layout alignment) -->
                                    <div class="hidden md:block w-1/2 {{ $spacingDiv }}"></div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="py-20 relative">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="mb-4 text-primary-gold border rounded-full inline-block px-4 py-1 text-sm border-primary-gold font-semibold"
                        data-aos="fade-up">
                        Our Values
                    </div>
                    <h2 class="font-inter text-4xl lg:text-5xl font-bold text-white mb-6" data-aos="fade-up"
                        data-aos-delay="100">
                        What <span class="text-primary-gold">Drives Us</span>
                    </h2>
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                        Our core values shape every decision we make and every solution we
                        deliver.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Innovation -->
                    <div class="value-card rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            <!-- Icon SVG -->
                            <!-- ... same SVG ... -->
                        </div>
                        <h3 class="font-inter text-2xl font-bold text-white mb-4">
                            Innovation
                        </h3>
                        <p class="text-gray-300">
                            Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>

                    <!-- Excellence -->
                    <div class="value-card rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-primary-gold to-yellow-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            <!-- Icon SVG -->
                        </div>
                        <h3 class="font-inter text-2xl font-bold text-white mb-4">
                            Excellence
                        </h3>
                        <p class="text-gray-300">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <!-- Integrity -->
                    <div class="value-card rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            <!-- Icon SVG -->
                        </div>
                        <h3 class="font-inter text-2xl font-bold text-white mb-4">
                            Integrity
                        </h3>
                        <p class="text-gray-300">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium.
                        </p>
                    </div>

                    <!-- Collaboration -->
                    <div class="value-card rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            <!-- Icon SVG -->
                        </div>
                        <h3 class="font-inter text-2xl font-bold text-white mb-4">
                            Collaboration
                        </h3>
                        <p class="text-gray-300">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium.
                        </p>
                    </div>

                    <!-- Security -->
                    <div class="value-card rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            <!-- Icon SVG -->
                        </div>
                        <h3 class="font-inter text-2xl font-bold text-white mb-4">
                            Security
                        </h3>
                        <p class="text-gray-300">
                            Excepturi sint occaecati cupiditate non provident, similique
                            sunt in culpa qui officia deserunt.
                        </p>
                    </div>

                    <!-- Customer Focus -->
                    <div class="value-card rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="600">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                            <!-- Icon SVG -->
                        </div>
                        <h3 class="font-inter text-2xl font-bold text-white mb-4">
                            Customer Focus
                        </h3>
                        <p class="text-gray-300">
                            Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
