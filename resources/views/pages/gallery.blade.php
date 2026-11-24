@extends('layouts.main')

@section('title', 'Gallery – Infravolte Mobility Showroom & Workshop Photos')
@section('meta_description', 'Explore real photos of Infravolte Mobility’s EV showroom, battery store, and repair workshop in Prayagraj. See our state-of-the-art facilities.')

@section('content')
<div class="relative overflow-hidden bg-white py-20 border-b border-gray-100">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at top right, #75d118 0%, transparent 60%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-[#4CAF50] font-bold text-sm tracking-widest uppercase mb-4">
            <span class="w-8 h-[2px] bg-[#4CAF50]"></span>
            <span>Inside Infravolte Mobility</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900">Company Gallery</h1>
        <p class="mt-6 text-xl text-gray-600 max-w-2xl mx-auto font-sans">Take a peek inside our state-of-the-art diagnostic workshops, inventory warehouses, and showroom floors.</p>
    </div>
</div>

<div class="py-20 bg-white relative" x-data="{ filter: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Gallery Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button @click="filter = 'all'" :class="filter === 'all' ? 'px-6 py-2 rounded-full border border-[#4CAF50] text-black bg-[#4CAF50] font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-200 text-gray-600 hover:text-gray-900 hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">All Photos</button>
            <button @click="filter = 'workshop'" :class="filter === 'workshop' ? 'px-6 py-2 rounded-full border border-[#4CAF50] text-black bg-[#4CAF50] font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-200 text-gray-600 hover:text-gray-900 hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">Workshop</button>
            <button @click="filter = 'showroom'" :class="filter === 'showroom' ? 'px-6 py-2 rounded-full border border-[#4CAF50] text-black bg-[#4CAF50] font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-200 text-gray-600 hover:text-gray-900 hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">Showroom</button>
        </div>

        <!-- CSS Grid Gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            
            <!-- Gallery Item 1 -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80">
                <img src="{{ asset('images/gallery-battery-store.png') }}" alt="Battery Store Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Workshop</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-1 drop-shadow-lg">Battery Store Area</h3>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80">
                <img src="{{ asset('images/gallery-showroom.jpg') }}" alt="Infravolte Mobility Showroom" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Showroom</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-1 drop-shadow-lg">Our Showroom Floor</h3>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80">
                <img src="{{ asset('images/gallery-workshop.jpg') }}" alt="EV Workshop Service Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Workshop</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-1 drop-shadow-lg">Service & Repair Bay</h3>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80 md:col-span-2">
                <img src="{{ asset('images/gallery-showroom.jpg') }}" alt="Infravolte Mobility Showroom" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/20 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Showroom</span>
                    <h3 class="text-2xl font-bold text-gray-900 mt-2 drop-shadow-lg">Our Prayagraj Showroom</h3>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80">
                <img src="{{ asset('images/gallery-battery-store.png') }}" alt="Battery Store Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Workshop</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-1 drop-shadow-lg">Battery Inventory</h3>
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
