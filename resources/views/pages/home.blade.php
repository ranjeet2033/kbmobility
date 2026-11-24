@extends('layouts.main')

@section('title', 'Electric Scooter, 2W/3W/4W Lithium Battery & EV Service Center in Uttam Nagar, New Delhi')
@section('meta_description', 'KB Mobility – Buy electric scooters, e-rickshaws, 2W/3W/4W LiFePO4 lithium batteries & OEM spare parts in Uttam Nagar West, New Delhi. Expert EV battery, motor & controller repair. Call +91 8808363701.')
@section('meta_keywords', 'KB Mobility, electric scooter Uttam Nagar, EV service center New Delhi, 2W lithium battery 60V 72V, 3W e-rickshaw LiFePO4 battery 48V, 4W commercial EV battery, EV battery repair Delhi, BLDC motor repair, e-rickshaw dealer 110059')
@section('og_image', asset('images/hero-blue-scooter.png'))
@section('og_image_alt', 'KB Mobility Electric Scooters and 2W 3W 4W Lithium Batteries in New Delhi')

@section('content')

<!-- Modern Minimalist Hero Section -->
<div class="relative kb-hero-surface pt-10 pb-12 overflow-hidden border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <!-- Text Content -->
            <div class="text-center lg:text-left z-10 kb-fade-up">
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-white border border-gray-200 text-gray-700 font-semibold text-xs mb-4 shadow-sm">
                    <span class="flex h-2 w-2 rounded-full bg-green-500 mr-2"></span>
                    The Future of E-Mobility
                </div>
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-4 font-heading kb-fade-up kb-delay-1">
                    Ride The <span class="kb-gradient-text">Future</span> of Transport
                </h1>
                <p class="text-base sm:text-lg text-gray-600 mb-6 max-w-2xl mx-auto lg:mx-0 leading-relaxed kb-fade-up kb-delay-2">
                    Experience zero emissions, unmatched performance, and cutting-edge design. Join the revolution of smart and sustainable commuting today.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start kb-fade-up kb-delay-3">
                    <a href="#shop" class="bg-gradient-to-r from-[#4CAF50] to-[#27ae60] hover:from-[#43a047] hover:to-[#2ecc71] text-white px-8 py-4 rounded-full font-bold text-base shadow-[0_10px_25px_-5px_rgba(76,175,80,0.4)] transition-all transform hover:-translate-y-1 flex items-center justify-center">
                        Explore Models
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#services" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                        Our Services
                    </a>
                </div>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-4 sm:gap-6 mt-8 pt-6 border-t border-gray-100 kb-fade-up kb-delay-3">
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-gray-900"><span class="kb-count" data-target="100">100</span><span class="text-[#4CAF50]">+</span></div>
                        <div class="text-xs font-medium text-gray-500 mt-0.5 uppercase tracking-wide">Km Range</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-gray-900">0<span class="text-[#4CAF50]">g</span></div>
                        <div class="text-xs font-medium text-gray-500 mt-0.5 uppercase tracking-wide">CO2 Emissions</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-gray-900"><span class="kb-count" data-target="3">3</span><span class="text-[#4CAF50]">hr</span></div>
                        <div class="text-xs font-medium text-gray-500 mt-0.5 uppercase tracking-wide">Fast Charging</div>
                    </div>
                </div>
            </div>

            <!-- Image/Visual -->
            <div class="relative z-10 flex items-center justify-center mt-6 lg:mt-0 kb-fade-up kb-delay-2">
                <div class="relative w-full max-w-md sm:max-w-lg lg:max-w-xl flex items-center justify-center">
                <img src="{{ asset('images/hero-blue-scooter.png') }}" alt="Modern Electric Scooter" class="relative z-20 w-full max-w-xs sm:max-w-sm lg:max-w-xl object-contain drop-shadow-[0_20px_30px_rgba(0,0,0,0.16)] hover:scale-105 transition-transform duration-700 ease-out kb-hero-float">
                
                <!-- Floating badges - hidden on mobile to prevent overflow -->
                <div class="hidden sm:flex absolute top-1/4 -left-6 lg:-left-10 bg-white border border-gray-100 shadow-lg rounded-2xl p-3 items-center gap-3 z-30 kb-badge-bob">
                    <div class="bg-green-100 p-2.5 rounded-full text-green-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <div class="text-[10px] font-bold text-gray-500 uppercase">Top Speed</div>
                        <div class="text-base font-extrabold text-gray-900">65 km/h</div>
                    </div>
                </div>

                <div class="hidden sm:flex absolute bottom-1/4 -right-4 lg:-right-8 bg-white/95 backdrop-blur-md border border-white shadow-xl rounded-2xl p-3 items-center gap-3 z-30 kb-badge-bob-delay">
                    <div class="bg-blue-100 p-2.5 rounded-full text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <div class="text-[10px] font-bold text-gray-500 uppercase">Warranty</div>
                        <div class="text-base font-extrabold text-gray-900">3 Years</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Animated EV Highlights Marquee Strip -->
<div class="kb-navy-surface py-3 overflow-hidden border-y border-gray-800">
    <div class="kb-marquee-track text-xs sm:text-sm font-bold tracking-wider uppercase text-white flex items-center space-x-10">
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>100+ Km Per Charge</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>2W / 3W / 4W Lithium Batteries</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>3-Hour Fast Charging</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>Expert EV Battery & Controller Repair</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>Uttam Nagar West, New Delhi</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>100+ Km Per Charge</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>2W / 3W / 4W Lithium Batteries</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>3-Hour Fast Charging</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>Expert EV Battery & Controller Repair</span>
        <span class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>Uttam Nagar West, New Delhi</span>
    </div>
</div>

<!-- Features / Benefits Banner -->
<div class="bg-white py-16 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white border border-transparent group kb-reveal kb-stagger-1 kb-card-hover">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#4CAF50] mb-5 group-hover:scale-110 group-hover:bg-green-50 transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">Premium Quality</h3>
                <p class="text-sm text-gray-500">Built to withstand diverse road conditions.</p>
            </div>
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white border border-transparent group kb-reveal kb-stagger-2 kb-card-hover">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#4CAF50] mb-5 group-hover:scale-110 group-hover:bg-green-50 transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">Cost Effective</h3>
                <p class="text-sm text-gray-500">Save significantly on daily commute.</p>
            </div>
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white border border-transparent group kb-reveal kb-stagger-3 kb-card-hover">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#4CAF50] mb-5 group-hover:scale-110 group-hover:bg-green-50 transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">Fast Charging</h3>
                <p class="text-sm text-gray-500">Reach full charge in under 3 hours.</p>
            </div>
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white border border-transparent group kb-reveal kb-stagger-4 kb-card-hover">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#4CAF50] mb-5 group-hover:scale-110 group-hover:bg-green-50 transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">24/7 Support</h3>
                <p class="text-sm text-gray-500">Expert assistance anytime you need.</p>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="bg-gray-100 py-16 sm:py-20 border-t border-gray-200" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight font-heading uppercase">
            Service Electric Vehicles
        </h2>
        <p class="mt-3 text-lg text-gray-600 font-medium">
            All 2 Wheeler (Scooty) & 3 Wheeler (L3, L5, L5-M model E-Rickshaw, Loader)
        </p>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Controller Repairing & Periodic E-Vehicle Maintenance</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-maintenance.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Maintenance">
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Battery Repairing</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-battery.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Battery Repairing">
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Motor Repairing</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-motor.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Motor Repairing">
                </div>
            </div>

            <!-- Service 4 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Charger Repairing</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-charger.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Charger Repairing">
                </div>
            </div>

            <!-- Service 5 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Spare Parts Online Services</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-parts.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Spare Parts">
                </div>
            </div>

            <!-- Service 6 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Battery Selling Services</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-battery-sell.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Battery Selling">
                </div>
            </div>

            <!-- Service 7 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Vehicles Rent Services</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-rent.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Rent Services">
                </div>
            </div>

            <!-- Service 8 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group kb-reveal kb-card-hover">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Vehicle Selling Services</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-sell.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Vehicle Selling">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Shop Section -->
<div class="bg-white py-16 sm:py-24 border-t border-gray-200" id="shop">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight font-heading uppercase">
            SHOP EV SCOOTY
        </h2>
        <p class="mt-3 text-lg text-gray-600 font-medium">
            Ride The Future of Transport
        </p>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Product 1 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group flex flex-col kb-reveal kb-card-hover">
                <div class="p-6 pb-2">
                    <h3 class="text-xl font-bold text-gray-900">Alpha Model</h3>
                    <p class="text-sm text-gray-500">Premium Series</p>
                </div>
                <div class="h-64 flex items-center justify-center p-6 bg-white relative">
                    <img src="{{ asset('images/product-alpha-red.png') }}" class="max-h-full max-w-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-300 z-10" alt="Alpha Model Red">
                </div>
                <div class="px-6 pb-6 pt-2 flex-grow flex flex-col justify-end">
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">2040</div>
                            <div class="text-[10px] text-gray-500 uppercase">Watt<br>Power</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">15 Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase"><br>Amp</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">45</div>
                            <div class="text-[10px] text-gray-500 uppercase">Top<br>Speed</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-lg font-bold text-gray-900">₹ 85,000</span>
                        <button class="text-sm font-semibold text-[#4CAF50] hover:text-[#27ae60] transition-colors flex items-center">
                            View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group flex flex-col kb-reveal kb-card-hover">
                <div class="p-6 pb-2">
                    <h3 class="text-xl font-bold text-gray-900">Single Light</h3>
                    <p class="text-sm text-gray-500">City Commuter</p>
                </div>
                <div class="h-64 flex items-center justify-center p-6 bg-white relative">
                    <img src="{{ asset('images/product-single-blue.png') }}" class="max-h-full max-w-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-300 z-10" alt="Single Light Blue">
                </div>
                <div class="px-6 pb-6 pt-2 flex-grow flex flex-col justify-end">
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">1000</div>
                            <div class="text-[10px] text-gray-500 uppercase">Watt<br>Power</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">45-50</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/h<br>Speed</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">90</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/Charge<br>Mileage</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-lg font-bold text-gray-900">₹ 65,000</span>
                        <button class="text-sm font-semibold text-[#4CAF50] hover:text-[#27ae60] transition-colors flex items-center">
                            View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group flex flex-col kb-reveal kb-card-hover">
                <div class="p-6 pb-2">
                    <h3 class="text-xl font-bold text-gray-900">Double Light</h3>
                    <p class="text-sm text-gray-500">Premium Ride</p>
                </div>
                <div class="h-64 flex items-center justify-center p-6 bg-white relative">
                    <img src="{{ asset('images/product-double-white.png') }}" class="max-h-full max-w-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-300 z-10" alt="Double Light White">
                </div>
                <div class="px-6 pb-6 pt-2 flex-grow flex flex-col justify-end">
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">1200</div>
                            <div class="text-[10px] text-gray-500 uppercase">Watt<br>Power</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">45-50</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/h<br>Speed</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">100</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/Charge<br>Mileage</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-lg font-bold text-gray-900">₹ 72,500</span>
                        <button class="text-sm font-semibold text-[#4CAF50] hover:text-[#27ae60] transition-colors flex items-center">
                            View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <!-- <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow group flex flex-col">
                <div class="p-6 pb-2">
                    <h3 class="text-xl font-bold text-gray-900">Alpha Model</h3>
                    <p class="text-sm text-gray-500">Premium Series (Yellow)</p>
                </div>
                <div class="h-64 flex items-center justify-center p-6 bg-white relative">
                    <img src="{{ asset('images/product-alpha-yellow.webp') }}" class="max-h-full max-w-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-300 z-10" alt="Alpha Model Yellow">
                </div>
                <div class="px-6 pb-6 pt-2 flex-grow flex flex-col justify-end">
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">2040</div>
                            <div class="text-[10px] text-gray-500 uppercase">Watt<br>Power</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">15 Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase"><br>Amp</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">45</div>
                            <div class="text-[10px] text-gray-500 uppercase">Top<br>Speed</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-lg font-bold text-gray-900">₹ 85,000</span>
                        <button class="text-sm font-semibold text-[#4CAF50] hover:text-[#27ae60] transition-colors flex items-center">
                            View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div> -->

            <!-- Product 5 -->
            <!-- <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow group flex flex-col">
                <div class="p-6 pb-2">
                    <h3 class="text-xl font-bold text-gray-900">Single Light</h3>
                    <p class="text-sm text-gray-500">City Commuter</p>
                </div>
                <div class="h-64 flex items-center justify-center p-6 bg-white relative">
                    <img src="{{ asset('images/product-single-blue.webp') }}" class="max-h-full max-w-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-300 z-10" alt="Single Light Blue">
                </div>
                <div class="px-6 pb-6 pt-2 flex-grow flex flex-col justify-end">
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">1000</div>
                            <div class="text-[10px] text-gray-500 uppercase">Watt<br>Power</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">45-50</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/h<br>Speed</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">90</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/Charge<br>Mileage</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-lg font-bold text-gray-900">₹ 65,000</span>
                        <button class="text-sm font-semibold text-[#4CAF50] hover:text-[#27ae60] transition-colors flex items-center">
                            View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div> -->

            <!-- Product 6 -->
            <!-- <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow group flex flex-col">
                <div class="p-6 pb-2">
                    <h3 class="text-xl font-bold text-gray-900">Double Light</h3>
                    <p class="text-sm text-gray-500">Premium Ride</p>
                </div>
                <div class="h-64 flex items-center justify-center p-6 bg-white relative">
                    <img src="{{ asset('images/product-double-white.webp') }}" class="max-h-full max-w-full object-contain drop-shadow-xl group-hover:scale-105 transition-transform duration-300 z-10" alt="Double Light White">
                </div>
                <div class="px-6 pb-6 pt-2 flex-grow flex flex-col justify-end">
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">1200</div>
                            <div class="text-[10px] text-gray-500 uppercase">Watt<br>Power</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">45-50</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/h<br>Speed</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-2 text-center border border-gray-100">
                            <div class="text-[11px] font-bold text-gray-800">100</div>
                            <div class="text-[10px] text-gray-500 uppercase">Km/Charge<br>Mileage</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-lg font-bold text-gray-900">₹ 72,500</span>
                        <button class="text-sm font-semibold text-[#4CAF50] hover:text-[#27ae60] transition-colors flex items-center">
                            View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>


<!-- Advanced EV Lithium Battery Section (2W, 3W, 4W) -->
<div class="bg-gray-50 py-16 border-t border-gray-200" id="battery">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-sm mb-4 shadow-sm">
                <span class="flex h-2 w-2 rounded-full bg-[#4CAF50] mr-2"></span>
                Next-Gen Lithium Power Packs
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight font-heading">
                EV Lithium <span class="kb-gradient-text">Batteries</span> (2W, 3W, 4W)
            </h2>
            <p class="mt-3 text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Grade-A Lithium Iron Phosphate (LiFePO4) & Lithium-ion battery packs engineered for maximum mileage, thermal safety, fast charging, and 2000+ deep charge cycles.
            </p>
        </div>

        <!-- Battery Grid: 2W, 3W, 4W -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Battery 1: 2-Wheeler (2W) -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-reveal kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-green-50 text-green-600 text-xs font-bold rounded-full border border-green-100 uppercase tracking-wider">2-Wheeler (2W)</span>
                        <span class="text-xs font-semibold text-gray-500">Scooters & Scooty</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">Smart Lithium Pack</h3>
                    <p class="text-xs text-gray-500 mt-0.5">High-mileage battery for all electric scooty models</p>
                </div>
                
                <!-- Product Image -->
                <div class="h-64 flex items-center justify-center p-4 bg-white relative overflow-hidden">
                    <img src="{{ asset('images/battery-2w-lithium.jpg') }}" alt="2-Wheeler EV Scooter Lithium Cell Battery Pack 60V 72V" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500">
                    <div style="bottom: 12px; right: 12px;" class="absolute bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg border border-gray-200 text-[10px] font-bold text-gray-700 shadow-sm">
                        18650 / 21700 Cells
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between">
                    <!-- Key Specs Row -->
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">60V / 72V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Voltage</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">30Ah - 42Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Capacity</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">80-120 km</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Range</div>
                        </div>
                    </div>

                    <!-- Bullet Features -->
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Smart Micro-BMS with thermal & short-circuit cutoff
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Portable lightweight casing with durable carry handle
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Rapid fast charging (Full charge in under 3 hours)
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Heavy-duty Anderson connector plug & play
                        </li>
                    </ul>

                    <!-- Live Animated Charge Bar -->
                    <div class="mb-4">
                        <div class="flex justify-between items-center text-[10px] font-bold text-gray-500 uppercase mb-1">
                            <span>Fast Charge Efficiency</span>
                            <span class="text-[#4CAF50]">98% Active BMS</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full overflow-hidden">
                            <div class="kb-charge-bar"></div>
                        </div>
                    </div>

                    <!-- Warranty & Action -->
                    <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-gray-400 block font-semibold uppercase">Warranty</span>
                            <span class="text-sm font-bold text-gray-800">3 Years Included</span>
                        </div>
                        <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%202W%20EV%20Scooter%20Lithium%20Battery%20Pack." target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-[#4CAF50] hover:bg-[#43a047] text-white text-xs font-bold rounded-xl shadow-md transition-all flex items-center">
                            Enquire Now
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Battery 2: 3-Wheeler (3W) -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-reveal kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded-full border border-blue-100 uppercase tracking-wider">3-Wheeler (3W)</span>
                        <span class="text-xs font-semibold text-gray-500">E-Rickshaw & Loader</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">Heavy-Duty LiFePO4 Pack</h3>
                    <p class="text-xs text-gray-500 mt-0.5">High-torque commercial battery for passenger & cargo</p>
                </div>
                
                <!-- Product Image -->
                <div class="h-64 flex items-center justify-center p-4 bg-white relative overflow-hidden">
                    <img src="{{ asset('images/battery-3w-lithium.jpg') }}" alt="3-Wheeler E-Rickshaw LiFePO4 Cell Battery Pack 48V 60V" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500">
                    <div style="bottom: 12px; right: 12px;" class="absolute bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg border border-gray-200 text-[10px] font-bold text-gray-700 shadow-sm">
                        Prismatic LiFePO4
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between">
                    <!-- Key Specs Row -->
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">48V / 51.2V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Voltage</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">100Ah - 130Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Capacity</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">110-140 km</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Daily Range</div>
                        </div>
                    </div>

                    <!-- Bullet Features -->
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Prismatic Grade-A LiFePO4 cells with 2500+ cycles
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Realtime LCD screen showing voltage, current & SOC %
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Heavy-duty brass terminal studs with protective rubber boots
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Rugged dual-handle stainless steel / powder-coated body
                        </li>
                    </ul>

                    <!-- Live Animated Charge Bar -->
                    <div class="mb-4">
                        <div class="flex justify-between items-center text-[10px] font-bold text-gray-500 uppercase mb-1">
                            <span>Fast Charge Efficiency</span>
                            <span class="text-[#4CAF50]">98% Active BMS</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full overflow-hidden">
                            <div class="kb-charge-bar"></div>
                        </div>
                    </div>

                    <!-- Warranty & Action -->
                    <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-gray-400 block font-semibold uppercase">Warranty</span>
                            <span class="text-sm font-bold text-gray-800">3 to 5 Years</span>
                        </div>
                        <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%203W%20E-Rickshaw%20Lithium%20Battery%20Pack." target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-[#4CAF50] hover:bg-[#43a047] text-white text-xs font-bold rounded-xl shadow-md transition-all flex items-center">
                            Enquire Now
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Battery 3: 4-Wheeler (4W) -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-reveal kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-bold rounded-full border border-gray-200 uppercase tracking-wider">4-Wheeler (4W)</span>
                        <span class="text-xs font-semibold text-gray-500">Commercial & Fleet</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">Modular Industrial EV Pack</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Heavy-duty modular system for delivery vans & loaders</p>
                </div>
                
                <!-- Product Image -->
                <div class="h-64 flex items-center justify-center p-4 bg-white relative overflow-hidden">
                    <img src="{{ asset('images/battery-4w-lithium.jpg') }}" alt="4-Wheeler Commercial EV Modular Lithium Cell Battery Pack 72V 96V" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500">
                    <div style="bottom: 12px; right: 12px;" class="absolute bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg border border-gray-200 text-[10px] font-bold text-gray-700 shadow-sm">
                        Modular High-Power
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col justify-between">
                    <!-- Key Specs Row -->
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">72V / 96V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Industrial</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">150Ah - 200Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Capacity</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">150-200+ km</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Range</div>
                        </div>
                    </div>

                    <!-- Bullet Features -->
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Automotive-grade modular cells with cooling heat-sink fins
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            CAN-Bus communication with dual master BMS redundancy
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Engineered for high payload and continuous commercial duty
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            IP67 waterproof and high-vibration structural casing
                        </li>
                    </ul>

                    <!-- Live Animated Charge Bar -->
                    <div class="mb-4">
                        <div class="flex justify-between items-center text-[10px] font-bold text-gray-500 uppercase mb-1">
                            <span>Fast Charge Efficiency</span>
                            <span class="text-[#4CAF50]">98% Active BMS</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full overflow-hidden">
                            <div class="kb-charge-bar"></div>
                        </div>
                    </div>

                    <!-- Warranty & Action -->
                    <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-gray-400 block font-semibold uppercase">Commercial Spec</span>
                            <span class="text-sm font-bold text-gray-800">3 to 5 Yrs Warranty</span>
                        </div>
                        <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%204W%20Commercial%20EV%20Modular%20Lithium%20Battery%20Pack." target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-[#4CAF50] hover:bg-[#43a047] text-white text-xs font-bold rounded-xl shadow-md transition-all flex items-center">
                            Enquire Now
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Exchange / Conversion Callout Banner -->
        <div class="mt-8 bg-white rounded-2xl p-6 sm:p-8 border border-green-100 shadow-md flex flex-col md:flex-row items-center justify-between gap-6 kb-reveal kb-card-hover">
            <div class="flex items-center space-x-4">
                <div class="w-14 h-14 bg-green-50 text-[#4CAF50] rounded-2xl flex items-center justify-center flex-shrink-0 border border-green-100 shadow-sm">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900">Switch from Lead-Acid to Lithium — Get Exchange Bonus!</h3>
                    <p class="text-sm text-gray-600 mt-1 max-w-2xl">Upgrade your existing 2-wheeler or 3-wheeler to high-efficiency lithium battery. Save electricity, increase speed & get instant exchange value for your old batteries.</p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                <a href="tel:+918808363701" class="px-6 py-3 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold text-sm rounded-xl shadow-md text-center transition-colors whitespace-nowrap">
                    Call: +91 8808363701
                </a>
                <a href="{{ route('book') }}" class="px-6 py-3 bg-white text-gray-800 hover:text-[#4CAF50] border border-gray-200 font-bold text-sm rounded-xl shadow-sm text-center transition-colors whitespace-nowrap">
                    Book Free Battery Check
                </a>
            </div>
        </div>

    </div>
</div>

<!-- Product Catalog Section -->
<div class="py-16 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <div class="inline-flex items-center space-x-2 text-[#4CAF50] font-bold text-xs tracking-widest uppercase mb-4">
                <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
                <span>Our Lineup</span>
                <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Complete Model Range</h2>
            <p class="text-gray-500 mt-3 max-w-xl mx-auto text-base">Eco-friendly. Low cost. Silent ride. Built for Delhi's roads.</p>
        </div>
        <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-100 bg-gray-50 kb-reveal kb-card-hover">
            <img
                src="{{ asset('images/product-catalog.jpg') }}"
                alt="KB Mobility Product Catalog - Alpha Model, Single Light, Double Light, City Commuter"
                class="w-full h-auto object-cover"
                loading="lazy"
            >
        </div>
        <div class="mt-8 text-center">
            <a href="{{ route('products') }}" class="inline-flex items-center justify-center px-8 py-4 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold uppercase tracking-wide rounded-full transition-all shadow-lg transform hover:-translate-y-1">
                Explore All Models
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</div>

<!-- Real Showroom & Experience Center Section -->
<div class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <div class="inline-flex items-center space-x-2 text-[#4CAF50] font-bold text-xs tracking-widest uppercase mb-2">
                <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
                <span>Visit Us in Person</span>
                <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Our Delhi Showroom & Fleet</h2>
            <p class="text-gray-500 mt-2 text-base max-w-2xl mx-auto">Visit our Uttam Nagar West showroom to test ride our brand-new lineup of high-performance electric scooters.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="relative group rounded-3xl overflow-hidden shadow-xl border border-gray-100 kb-reveal kb-card-hover">
                <img src="{{ asset('images/kb-showroom-1.jpg') }}" alt="KB Mobility EV Scooters Lineup in Showroom" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0,0,0,0.82), rgba(0,0,0,0.25), transparent);"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <span class="text-[#4CAF50] text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full" style="background-color: rgba(0,0,0,0.5);">Showroom Floor</span>
                    <h3 class="text-xl font-bold mt-2">Ready Inventory of Premium EV Scooters</h3>
                    <p class="text-xs text-gray-300 mt-1">Wide variety of colors and performance options ready for instant delivery.</p>
                </div>
            </div>

            <div class="relative group rounded-3xl overflow-hidden shadow-xl border border-gray-100 kb-reveal kb-card-hover">
                <img src="{{ asset('images/kb-showroom-2.jpg') }}" alt="KB Mobility Scooter Fleet" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0,0,0,0.82), rgba(0,0,0,0.25), transparent);"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <span class="text-[#4CAF50] text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full" style="background-color: rgba(0,0,0,0.5);">Fleet View</span>
                    <h3 class="text-xl font-bold mt-2">Electric Scooters Lineup at Uttam Nagar</h3>
                    <p class="text-xs text-gray-300 mt-1">Hastsal Village, Near Hanuman Dharam Kanta, New Delhi - 110059</p>
                </div>
            </div>
        </div>

        <!-- Location Map Embed -->
        <div class="mt-8 rounded-2xl overflow-hidden shadow-md border border-gray-200 bg-white">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.035127593397!2d77.05672867528904!3d28.62870927566708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d050062538925%3A0xa366d6f997e84569!2sKB%20Mobility!5e0!3m2!1sen!2sin!4v1795534495777!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" title="KB Mobility Location Map"></iframe>
        </div>

        <div class="mt-6 p-6 bg-green-50 rounded-2xl border border-green-100 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-[#4CAF50] text-white rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900">Want to book a test drive or explore available models?</h4>
                    <p class="text-sm text-gray-600">Call us directly at <a href="tel:+918808363701" class="text-[#4CAF50] font-bold">+91 8808363701</a> or visit our center.</p>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="px-6 py-3 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold rounded-xl shadow-md transition-colors whitespace-nowrap">
                Get Directions & Contact
            </a>
        </div>
    </div>
</div>

@endsection
