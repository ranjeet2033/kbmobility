@extends('layouts.main')

@section('title', 'Electric Scooter & EV Service Center in Prayagraj')
@section('meta_description', 'Infravolte Mobility – Buy electric scooters, e-rickshaws & OEM spare parts in Prayagraj. Expert EV battery repair, motor & controller service. Call +91 9277250171.')

@section('content')

<!-- Modern Hero Section -->
<div class="relative bg-gradient-to-b from-gray-50 to-white pt-16 pb-32 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-green-100 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full bg-emerald-100 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 rounded-full bg-blue-50 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 4s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="text-center lg:text-left z-10">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-sm mb-6 shadow-sm">
                    <span class="flex h-2 w-2 rounded-full bg-green-500 mr-2"></span>
                    The Future of E-Mobility
                </div>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
                    Ride The <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#4CAF50] to-[#27ae60]">Future</span> of Transport
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Experience zero emissions, unmatched performance, and cutting-edge design. Join the revolution of smart and sustainable commuting today.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#shop" class="bg-gradient-to-r from-[#4CAF50] to-[#27ae60] hover:from-[#43a047] hover:to-[#2ecc71] text-white px-8 py-4 rounded-full font-bold text-lg shadow-[0_10px_25px_-5px_rgba(76,175,80,0.4)] transition-all transform hover:-translate-y-1 flex items-center justify-center">
                        Explore Models
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#services" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-lg border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                        Our Services
                    </a>
                </div>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-6 mt-12 pt-10 border-t border-gray-100">
                    <div>
                        <div class="text-3xl font-extrabold text-gray-900">100<span class="text-[#4CAF50]">+</span></div>
                        <div class="text-sm font-medium text-gray-500 mt-1 uppercase tracking-wide">Km Range</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-gray-900">0<span class="text-[#4CAF50]">g</span></div>
                        <div class="text-sm font-medium text-gray-500 mt-1 uppercase tracking-wide">CO2 Emissions</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-gray-900">3<span class="text-[#4CAF50]">hr</span></div>
                        <div class="text-sm font-medium text-gray-500 mt-1 uppercase tracking-wide">Fast Charging</div>
                    </div>
                </div>
            </div>

            <!-- Image/Visual -->
            <div class="relative z-10 flex items-center justify-center mt-6 lg:mt-0 lg:h-[600px]">
                <!-- Background decorative circle for image -->
                <div class="absolute inset-0 bg-gradient-to-tr from-green-100 to-emerald-50 rounded-full scale-75 blur-2xl opacity-60"></div>
                
                <img src="{{ asset('images/hero-blue-scooter.png') }}" alt="Modern Electric Scooter" class="relative z-20 w-full max-w-xs sm:max-w-sm lg:max-w-xl object-contain drop-shadow-[0_25px_35px_rgba(0,0,0,0.25)] hover:scale-105 transition-transform duration-700 ease-out">
                
                <!-- Floating badges - hidden on mobile to prevent overflow -->
                <div class="hidden sm:flex absolute top-1/4 -left-6 lg:-left-12 bg-white/90 backdrop-blur-md border border-white shadow-xl rounded-2xl p-4 items-center gap-3 z-30 transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="bg-green-100 p-2.5 rounded-full text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-gray-500 uppercase">Top Speed</div>
                        <div class="text-lg font-extrabold text-gray-900">65 km/h</div>
                    </div>
                </div>

                <div class="hidden sm:flex absolute bottom-1/4 -right-4 lg:-right-8 bg-white/90 backdrop-blur-md border border-white shadow-xl rounded-2xl p-4 items-center gap-3 z-30 transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="bg-blue-100 p-2.5 rounded-full text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-gray-500 uppercase">Warranty</div>
                        <div class="text-lg font-extrabold text-gray-900">3 Years</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features / Benefits Banner -->
<div class="bg-white py-16 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 group">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#4CAF50] mb-5 group-hover:scale-110 group-hover:bg-green-50 transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">Premium Quality</h3>
                <p class="text-sm text-gray-500">Built to withstand diverse road conditions.</p>
            </div>
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 group">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#4CAF50] mb-5 group-hover:scale-110 group-hover:bg-green-50 transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">Cost Effective</h3>
                <p class="text-sm text-gray-500">Save significantly on daily commute.</p>
            </div>
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 group">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-[#4CAF50] mb-5 group-hover:scale-110 group-hover:bg-green-50 transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">Fast Charging</h3>
                <p class="text-sm text-gray-500">Reach full charge in under 3 hours.</p>
            </div>
            <div class="flex flex-col items-center justify-center p-6 rounded-3xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 group">
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
<div class="bg-gray-100 py-20 border-t border-gray-200">
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
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Controller Repairing & Periodic E-Vehicle Maintenance</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-maintenance.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Maintenance">
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Battery Repairing</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-battery.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Battery Repairing">
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Motor Repairing</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-motor.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Motor Repairing">
                </div>
            </div>

            <!-- Service 4 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Charger Repairing</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-charger.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Charger Repairing">
                </div>
            </div>

            <!-- Service 5 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Spare Parts Online Services</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-parts.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Spare Parts">
                </div>
            </div>

            <!-- Service 6 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Battery Selling Services</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-battery-sell.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Battery Selling">
                </div>
            </div>

            <!-- Service 7 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
                <div class="p-6 pb-4 flex-grow">
                    <h3 class="text-[15px] font-bold text-gray-900 leading-snug group-hover:text-[#4CAF50] transition-colors h-10">Vehicles Rent Services</h3>
                </div>
                <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                    <img src="{{ asset('images/service-rent.png') }}" class="max-h-full max-w-full object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-300" alt="Rent Services">
                </div>
            </div>

            <!-- Service 8 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 flex flex-col group">
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
<div class="bg-white py-24 border-t border-gray-200">
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
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow group flex flex-col">
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
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow group flex flex-col">
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
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow group flex flex-col">
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

<!-- Product Catalog Section -->
<div class="py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <div class="inline-flex items-center space-x-2 text-[#4CAF50] font-bold text-sm tracking-widest uppercase mb-4">
                <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
                <span>Our Lineup</span>
                <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Complete Model Range</h2>
            <p class="text-gray-500 mt-3 max-w-xl mx-auto">Eco-friendly. Low cost. Silent ride. Built for India's roads.</p>
        </div>
        <div class="rounded-3xl overflow-hidden shadow-2xl border border-gray-100">
            <img
                src="{{ asset('images/product-catalog.jpg') }}"
                alt="Infravolte Mobility Product Catalog - Alpha Model, Single Light, Double Light, City Commuter"
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

@endsection
