@extends('layouts.main')

@section('title', 'Gallery – KB Mobility Showroom & Fleet Photos | Uttam Nagar, Delhi')
@section('meta_description', 'Explore real photos of KB Mobility’s EV showroom, electric scooter lineup, and workshop in Uttam Nagar West, New Delhi. See our state-of-the-art facilities.')

@section('content')
<div class="relative overflow-hidden bg-white py-12 sm:py-16 border-b border-gray-100">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at top right, #75d118 0%, transparent 60%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-[#4CAF50] font-bold text-xs uppercase tracking-widest mb-3">
            <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
            <span>Inside KB Mobility</span>
        </div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900">Company Gallery</h1>
        <p class="mt-3 text-base sm:text-lg text-gray-600 max-w-2xl mx-auto font-sans">Take a peek inside our Uttam Nagar showroom floors, EV scooter fleet lineup, and diagnostic workshops.</p>
    </div>
</div>

<div class="py-12 sm:py-16 bg-white relative" x-data="{ filter: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Gallery Filters -->
        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 mb-10">
            <button @click="filter = 'all'" :class="filter === 'all' ? 'px-6 py-2 rounded-full border border-[#4CAF50] text-black bg-[#4CAF50] font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-200 text-gray-600 hover:text-gray-900 hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">All Photos</button>
            <button @click="filter = 'showroom'" :class="filter === 'showroom' ? 'px-6 py-2 rounded-full border border-[#4CAF50] text-black bg-[#4CAF50] font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-200 text-gray-600 hover:text-gray-900 hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">Showroom & Fleet</button>
            <button @click="filter = 'workshop'" :class="filter === 'workshop' ? 'px-6 py-2 rounded-full border border-[#4CAF50] text-black bg-[#4CAF50] font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-200 text-gray-600 hover:text-gray-900 hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">Workshop & Spares</button>
        </div>

        <!-- CSS Grid Gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            
            <!-- Gallery Item 1 - Real Showroom Lineup -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80 md:col-span-2">
                <img src="{{ asset('images/kb-showroom-1.jpg') }}" alt="KB Mobility Showroom Floor Fleet" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter opacity-90 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Showroom Floor</span>
                    <h3 class="text-2xl font-bold text-white mt-1 drop-shadow-lg">KB Mobility Electric Scooter Lineup</h3>
                    <p class="text-xs text-gray-300 mt-1">Our showroom lineup of premium electric scooters in New Delhi.</p>
                </div>
            </div>

            <!-- Gallery Item 2 - Real Showroom Scooters -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80">
                <img src="{{ asset('images/kb-showroom-2.jpg') }}" alt="KB Mobility Showroom" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter opacity-90 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Delhi Fleet</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">Showroom Fleet View</h3>
                    <p class="text-xs text-gray-300 mt-1">Uttam Nagar West, New Delhi</p>
                </div>
            </div>

            <!-- Gallery Item 3 - Workshop -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80">
                <img src="{{ asset('images/gallery-workshop.jpg') }}" alt="EV Workshop Service Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Workshop</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">Service & Repair Bay</h3>
                </div>
            </div>

            <!-- Gallery Item 4 - Battery Area -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80">
                <img src="{{ asset('images/gallery-battery-store.png') }}" alt="Battery Store Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Spares & Battery</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">Lithium Battery Inventory</h3>
                </div>
            </div>

            <!-- Gallery Item 5 - Logo Brand Feature -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-white border border-gray-100 h-80 flex items-center justify-center p-6">
                <img src="{{ asset('images/kb-mobility-logo.jpg') }}" alt="KB Mobility Brand" class="max-h-full max-w-full object-contain transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Certified Brand</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">KB Mobility Official</h3>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="bg-gray-50 py-16 text-center border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 md:mb-0 tracking-tight text-left">Seen enough? Let's fix your ride.</h2>
        <a href="{{ route('book') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold uppercase tracking-wider rounded-md text-black bg-[#4CAF50] hover:bg-[#43a047] transition-colors shadow-[0_0_20px_rgba(117,209,24,0.3)]">
            Book Appointment
        </a>
    </div>
</div>
@endsection
