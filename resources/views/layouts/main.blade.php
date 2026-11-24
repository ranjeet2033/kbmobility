<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $rawTitle = html_entity_decode(trim($__env->yieldContent('title', 'Electric Vehicle Services & Sales')), ENT_QUOTES, 'UTF-8');
        $fullTitle = str_contains($rawTitle, 'KB Mobility') ? $rawTitle : $rawTitle . ' | KB Mobility';
    @endphp
    <title>{{ $fullTitle }}</title>

    <!-- Favicons & App Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    <!-- Core SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'KB Mobility - Buy electric scooters, e-rickshaws, 2W/3W/4W lithium batteries & OEM spare parts in New Delhi. Expert EV battery repair, motor & controller service in Uttam Nagar.')">
    <meta name="keywords" content="@yield('meta_keywords', 'electric scooter Delhi, EV repair Uttam Nagar, e-rickshaw Delhi, 2W lithium battery, 3W e-rickshaw lithium battery, 4W EV lithium battery, LiFePO4 battery Delhi, EV battery repair, BLDC motor repair, electric vehicle service, KB Mobility, buy electric scooter New Delhi, EV spare parts 110059')">
    <meta name="author" content="KB Mobility">
    <meta name="theme-color" content="#0284C7">
    <meta name="msapplication-TileColor" content="#0284C7">

    <!-- Geo Meta for Local SEO -->
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="New Delhi">
    <meta name="geo.position" content="28.6258;77.0543">
    <meta name="ICBM" content="28.6258, 77.0543">

    <!-- Advanced Technical SEO -->
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">
    
    <!-- Open Graph (Facebook / LinkedIn / WhatsApp) -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $fullTitle }}">
    <meta property="og:description" content="@yield('meta_description', 'KB Mobility - Premium Electric Vehicle showroom & service center offering 2W/3W/4W lithium batteries, scooter servicing, and OEM spare parts in Uttam Nagar, New Delhi.')">
    <meta property="og:image" content="@yield('og_image', asset('images/kb-showroom-1.jpg'))">
    <meta property="og:image:alt" content="@yield('og_image_alt', 'KB Mobility Electric Vehicles & Lithium Batteries Showroom in New Delhi')">
    <meta property="og:site_name" content="KB Mobility">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $fullTitle }}">
    <meta name="twitter:description" content="@yield('meta_description', 'KB Mobility - Premium Electric Vehicle showroom & service center offering 2W/3W/4W lithium batteries, scooter servicing, and OEM spare parts in Uttam Nagar, New Delhi.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/kb-showroom-1.jpg'))">
    <meta name="twitter:image:alt" content="@yield('og_image_alt', 'KB Mobility Electric Vehicles & Lithium Batteries Showroom in New Delhi')">
    
    <!-- Schema Markup - LocalBusiness + AutoRepair -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": ["LocalBusiness", "AutoRepair"],
      "name": "KB Mobility",
      "alternateName": "KB Mobility Electric Vehicles",
      "description": "New Delhi's trusted electric vehicle dealer and service center offering EV scooters, e-rickshaws, 2W/3W/4W LiFePO4 lithium batteries, battery repair, controller repair, and OEM spare parts in Uttam Nagar West.",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/kb-symbol.png') }}",
      "image": "{{ asset('images/kb-showroom-1.jpg') }}",
      "telephone": "+91-8808363701",
      "email": "kbmobility65@gmail.com",
      "priceRange": "₹₹",
      "currenciesAccepted": "INR",
      "paymentAccepted": "Cash, UPI, Bank Transfer",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Hastsal Village, Near Hanuman Dharam Kanta, Uttam Nagar West",
        "addressLocality": "New Delhi",
        "addressRegion": "Delhi",
        "postalCode": "110059",
        "addressCountry": "IN"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": "28.6258",
        "longitude": "77.0543"
      },
      "openingHoursSpecification": [
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
          "opens": "09:00",
          "closes": "19:00"
        }
      ],
      "hasMap": "https://www.google.com/maps/place/KB+Mobility/@28.6287093,77.0567287,17z",
      "sameAs": [
        "https://wa.me/918808363701"
      ],
      "areaServed": {
        "@@type": "GeoCircle",
        "geoMidpoint": {
          "@@type": "GeoCoordinates",
          "latitude": "28.6258",
          "longitude": "77.0543"
        },
        "geoRadius": "50000"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "WebSite",
      "name": "KB Mobility",
      "url": "{{ url('/') }}"
    }
    </script>
    @stack('schema')
    
    <!-- Google Fonts: Sora & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for Mobile Menu -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Pre-compiled Tailwind & App Assets (with safe fallback) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @endif

    <!-- KB Mobility Electric Navy & Cyan-Blue Theme -->
    <link rel="stylesheet" href="{{ asset('css/kb-theme.css') }}">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 flex flex-col min-h-screen">
    <!-- Top Scroll Progress Bar -->
    <div id="kb-scroll-progress"></div>
    <!-- Top Bar -->
    <div class="kb-navy-surface text-gray-300 py-2 text-xs font-medium tracking-wide">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <!-- Hidden on mobile, shown on sm+ -->
            <div class="hidden sm:flex items-center">
                <span class="text-gray-400">Welcome to KB Mobility</span>
            </div>
            <div class="flex items-center justify-center sm:justify-end w-full sm:w-auto space-x-4 sm:space-x-6">
                <!-- Email: hidden on mobile -->
                <a href="mailto:kbmobility65@gmail.com" class="hidden sm:flex items-center hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-[#4CAF50]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    kbmobility65@gmail.com
                </a>
                <!-- Phone: always visible -->
                <a href="tel:+918808363701" class="flex items-center hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-[#4CAF50]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    +91 8808363701
                </a>
            </div>
        </div>
    </div>

    <!-- Desktop Header -->
    <header class="hidden md:block bg-white py-3 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-3 items-center">
            <!-- Left Space -->
            <div class="col-span-1 hidden md:block">
            </div>
            
            <!-- Logo Center (Larger Logo with Brand Name underneath) -->
            <div class="col-span-3 md:col-span-1 flex justify-center">
                <a href="{{ route('home') }}" class="flex flex-col items-center text-center group py-1">
                    <img src="{{ asset('images/kb-symbol.png') }}" alt="KB Mobility Logo" class="h-16 sm:h-20 w-auto object-contain transition-transform duration-300 group-hover:scale-105 drop-shadow-sm">
                    <span class="text-gray-900 tracking-tight text-2xl sm:text-3xl font-extrabold font-heading mt-1 leading-none">KB <span class="text-[#4CAF50]">Mobility</span></span>
                    <span class="text-[10px] text-gray-500 font-semibold tracking-widest uppercase mt-0.5">Electric Mobility Solutions</span>
                </a>
            </div>

            <!-- Action Right -->
            <div class="col-span-1 hidden md:flex justify-end">
                <a href="{{ route('products') }}" class="bg-gradient-to-r from-[#2ecc71] to-[#27ae60] hover:from-[#27ae60] hover:to-[#2ecc71] text-white px-6 py-2.5 rounded-full shadow-[0_8px_15px_rgba(46,204,113,0.3)] font-medium text-sm transition-all transform hover:-translate-y-0.5 flex items-center">
                    Shop For Scooty
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav x-data="{ mobileMenuOpen: false }" class="bg-white border-b border-gray-100 sticky top-0 z-40 shadow-sm backdrop-blur-md bg-white/90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Mobile Compact Header + Nav Bar -->
            <div class="flex md:hidden justify-between items-center h-16">
                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle Menu" class="text-gray-700 hover:text-[#4CAF50] focus:outline-none p-2 rounded-lg bg-gray-50 border border-gray-100">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" x-cloak style="display: none;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <!-- Mobile Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('images/kb-symbol.png') }}" alt="KB Mobility Logo" class="h-10 w-auto object-contain">
                    <div class="flex flex-col leading-none">
                        <span class="text-gray-900 text-lg font-extrabold font-heading tracking-tight">KB <span class="text-[#4CAF50]">Mobility</span></span>
                        <span class="text-[10px] text-gray-500 font-semibold uppercase tracking-wide">Uttam Nagar, Delhi</span>
                    </div>
                </a>

                <!-- Mobile Quick Action Button -->
                <a href="{{ route('products') }}" class="bg-[#4CAF50] hover:bg-[#43a047] text-white px-3 py-2 rounded-full text-xs font-bold shadow-sm flex items-center">
                    Scooty
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Desktop Nav Bar -->
            <div class="hidden md:flex justify-center h-14 items-center">
                <div class="flex space-x-1 items-center font-medium text-[15px]">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-[#4CAF50] bg-green-50' : 'text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50' }} px-4 py-2 rounded-md transition-colors">Home</a>
                    <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'text-[#4CAF50] bg-green-50' : 'text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50' }} px-4 py-2 rounded-md transition-colors">Products</a>
                    <a href="{{ route('home') }}#battery" class="text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50 px-4 py-2 rounded-md transition-colors">Batteries</a>
                    <a href="{{ route('erickshaw') }}" class="{{ request()->routeIs('erickshaw') ? 'text-[#4CAF50] bg-green-50' : 'text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50' }} px-4 py-2 rounded-md transition-colors">E-Rickshaw</a>
                    <a href="{{ route('accessories') }}" class="{{ request()->routeIs('accessories') ? 'text-[#4CAF50] bg-green-50' : 'text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50' }} px-4 py-2 rounded-md transition-colors">Accessories</a>
                    <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-[#4CAF50] bg-green-50' : 'text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50' }} px-4 py-2 rounded-md transition-colors">Gallery</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-[#4CAF50] bg-green-50' : 'text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50' }} px-4 py-2 rounded-md transition-colors">About Us</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-[#4CAF50] bg-green-50' : 'text-gray-700 hover:text-[#4CAF50] hover:bg-green-50/50' }} px-4 py-2 rounded-md transition-colors">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenuOpen" x-collapse x-cloak style="display: none;" class="md:hidden bg-white border-b border-gray-100 absolute w-full shadow-lg">
            <div class="px-4 pt-2 pb-6 space-y-1 sm:px-3 flex flex-col">
                <a href="{{ route('home') }}" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">Home</a>
                <a href="{{ route('products') }}" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">Products</a>
                <a href="{{ route('home') }}#battery" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">Lithium Batteries</a>
                <a href="{{ route('erickshaw') }}" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">E-Rickshaw</a>
                <a href="{{ route('accessories') }}" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">Accessories</a>
                <a href="{{ route('gallery') }}" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">Gallery</a>
                <a href="{{ route('about') }}" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">About Us</a>
                <a href="{{ route('contact') }}" class="text-gray-800 hover:text-[#4CAF50] block px-3 py-3 rounded-md text-base font-medium">Contact Us</a>
                <a href="{{ route('products') }}" class="mt-4 text-center block bg-[#4CAF50] text-white px-5 py-3 rounded-md font-bold uppercase transition-all">
                    Shop For Scooty
                </a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="kb-navy-surface text-gray-300 border-t border-gray-800 mt-auto">

        <!-- Main Footer Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                <!-- Brand -->
                <div class="lg:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center mb-5 space-x-3 group">
                        <img src="{{ asset('images/kb-symbol.png') }}" alt="KB Mobility Logo" class="h-12 w-auto object-contain rounded-lg bg-white p-1">
                        <div class="flex flex-col">
                            <span class="text-white font-extrabold text-xl font-heading leading-tight">KB <span class="text-[#4CAF50]">Mobility</span></span>
                            <span class="text-[10px] text-gray-400 font-semibold tracking-widest uppercase">New Delhi</span>
                        </div>
                    </a>
                    <p class="text-sm text-gray-400 leading-relaxed mb-5">India's trusted electric vehicle dealer & service center. Powering the clean green revolution in New Delhi.</p>
                    <!-- Social Icons -->
                    <div class="flex items-center space-x-3">
                        <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-[#4CAF50] rounded-lg flex items-center justify-center transition-colors" aria-label="Facebook">
                            <svg class="w-4 h-4 text-gray-400 hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-[#4CAF50] rounded-lg flex items-center justify-center transition-colors" aria-label="Instagram">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-width="2"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="2"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2"/></svg>
                        </a>
                        <a href="https://wa.me/918808363701" class="w-9 h-9 bg-gray-800 hover:bg-[#25D366] rounded-lg flex items-center justify-center transition-colors" aria-label="WhatsApp">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.125-.339-.153-.878-.344-1.63-1.092-.931-.931-1.378-1.996-1.558-2.29-.18-.293-.019-.48.163-.661.16-.16.353-.393.528-.592.175-.201.233-.343.349-.572.116-.23.058-.432-.029-.607-.087-.175-.776-1.874-1.063-2.564-.28-.673-.564-.582-.776-.593-.199-.01-.429-.012-.66-.012s-.607.086-.925.433c-.318.347-1.214 1.186-1.214 2.89s1.243 3.348 1.417 3.58c.174.232 2.44 3.731 5.912 5.234.827.359 1.472.573 1.974.733.829.263 1.584.225 2.18.136.666-.101 2.05-.837 2.339-1.646.291-.809.291-1.503.204-1.646-.087-.143-.318-.23-.665-.403z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-6">Quick Links</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('home') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Home</a></li>
                        <li><a href="{{ route('products') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>EV Scooters</a></li>
                        <li><a href="{{ route('erickshaw') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>E-Rickshaws</a></li>
                        <li><a href="{{ route('accessories') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Spare Parts</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Services</a></li>
                        <li><a href="{{ route('gallery') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Gallery</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>About Us</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-6">Our Services</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('services') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Battery Repair</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Controller Repair</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Motor Service</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>EV Sales</a></li>
                        <li><a href="{{ route('book') }}" class="text-gray-500 hover:text-[#4CAF50] transition-colors flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-[#4CAF50] mr-2 opacity-70"></span>Book Service</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-6">Contact Us</h3>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-[#4CAF50] mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-gray-400 leading-relaxed">Hastsal Village, Near Hanuman Dharam Kanta,<br>Uttam Nagar West,<br>New Delhi - 110059</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="tel:+918808363701" class="text-gray-400 hover:text-[#4CAF50] transition-colors">+91 8808363701</a>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:kbmobility65@gmail.com" class="text-gray-400 hover:text-[#4CAF50] transition-colors">kbmobility65@gmail.com</a>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span class="text-gray-400">Mon–Sat: 9am – 7pm</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-gray-500">
                <span>© {{ date('Y') }} KB Mobility. All rights reserved.</span>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('contact') }}" class="hover:text-[#4CAF50] transition-colors">Contact</a>
                    <span>·</span>
                    <a href="{{ route('about') }}" class="hover:text-[#4CAF50] transition-colors">About</a>
                    <span>·</span>
                    <a href="{{ route('login') }}" class="hover:text-[#4CAF50] transition-colors">Admin</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/918808363701" target="_blank" rel="noopener noreferrer"
        class="fixed bottom-6 right-6 bg-[#25D366] text-white p-3 rounded-full shadow-lg hover:bg-green-500 transition-all transform hover:scale-110 z-50 flex items-center justify-center kb-whatsapp-pulse"
        aria-label="Chat on WhatsApp">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.125-.339-.153-.878-.344-1.63-1.092-.931-.931-1.378-1.996-1.558-2.29-.18-.293-.019-.48.163-.661.16-.16.353-.393.528-.592.175-.201.233-.343.349-.572.116-.23.058-.432-.029-.607-.087-.175-.776-1.874-1.063-2.564-.28-.673-.564-.582-.776-.593-.199-.01-.429-.012-.66-.012s-.607.086-.925.433c-.318.347-1.214 1.186-1.214 2.89s1.243 3.348 1.417 3.58c.174.232 2.44 3.731 5.912 5.234.827.359 1.472.573 1.974.733.829.263 1.584.225 2.18.136.666-.101 2.05-.837 2.339-1.646.291-.809.291-1.503.204-1.646-.087-.143-.318-.23-.665-.403z"/>
            <path d="M20.52 3.449C18.24 1.245 15.24 0 12.045 0 5.463 0 .104 5.334.101 11.893c0 2.096.549 4.14 1.595 5.945L0 24l6.335-1.652c1.746.943 3.71 1.444 5.71 1.447h.006c6.585 0 11.946-5.336 11.949-11.896 0-3.176-1.24-6.165-3.48-8.45z"/>
        </svg>
    </a>

    <!-- Scroll Reveal & Stat Counter Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var els = document.querySelectorAll('.kb-reveal');
            if (!('IntersectionObserver' in window)) {
                els.forEach(function (el) { el.classList.add('kb-revealed'); });
            } else {
                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('kb-revealed');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.08 });
                els.forEach(function (el) { observer.observe(el); });
            }

            // Top scroll progress bar
            var progressBar = document.getElementById('kb-scroll-progress');
            if (progressBar) {
                window.addEventListener('scroll', function () {
                    var scrollTop = window.scrollY || document.documentElement.scrollTop;
                    var docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    var pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
                    progressBar.style.width = pct + '%';
                }, { passive: true });
            }

            // Smooth count-up for hero stats
            document.querySelectorAll('.kb-count').forEach(function (el) {
                var target = parseInt(el.getAttribute('data-target'), 10);
                if (!target) return;
                var current = 0;
                var steps = 30;
                var inc = Math.max(1, Math.ceil(target / steps));
                var timer = setInterval(function () {
                    current += inc;
                    if (current >= target) {
                        el.textContent = target;
                        clearInterval(timer);
                    } else {
                        el.textContent = current;
                    }
                }, 35);
            });
        });
    </script>
</body>
</html>
