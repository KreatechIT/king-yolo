@push('title')
    About Us | KingAutomation Smart Systems Experts
@endpush
@push('meta_description')
    Discover KingAutomation | Innovators in smart automation solutions for businesses across Malaysia, delivering efficiency
    through technology and integration.
@endpush

@push('canonical')
    <link rel="canonical" href="https://kingyolo.com/about" />
@endpush
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
                        <span class="text-primary-gold">Digital Excellence with KingYolo</span>
                    </h1>
                    <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up"
                        data-aos-delay="200">
                        KingYolo is a unified digital solutions platform helping businesses grow through automation,
                        custom web development, and performance-driven marketing.
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="mb-20">
                    <h2 class="font-inter text-3xl text-center sm:text-4xl lg:text-5xl font-bold text-white mb-6" data-aos="fade-up"
                        data-aos-delay="100">
                        We Provide
                    </h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- KingBot -->
                        <div class="glass-effect rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                                <!-- Optional: Add an icon here -->
                            </div>
                            <h3 class="font-inter text-2xl font-bold text-white mb-4">KingBot</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Automate routine financial operations like bank transfers, real-time transaction
                                monitoring,
                                and mobile approvals. KingBot reduces manual workload, boosts security, and integrates
                                seamlessly with back-office systems.
                            </p>
                        </div>

                        <!-- KingTech -->
                        <div class="glass-effect rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-primary-gold to-yellow-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                                <!-- Optional: Add an icon here -->
                            </div>
                            <h3 class="font-inter text-2xl font-bold text-white mb-4">KingTech</h3>
                            <p class="text-gray-300 leading-relaxed">
                                As a trusted website development agency, KingTech builds secure, high-performance
                                websites
                                tailored to your business goals. Our custom website development services include
                                seamless
                                system integration and responsive UI/UX design.
                            </p>
                        </div>

                        <!-- KingMedia -->
                        <div class="glass-effect rounded-2xl p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6 mx-auto">
                                <!-- Optional: Add an icon here -->
                            </div>
                            <h3 class="font-inter text-2xl font-bold text-white mb-4">KingMedia</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Grow your brand with targeted digital marketing. KingMedia specializes in SEO services,
                                Google SEM, social media marketing, and content strategies built to drive traffic,
                                engagement, and conversions.
                            </p>
                        </div>
                    </div>

                    <!-- Impact Statement -->
                    <div class="text-center mt-10" data-aos="fade-up" data-aos-delay="400">
                        <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed">
                            With clients across industries and over 500 businesses served globally, KingYolo helps
                            organizations reduce manual work, increase visibility, and integrate technology into their
                            daily
                            operations.
                        </p>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="hero-stats rounded-2xl p-8 mb-16" data-aos="fade-up" data-aos-delay="300">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        @foreach ($counts as $title => $value)
                            <div class="text-center">
                                <div class="text-4xl font-bold text-primary-gold mb-2">
                                    {{ $value }}
                                </div>
                                <div class="text-gray-300">{{ $title }}</div>
                            </div>
                        @endforeach
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
                            {{ $mission }}
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
                            {{ $vission }}
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
                                            <h3 class="text-xl font-bold text-white mb-2">{{ $item->title }}</h3>
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

                @php
                    $colorMap = [
                        'Innovation' => 'from-blue-500 to-purple-600',
                        'Excellence' => 'from-primary-gold to-yellow-600',
                        'Integrity' => 'from-green-500 to-emerald-600',
                        'Collaboration' => 'from-orange-500 to-red-600',
                        'Security' => 'from-purple-500 to-pink-600',
                        'Customer Focus' => 'from-teal-500 to-cyan-600',
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($values as $index => $value)
                        <div class="value-card rounded-2xl p-8 text-center" data-aos="fade-up"
                            data-aos-delay="{{ 100 + $index * 100 }}">
                            <div
                                class="w-16 h-16 bg-gradient-to-br {{ $colorMap[$value->name] ?? 'from-gray-600 to-gray-800' }} rounded-xl flex items-center justify-center mb-6 mx-auto">
                                <!-- Optional: Add an icon here -->
                            </div>
                            <h3 class="font-inter text-2xl font-bold text-white mb-4">
                                {{ $value->name }}
                            </h3>
                            <p class="text-gray-300">
                                {{ $value->payload }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>
