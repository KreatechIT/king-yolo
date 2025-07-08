<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WJ2NX4GH');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon-white.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .preloader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }

        .loader {
            --size: 250px;
            --duration: 2s;
            --logo-color: grey;
            --background: linear-gradient(0deg,
                    rgba(50, 50, 50, 0.2) 0%,
                    rgba(100, 100, 100, 0.2) 100%);
            height: var(--size);
            aspect-ratio: 1;
            position: relative;
        }

        .loader .box {
            position: absolute;
            background: rgba(100, 100, 100, 0.15);
            background: var(--background);
            border-radius: 50%;
            border-top: 1px solid rgba(100, 100, 100, 1);
            box-shadow: rgba(0, 0, 0, 0.3) 0px 10px 10px -0px;
            backdrop-filter: blur(5px);
            animation: ripple var(--duration) infinite ease-in-out;
        }

        .loader .box:nth-child(1) {
            inset: 40%;
            z-index: 99;
        }

        .loader .box:nth-child(2) {
            inset: 30%;
            z-index: 98;
            border-color: rgba(100, 100, 100, 0.8);
            animation-delay: 0.2s;
        }

        .loader .box:nth-child(3) {
            inset: 20%;
            z-index: 97;
            border-color: rgba(100, 100, 100, 0.6);
            animation-delay: 0.4s;
        }

        .loader .box:nth-child(4) {
            inset: 10%;
            z-index: 96;
            border-color: rgba(100, 100, 100, 0.4);
            animation-delay: 0.6s;
        }

        .loader .box:nth-child(5) {
            inset: 0%;
            z-index: 95;
            border-color: rgba(100, 100, 100, 0.2);
            animation-delay: 0.8s;
        }

        .loader .logo {
            position: absolute;
            inset: 0;
            display: grid;
            place-content: center;
            padding: 30%;
        }

        .loader .logo svg {
            fill: var(--logo-color);
            width: 100%;
            animation: color-change var(--duration) infinite ease-in-out;
        }

        @keyframes ripple {
            0% {
                transform: scale(1);
                box-shadow: rgba(0, 0, 0, 0.3) 0px 10px 10px -0px;
            }

            50% {
                transform: scale(1.3);
                box-shadow: rgba(0, 0, 0, 0.3) 0px 30px 20px -0px;
            }

            100% {
                transform: scale(1);
                box-shadow: rgba(0, 0, 0, 0.3) 0px 10px 10px -0px;
            }
        }

        @keyframes color-change {
            0% {
                fill: var(--logo-color);
            }

            50% {
                fill: white;
            }

            100% {
                fill: var(--logo-color);
            }
        }
    </style>

    <!-- AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')

    @if (Route::currentRouteName() !== 'individual.blog')
        <!-- Structured Data: Organization -->
        <script type="application/ld+json">
              {
                "@context": "https://schema.org",
                "@type": "Organization",
                "image": "https://www.blackrevo.com/favicon.ico",
                "url": "https://www.blackrevo.com/",
                "sameAs": ["https://www.blackrevo.com/", "https://www.blackrevo.com/"],
                "logo": "",
                "name": "Top Online Marketing Agency for SEO & Web Development in Malaysia",
                "description": "We are the best digital marketing agency in Malaysia to achieve measurable results in our SEO, social media marketing, and website development & design services.",
                "email": "legal@blackrevo.com",
                "telephone": "+6011-54555822",
                "address": {
                  "@type": "PostalAddress",
                  "streetAddress": "B-02-23A & B02-25 Dataran Cascades",
                  "addressLocality": "Petaling Jaya",
                  "addressCountry": "Malaysia",
                  "addressRegion": "Selangor",
                  "postalCode": "47810"
                },
                "vatID": "FR12345678901",
                "iso6523Code": "0199:724500PMK2A2M1SQQ228"
              }
          </script>

        <!-- Structured Data: BreadcrumbList -->
        <script type="application/ld+json">
              {
                "@context": "http://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [
                  {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home Page",
                    "item": "https://www.blackrevo.com/"
                  },
                  {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "SEO Services",
                    "item": "https://www.blackrevo.com/seo-malaysia"
                  },
                  {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Web Services",
                    "item": "https://www.blackrevo.com/web-design-development"
                  }
                ]
              }
          </script>

        <!-- Structured Data: FAQ -->
        <script type="application/ld+json">
              {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [
                  {
                    "@type": "Question",
                    "name": "What makes BlackRevo different from other digital marketing companies in Malaysia?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "We are not just limited by our KPIs – we are more likely to commit more and exceed them to deliver exceptional value and measurable results for your business."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Do you offer ongoing support after the website is launched?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Yes! We provide ongoing maintenance, updates, and support to ensure that your website remains secure and optimized for performance."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "Will my website be mobile-friendly?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Absolutely. All websites we design are fully responsive and optimized for SEO performance across all devices."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "What industries do you specialize in?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "We work with businesses across various industries. Some of these are e-commerce, education, healthcare, other professional services, and etc."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "How much do your services cost?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Pricing is totally dependent on the scope of your project and specific goals. We offer personalized quotes after understanding your business needs and goals during a consultation."
                    }
                  },
                  {
                    "@type": "Question",
                    "name": "What if I’m not satisfied with the results?",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "Your satisfaction is our priority. We continuously monitor and adjust our strategies to ensure we meet your goals. If adjustments are needed, we are committed to making it right."
                    }
                  }
                ]
              }
          </script>
    @endif

    @yield('schema')

</head>

<body class="font-vollkorn bg-black">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJ2NX4GH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Preloader -->
    <div class="preloader-container hero-gradient" id="preloader">
        <div class="loader">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
    </div>

    <!-- Navigation Bar -->
    @include('frontend.layouts.navbar')

    <!-- Main Content -->
    @yield('content')

    <!-- SEO Call to Action Section -->
    @if (Route::currentRouteName() !== 'career')
        <x-frontend.seo-section />
    @endif

    <script>
        // Script to hide the preloader after page load
        window.addEventListener('load', function() {
            // Allow a slight delay to ensure animations are visible
            setTimeout(function() {
                // Fade out the preloader
                document.getElementById('preloader').style.opacity = '0';

                // After transition completes, hide preloader and show content
                setTimeout(function() {
                    document.getElementById('preloader').style.display = 'none';
                    document.getElementById('main-content').style.display = 'block';
                }, 500);
            }, 800); // Show loader for at least 800ms for better UX
        });
    </script>

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    @yield('scripts')

</body>

</html>
