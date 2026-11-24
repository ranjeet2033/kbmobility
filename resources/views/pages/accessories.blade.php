@extends('layouts.main')

@section('title', 'EV Spare Parts & Accessories New Delhi – Battery, Motor, Controller | KB Mobility')
@section('meta_description', 'Buy genuine EV spare parts in New Delhi from KB Mobility – lithium battery packs, BLDC hub motors, smart controllers, 48V/60V/72V chargers in Uttam Nagar West. OEM certified quality.')

@section('content')

<!-- Modern Hero Section -->
<div class="relative bg-gradient-to-b from-gray-50 to-white pt-12 pb-16 sm:pt-16 sm:pb-20 overflow-hidden border-b border-gray-100">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-purple-100 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full bg-pink-100 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-purple-50 border border-purple-100 text-purple-600 font-semibold text-sm mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-purple-600 mr-2"></span>
            OEM Certified Quality
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-4 sm:mb-6 font-heading">
            Genuine <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Spare Parts</span>
        </h1>
        <p class="text-base sm:text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Keep your electric vehicle running at peak performance. Explore our complete catalog of certified replacement parts with compatibility warranty.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#parts" class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-8 py-3.5 rounded-full font-bold text-base shadow-[0_10px_25px_-5px_rgba(147,51,234,0.4)] transition-all transform hover:-translate-y-1 flex items-center justify-center">
                Browse Parts
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <a href="{{ route('book') }}" class="bg-white text-gray-800 hover:text-purple-600 px-8 py-3.5 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Book Repair
            </a>
        </div>
    </div>
</div>

<!-- Spare Parts Grid -->
<div class="py-12 sm:py-16 bg-white" id="parts">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Essential Components</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">High-quality components sourced directly for 2-wheeler scooties and 3-wheeler e-rickshaws.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Part Card 1 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img
                        src="{{ asset('images/service-battery.png') }}"
                        alt="Lithium battery packs and cells"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg"
                        loading="lazy"
                    >
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-purple-50 rounded-lg flex items-center justify-center text-purple-600 mb-4 border border-purple-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Battery Packs & Cells</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">Grade A lithium-ion cells with smart BMS protection for all major EV scooter brands.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">
                        Get Quote
                    </a>
                </div>
            </div>

            <!-- Part Card 2 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img
                        src="{{ asset('images/service-maintenance.png') }}"
                        alt="Smart BLDC Controller"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg"
                        loading="lazy"
                    >
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-purple-50 rounded-lg flex items-center justify-center text-purple-600 mb-4 border border-purple-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Smart Controllers</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">30A–60A BLDC controllers with cruise control & regenerative braking support.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">
                        Get Quote
                    </a>
                </div>
            </div>

            <!-- Part Card 3 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img
                        src="{{ asset('images/service-motor.png') }}"
                        alt="BLDC Hub Motor"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg"
                        loading="lazy"
                    >
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-purple-50 rounded-lg flex items-center justify-center text-purple-600 mb-4 border border-purple-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">BLDC Hub Motors</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">High-torque rear hub motors available in 10" and 12" variants for extreme durability.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">
                        Get Quote
                    </a>
                </div>
            </div>

            <!-- Part Card 4 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img
                        src="{{ asset('images/service-charger.png') }}"
                        alt="EV Fast Charger"
                        class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg"
                        loading="lazy"
                    >
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-purple-50 rounded-lg flex items-center justify-center text-purple-600 mb-4 border border-purple-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Fast Chargers</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">48V, 60V, and 72V smart chargers. Built with active cooling and auto-cutoff safety.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">
                        Get Quote
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
