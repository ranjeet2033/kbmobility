@extends('layouts.main')

@section('title', 'EV Products – 2W Scooters, 3W E-Rickshaws, Chargers & Batteries | KB Mobility')
@section('meta_description', 'Explore KB Mobility EV products in Uttam Nagar, New Delhi: 2W Electric Scooters (Single Light, Double Light, Activa, Old, BMW, TVS iQube models), 3W E-Rickshaw & E-Loader, IP57/IP65 Chargers, and Batteries.')

@section('content')

<!-- Modern Hero Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center kb-fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-[#4CAF50] mr-2 kb-dot-ping"></span>
            Complete EV Product Lineup • Delhi NCR
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
            KB Mobility <span class="kb-gradient-text">Products</span>
        </h1>
        <p class="text-base md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            2W Electric Scooters, 3W E-Rickshaws &amp; E-Loaders, IP57 &amp; IP65 Chargers, Lithium &amp; Inverter Batteries, and 2W &amp; 3W Spare Parts.
        </p>
        <div class="flex flex-wrap gap-3 justify-center">
            <a href="#vehicles-2w" class="kb-btn-primary px-6 py-3 rounded-full font-bold text-sm flex items-center justify-center">2W Vehicles</a>
            <a href="#vehicles-3w" class="bg-white text-gray-800 hover:text-[#4CAF50] px-6 py-3 rounded-full font-bold text-sm border border-gray-200 shadow-sm transition-all">3W Vehicles</a>
            <a href="#chargers" class="bg-white text-gray-800 hover:text-[#4CAF50] px-6 py-3 rounded-full font-bold text-sm border border-gray-200 shadow-sm transition-all">Chargers</a>
            <a href="#batteries-section" class="bg-white text-gray-800 hover:text-[#4CAF50] px-6 py-3 rounded-full font-bold text-sm border border-gray-200 shadow-sm transition-all">Batteries</a>
            <a href="{{ route('accessories') }}" class="bg-white text-gray-800 hover:text-[#4CAF50] px-6 py-3 rounded-full font-bold text-sm border border-gray-200 shadow-sm transition-all">2W &amp; 3W Accessories</a>
        </div>
    </div>
</div>

<!-- 1. 2W Vehicles Section -->
<div class="py-12 sm:py-16 bg-white" id="vehicles-2w">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-[#4CAF50]">Electric Scooters</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1">2W Vehicles</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">Choose from our complete range of electric 2-wheeler models built for Delhi roads.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Single Light -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-blue-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-blue-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">City Commute</span>
                </div>
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-blue-50 to-indigo-50/30 flex items-center justify-center p-6">
                    <img src="{{ asset('images/product-single-blue.png') }}" alt="Single Light Electric Scooter" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-xl" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">Single Light</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Daily Commuter</span>
                        </div>
                        <span class="text-blue-600 font-extrabold text-xl">₹65,000</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Compact, efficient, and lightweight. Ideal for students, daily office commutes, and intra-city errands.</p>
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">1000W</div><div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">50 km/h</div><div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">90 km</div><div class="text-[10px] text-gray-500 uppercase font-medium">Range</div></div>
                    </div>
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-blue-600 text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">Inquire Now</a>
                </div>
            </div>

            <!-- Double Light -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-purple-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Premium Cruiser</span>
                </div>
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-purple-50 to-pink-50/30 flex items-center justify-center p-6">
                    <img src="{{ asset('images/product-double-white.png') }}" alt="Double Light Electric Scooter" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-xl" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">Double Light</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Executive Edition</span>
                        </div>
                        <span class="text-purple-600 font-extrabold text-xl">₹72,500</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Dual headlamp illumination with extended footrest and dual suspension for smooth, vibration-free travel.</p>
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">1200W</div><div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">50 km/h</div><div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">100 km</div><div class="text-[10px] text-gray-500 uppercase font-medium">Range</div></div>
                    </div>
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-purple-600 text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">Inquire Now</a>
                </div>
            </div>

            <!-- Activa Model -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-green-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-[#4CAF50] text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Family Favorite</span>
                </div>
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-gray-50 to-green-50/30 flex items-center justify-center p-6">
                    <img src="{{ asset('images/product-activa-model.jpg') }}" alt="Activa Model Electric Scooter" class="w-full h-full object-contain rounded-2xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">Activa Model</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Classic Family EV</span>
                        </div>
                        <span class="text-[#4CAF50] font-extrabold text-lg">Ask Price</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Familiar ergonomic comfort, wide seat, spacious under-seat storage, and reliable lithium range for family use.</p>
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">1200W</div><div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">45-55 km/h</div><div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">90-110 km</div><div class="text-[10px] text-gray-500 uppercase font-medium">Range</div></div>
                    </div>
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-[#4CAF50] text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">Inquire Now</a>
                </div>
            </div>

            <!-- Old Model -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-gray-300 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-gray-700 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Value Classic</span>
                </div>
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-gray-50 to-slate-100/40 flex items-center justify-center p-6">
                    <img src="{{ asset('images/product-old-model.jpg') }}" alt="Old Model Electric Scooter" class="w-full h-full object-contain rounded-2xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">Old Model</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Rugged Commuter</span>
                        </div>
                        <span class="text-gray-800 font-extrabold text-lg">Ask Price</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Time-tested sturdy frame, easy-to-service components, and flat floorboard built for everyday utility and delivery.</p>
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">1000W</div><div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">45 km/h</div><div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">80-90 km</div><div class="text-[10px] text-gray-500 uppercase font-medium">Range</div></div>
                    </div>
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-[#4CAF50] text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">Inquire Now</a>
                </div>
            </div>

            <!-- BMW Model -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-sky-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-sky-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Sporty Maxi</span>
                </div>
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-sky-50 to-blue-50/30 flex items-center justify-center p-6">
                    <img src="{{ asset('images/product-bmw-model.jpg') }}" alt="BMW Model Electric Scooter" class="w-full h-full object-contain rounded-2xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">BMW Model</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Aerodynamic Sport</span>
                        </div>
                        <span class="text-sky-600 font-extrabold text-lg">Ask Price</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Bold aerodynamic fairing, split LED headlights, alloy wheels, and high-torque acceleration for riders who want style.</p>
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">1500W+</div><div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">55-60 km/h</div><div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">100-120 km</div><div class="text-[10px] text-gray-500 uppercase font-medium">Range</div></div>
                    </div>
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-sky-600 text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">Inquire Now</a>
                </div>
            </div>

            <!-- TVS iQube Model -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-teal-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative">
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/95 backdrop-blur-sm text-teal-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Smart Urban</span>
                </div>
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-teal-50 to-emerald-50/30 flex items-center justify-center p-6">
                    <img src="{{ asset('images/product-iqube-model.jpg') }}" alt="TVS iQube Model Electric Scooter" class="w-full h-full object-contain rounded-2xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900">TVS iQube Model</h3>
                            <span class="text-xs text-gray-400 font-semibold uppercase">Smart Family EV</span>
                        </div>
                        <span class="text-teal-600 font-extrabold text-lg">Ask Price</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed flex-grow">Clean modern silhouette with horizontal LED DRL bar, digital display, smooth suspension, and high-efficiency lithium pack.</p>
                    <div class="grid grid-cols-3 gap-2 mb-6 pt-4 border-t border-gray-100">
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">1500W</div><div class="text-[10px] text-gray-500 uppercase font-medium">Motor</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">55 km/h</div><div class="text-[10px] text-gray-500 uppercase font-medium">Speed</div></div>
                        <div class="text-center bg-gray-50 p-2 rounded-xl"><div class="text-gray-900 font-bold text-sm">100+ km</div><div class="text-[10px] text-gray-500 uppercase font-medium">Range</div></div>
                    </div>
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-teal-600 text-white text-center px-6 py-3 rounded-xl transition-colors font-bold uppercase tracking-wide text-sm">Inquire Now</a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- 2. 3W Vehicles Section -->
<div class="py-12 sm:py-16 bg-gray-50 border-t border-gray-100" id="vehicles-3w">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-600">Commercial Mobility</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1">3W Vehicles</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">Heavy-duty electric 3-wheelers for passenger transport and cargo logistics.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- E-Rickshaw -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all flex flex-col">
                <div class="relative h-64 bg-white flex items-center justify-center p-4">
                    <img src="{{ asset('images/erickshaw-passenger.jpg') }}" alt="E-Rickshaw Passenger" class="w-full h-full object-contain rounded-xl" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-2xl font-extrabold text-gray-900">E-Rickshaw</h3>
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded-full uppercase">Passenger</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Reinforced steel chassis, 4+1 passenger comfort, 1000W motor, and up to 100km daily range.</p>
                    <div class="flex gap-3">
                        <a href="{{ route('erickshaw') }}" class="flex-1 bg-gray-900 hover:bg-blue-600 text-white text-center px-5 py-3 rounded-xl font-bold text-sm transition-colors">View Details</a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-blue-50 hover:bg-blue-100 text-blue-700 text-center px-5 py-3 rounded-xl font-bold text-sm transition-colors">Get Quote</a>
                    </div>
                </div>
            </div>

            <!-- E-Loader (Cargo) -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all flex flex-col">
                <div class="relative h-64 bg-white flex items-center justify-center p-4">
                    <img src="{{ asset('images/erickshaw-cargo.jpg') }}" alt="E-Loader Cargo" class="w-full h-full object-contain rounded-xl" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-2xl font-extrabold text-gray-900">E-Loader (Cargo)</h3>
                        <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-xs font-bold rounded-full uppercase">Cargo</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Heavy-duty cargo box, 1200W high-torque motor, 600kg payload capacity for last-mile delivery.</p>
                    <div class="flex gap-3">
                        <a href="{{ route('erickshaw') }}" class="flex-1 bg-gray-900 hover:bg-indigo-600 text-white text-center px-5 py-3 rounded-xl font-bold text-sm transition-colors">View Details</a>
                        <a href="{{ route('contact') }}" class="flex-1 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 text-center px-5 py-3 rounded-xl font-bold text-sm transition-colors">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3. Chargers Section (IP57 & IP65) -->
<div class="py-12 sm:py-16 bg-white border-t border-gray-100" id="chargers">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-[#4CAF50]">Smart EV Charging</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1">EV Chargers</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">Water-resistant and weatherproof lithium &amp; lead-acid chargers with auto-cutoff protection.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- IP57 Charger -->
            <div class="bg-gray-50 rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition-all flex flex-col">
                <div class="h-64 bg-white flex items-center justify-center p-6">
                    <img src="{{ asset('images/charger-ip57.jpg') }}" alt="IP57 EV Charger 48V 60V 72V" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-2xl font-extrabold text-gray-900">IP57 Charger</h3>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">60V / 48V / 72V</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-5">Dust &amp; splash-resistant aluminum body charger engineered for 2W scooters and 3W e-rickshaws.</p>
                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <div class="bg-white p-3 rounded-xl border border-gray-100 text-center">
                            <div class="text-xs text-gray-500 uppercase font-semibold">Voltage</div>
                            <div class="text-sm font-extrabold text-gray-900 mt-0.5">48V / 60V / 72V</div>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-gray-100 text-center">
                            <div class="text-xs text-gray-500 uppercase font-semibold">Current</div>
                            <div class="text-sm font-extrabold text-gray-900 mt-0.5">6A – 25A</div>
                        </div>
                    </div>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%20IP57%20EV%20Charger%20(48V/60V/72V%2C%206A-25A)." target="_blank" rel="noopener noreferrer" class="mt-auto w-full bg-gray-900 hover:bg-[#4CAF50] text-white text-center px-6 py-3 rounded-xl font-bold text-sm uppercase tracking-wide transition-colors">
                        Enquire IP57 Charger
                    </a>
                </div>
            </div>

            <!-- IP65 Charger -->
            <div class="bg-gray-50 rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition-all flex flex-col">
                <div class="h-64 bg-white flex items-center justify-center p-6">
                    <img src="{{ asset('images/charger-ip65.jpg') }}" alt="IP65 Heavy Duty EV Charger" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-2xl font-extrabold text-gray-900">IP65 Charger</h3>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-full">Weatherproof</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-5">Fully sealed die-cast enclosure designed for harsh outdoor conditions, commercial fleets, and fast charging.</p>
                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <div class="bg-white p-3 rounded-xl border border-gray-100 text-center">
                            <div class="text-xs text-gray-500 uppercase font-semibold">Protection</div>
                            <div class="text-sm font-extrabold text-gray-900 mt-0.5">IP65 Sealed</div>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-gray-100 text-center">
                            <div class="text-xs text-gray-500 uppercase font-semibold">Compatibility</div>
                            <div class="text-sm font-extrabold text-gray-900 mt-0.5">Lithium &amp; LiFePO4</div>
                        </div>
                    </div>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%20IP65%20EV%20Charger." target="_blank" rel="noopener noreferrer" class="mt-auto w-full bg-gray-900 hover:bg-blue-600 text-white text-center px-6 py-3 rounded-xl font-bold text-sm uppercase tracking-wide transition-colors">
                        Enquire IP65 Charger
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 4. Batteries Section Summary -->
<div class="py-12 sm:py-16 bg-gray-50 border-t border-gray-100" id="batteries-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-[#4CAF50]">Power &amp; Storage</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1">Batteries Section</h2>
                <p class="text-gray-500 mt-2 max-w-2xl">2W Battery, 3W Battery, Solar Inverter Battery, Inverter Battery, and UPS Battery.</p>
            </div>
            <a href="{{ route('batteries') }}" class="inline-flex items-center px-6 py-3 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold text-sm rounded-full shadow-sm transition-colors self-start md:self-auto">
                View All Batteries
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            <a href="{{ route('batteries') }}" class="bg-white p-4 rounded-2xl border border-gray-100 hover:border-[#4CAF50] shadow-sm transition-all text-center group">
                <img src="{{ asset('images/battery-2w-lithium.jpg') }}" alt="2W Battery" class="h-28 w-full object-contain mx-auto mb-3 group-hover:scale-105 transition-transform" loading="lazy">
                <div class="font-bold text-gray-900 text-sm">2W Battery</div>
            </a>
            <a href="{{ route('batteries') }}" class="bg-white p-4 rounded-2xl border border-gray-100 hover:border-[#4CAF50] shadow-sm transition-all text-center group">
                <img src="{{ asset('images/battery-3w-lithium.jpg') }}" alt="3W Battery" class="h-28 w-full object-contain mx-auto mb-3 group-hover:scale-105 transition-transform" loading="lazy">
                <div class="font-bold text-gray-900 text-sm">3W Battery</div>
            </a>
            <a href="{{ route('batteries') }}" class="bg-white p-4 rounded-2xl border border-gray-100 hover:border-[#4CAF50] shadow-sm transition-all text-center group">
                <img src="{{ asset('images/battery-solar-inverter.jpg') }}" alt="Solar Inverter Battery" class="h-28 w-full object-contain mx-auto mb-3 group-hover:scale-105 transition-transform" loading="lazy">
                <div class="font-bold text-gray-900 text-sm">Solar Inverter Battery</div>
            </a>
            <a href="{{ route('batteries') }}" class="bg-white p-4 rounded-2xl border border-gray-100 hover:border-[#4CAF50] shadow-sm transition-all text-center group">
                <img src="{{ asset('images/battery-inverter.jpg') }}" alt="Inverter Battery" class="h-28 w-full object-contain mx-auto mb-3 group-hover:scale-105 transition-transform" loading="lazy">
                <div class="font-bold text-gray-900 text-sm">Inverter Battery</div>
            </a>
            <a href="{{ route('batteries') }}" class="bg-white p-4 rounded-2xl border border-gray-100 hover:border-[#4CAF50] shadow-sm transition-all text-center group col-span-2 sm:col-span-1">
                <img src="{{ asset('images/battery-ups.jpg') }}" alt="UPS Battery" class="h-28 w-full object-contain mx-auto mb-3 group-hover:scale-105 transition-transform" loading="lazy">
                <div class="font-bold text-gray-900 text-sm">UPS Battery</div>
            </a>
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
                    <h3 class="text-3xl font-extrabold text-white mb-2">Need a Test Ride or Spare Parts in Delhi?</h3>
                    <p class="text-gray-400 text-lg">Visit our showroom at Hastsal Village, Uttam Nagar West or explore our 2W &amp; 3W Accessories.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                    <a href="{{ route('accessories') }}" class="inline-flex items-center justify-center px-6 py-4 bg-white text-gray-900 hover:bg-gray-100 font-bold uppercase tracking-wide rounded-full transition-all text-sm">
                        2W &amp; 3W Accessories
                    </a>
                    <a href="{{ route('book') }}" class="inline-flex items-center justify-center px-8 py-4 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold uppercase tracking-wide rounded-full transition-all shadow-lg text-sm">
                        Book Test Ride
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
