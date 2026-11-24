@extends('layouts.main')

@section('title', 'Buy Electric Scooters in Uttam Nagar, New Delhi – KB Mobility Lineup')
@section('meta_description', 'Buy premium electric scooters in New Delhi from KB Mobility – Alpha Model (2040W), Single Light (1000W), Double Light (1500W) & City Commuter. Price from ₹65,000 in Uttam Nagar West.')

@section('content')

<!-- Modern Hero Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center kb-fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-[#4CAF50] mr-2 kb-dot-ping"></span>
            Smart Commuting in Delhi NCR
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
            KB Mobility <span class="kb-gradient-text">EV Scooters</span>
        </h1>
        <p class="text-base md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Stylish, powerful, and built for Delhi roads. Experience zero emissions, reliable lithium battery life, and significant savings on your daily travel.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#models" class="kb-btn-primary px-8 py-4 rounded-full font-bold text-base flex items-center justify-center">
                Explore Models
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('contact') }}" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Contact Sales
            </a>
        </div>
    </div>
</div>

<!-- Scooters Grid Section -->
<div class="py-12 sm:py-16 bg-white" id="models">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Choose Your Electric Scooter</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">From daily office commutes across New Delhi to heavy commercial runs, find the perfect match.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Scooter Card 1 - Alpha Model -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-green-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(76,175,80,0.12)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-[#4CAF50] text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Top Seller</span>
                </div>
                
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-green-50 to-emerald-50/30 flex items-center justify-center p-6">
                    <img
                        src="{{ asset('images/product-alpha-red.png') }}"
                        alt="KB Mobility Alpha Model Electric Scooter"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-xl"
                        loading="lazy"
                    >
                </div>
                
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">Alpha Model</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Premium Red Edition</span>
                        </div>
                        <span class="text-[#4CAF50] font-extrabold text-xl">₹85,000</span>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">High-output sporty electric scooter featuring 2040W motor power and rapid acceleration. Built for durability and style.</p>
                    
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">2040W</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div>
                        </div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">45 km/h</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div>
                        </div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">80-90 km</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Range</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-[#4CAF50] text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">
                        Inquire Now
                    </a>
                </div>
            </div>

            <!-- Scooter Card 2 - Single Light -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-blue-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(59,130,246,0.12)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-blue-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">City Commute</span>
                </div>
                
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-blue-50 to-indigo-50/30 flex items-center justify-center p-6">
                    <img
                        src="{{ asset('images/product-single-blue.png') }}"
                        alt="KB Mobility Single Light Electric Scooter"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-xl"
                        loading="lazy"
                    >
                </div>
                
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">Single Light</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Daily Commuter (Blue)</span>
                        </div>
                        <span class="text-blue-600 font-extrabold text-xl">₹65,000</span>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Compact, efficient, and exceptionally lightweight. Ideal for students, professionals, and intra-city errands.</p>
                    
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">1000W</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div>
                        </div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">50 km/h</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div>
                        </div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">90 km</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Mileage</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-blue-600 text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">
                        Inquire Now
                    </a>
                </div>
            </div>

            <!-- Scooter Card 3 - Double Light -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(168,85,247,0.12)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-purple-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Premium Cruiser</span>
                </div>
                
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-purple-50 to-pink-50/30 flex items-center justify-center p-6">
                    <img
                        src="{{ asset('images/product-double-white.png') }}"
                        alt="KB Mobility Double Light Electric Scooter"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-xl"
                        loading="lazy"
                    >
                </div>
                
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">Double Light</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Executive White</span>
                        </div>
                        <span class="text-purple-600 font-extrabold text-xl">₹72,500</span>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Dual headlamp illumination with extended footrest and dual suspension for smooth, vibration-free travel.</p>
                    
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">1200W</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div>
                        </div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">50 km/h</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div>
                        </div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl">
                            <div class="text-gray-900 font-bold text-sm">100 km</div>
                            <div class="text-[10px] text-gray-500 uppercase font-medium">Mileage</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-purple-600 text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">
                        Inquire Now
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- CTA Banner -->
<div class="bg-white py-10 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-3xl overflow-hidden bg-gray-900">
            <div class="absolute inset-0 bg-gradient-to-r from-[#4CAF50]/20 to-transparent"></div>
            <div class="relative z-10 px-8 py-12 flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
                <div>
                    <h3 class="text-3xl font-extrabold text-white mb-2">Need a Test Ride in Delhi?</h3>
                    <p class="text-gray-400 text-lg">Visit our showroom at Hastsal Village, Uttam Nagar West or contact us to schedule a test ride.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ route('book') }}" class="inline-flex items-center px-8 py-4 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold uppercase tracking-wide rounded-full transition-all shadow-lg transform hover:-translate-y-1">
                        Book Test Ride
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
