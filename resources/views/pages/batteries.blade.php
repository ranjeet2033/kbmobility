@extends('layouts.main')

@section('title', 'EV, Solar, Inverter & UPS Batteries in Uttam Nagar, New Delhi | KB Mobility')
@section('meta_description', 'Buy 2W & 3W EV lithium batteries, Solar Inverter batteries, Home Inverter batteries, and UPS batteries in Uttam Nagar West, New Delhi. Grade-A LiFePO4 & Lithium-ion packs by KB Mobility.')

@section('content')

<!-- Hero Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center kb-fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-[#4CAF50] mr-2 kb-dot-ping"></span>
            2W • 3W • Solar • Inverter • UPS Batteries
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
            KB Mobility <span class="kb-gradient-text">Batteries</span>
        </h1>
        <p class="text-base md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            High-efficiency Lithium-ion &amp; LiFePO4 battery solutions for 2-wheelers, 3-wheeler e-rickshaws, solar inverter setups, home inverters, and commercial UPS systems.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#battery-catalog" class="kb-btn-primary px-8 py-4 rounded-full font-bold text-base flex items-center justify-center">
                Explore Batteries
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <a href="{{ route('book', ['service' => 'Battery Repair']) }}" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Book Battery Check
            </a>
        </div>
    </div>
</div>

<!-- Batteries Catalog Grid -->
<div class="py-12 sm:py-16 bg-white" id="battery-catalog" x-data="{ filter: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 font-heading">Complete Battery Range</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">
                Engineered for long backup, fast charging, and thermal safety with smart BMS protection.
            </p>
        </div>

        <!-- Category Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-10">
            <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-700 border-gray-200 hover:border-[#4CAF50]'" class="px-5 py-2 rounded-full border text-sm font-bold transition-colors">All Batteries</button>
            <button @click="filter = 'ev'" :class="filter === 'ev' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-700 border-gray-200 hover:border-[#4CAF50]'" class="px-5 py-2 rounded-full border text-sm font-bold transition-colors">EV Batteries (2W / 3W / 4W)</button>
            <button @click="filter = 'power'" :class="filter === 'power' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-700 border-gray-200 hover:border-[#4CAF50]'" class="px-5 py-2 rounded-full border text-sm font-bold transition-colors">Solar, Inverter &amp; UPS</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- 1. 2W Battery -->
            <div x-show="filter === 'all' || filter === 'ev'" x-transition class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-green-50 text-green-600 text-xs font-bold rounded-full border border-green-100 uppercase tracking-wider">2W Battery</span>
                        <span class="text-xs font-semibold text-gray-500">Electric Scooters</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">2W Lithium Battery</h3>
                    <p class="text-xs text-gray-500 mt-0.5">High-mileage 48V / 60V / 72V packs for all e-scooters</p>
                </div>
                <div class="h-60 flex items-center justify-center p-4 bg-white">
                    <img src="{{ asset('images/battery-2w-lithium.jpg') }}" alt="2W EV Scooter Lithium Battery" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">60V / 72V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Voltage</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">24Ah - 42Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Capacity</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">80-120 km</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Range</div>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Smart Micro-BMS with thermal cutoff</li>
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Detachable portable handle &amp; Anderson plug</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%202W%20Battery." target="_blank" rel="noopener noreferrer" class="w-full py-3 bg-gray-900 hover:bg-[#4CAF50] text-white text-xs font-bold uppercase tracking-wider rounded-xl text-center transition-colors">
                        Enquire Now
                    </a>
                </div>
            </div>

            <!-- 2. 3W Battery -->
            <div x-show="filter === 'all' || filter === 'ev'" x-transition class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded-full border border-blue-100 uppercase tracking-wider">3W Battery</span>
                        <span class="text-xs font-semibold text-gray-500">E-Rickshaw &amp; Loader</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">3W LiFePO4 Battery</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Heavy-duty commercial pack for passenger &amp; cargo</p>
                </div>
                <div class="h-60 flex items-center justify-center p-4 bg-white">
                    <img src="{{ asset('images/battery-3w-lithium.jpg') }}" alt="3W E-Rickshaw LiFePO4 Battery" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
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
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Range</div>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Prismatic LiFePO4 cells (2500+ cycles)</li>
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Live SOC LCD display &amp; rugged steel body</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%203W%20E-Rickshaw%20Battery." target="_blank" rel="noopener noreferrer" class="w-full py-3 bg-gray-900 hover:bg-[#4CAF50] text-white text-xs font-bold uppercase tracking-wider rounded-xl text-center transition-colors">
                        Enquire Now
                    </a>
                </div>
            </div>

            <!-- 3. Solar Inverter Battery -->
            <div x-show="filter === 'all' || filter === 'power'" x-transition class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-amber-50 text-amber-700 text-xs font-bold rounded-full border border-amber-100 uppercase tracking-wider">Solar Inverter</span>
                        <span class="text-xs font-semibold text-gray-500">Solar Storage</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">Solar Inverter Battery</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Deep-cycle storage built for solar MPPT &amp; hybrid inverters</p>
                </div>
                <div class="h-60 flex items-center justify-center p-4 bg-white">
                    <img src="{{ asset('images/battery-solar-inverter.jpg') }}" alt="Solar Inverter Battery" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">12V / 24V / 48V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Options</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">100Ah - 200Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Capacity</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">C10 Rated</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Discharge</div>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>High solar charge acceptance &amp; low self-discharge</li>
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Ideal for rooftop solar home &amp; shop systems</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%20Solar%20Inverter%20Battery." target="_blank" rel="noopener noreferrer" class="w-full py-3 bg-gray-900 hover:bg-[#4CAF50] text-white text-xs font-bold uppercase tracking-wider rounded-xl text-center transition-colors">
                        Enquire Now
                    </a>
                </div>
            </div>

            <!-- 4. Inverter Battery -->
            <div x-show="filter === 'all' || filter === 'power'" x-transition class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-teal-50 text-teal-700 text-xs font-bold rounded-full border border-teal-100 uppercase tracking-wider">Inverter Battery</span>
                        <span class="text-xs font-semibold text-gray-500">Home &amp; Office</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">Inverter Battery</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Long-backup power packs for residential &amp; shop inverters</p>
                </div>
                <div class="h-60 flex items-center justify-center p-4 bg-white">
                    <img src="{{ asset('images/battery-inverter.jpg') }}" alt="Home Inverter Battery" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">12V / 24V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Voltage</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">100Ah - 150Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Capacity</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">Fast Recharge</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Efficiency</div>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Zero-fume maintenance-free lithium &amp; tubular options</li>
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Consistent voltage during frequent power cuts</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%20Inverter%20Battery." target="_blank" rel="noopener noreferrer" class="w-full py-3 bg-gray-900 hover:bg-[#4CAF50] text-white text-xs font-bold uppercase tracking-wider rounded-xl text-center transition-colors">
                        Enquire Now
                    </a>
                </div>
            </div>

            <!-- 5. UPS Battery -->
            <div x-show="filter === 'all' || filter === 'power'" x-transition class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-indigo-50 text-indigo-700 text-xs font-bold rounded-full border border-indigo-100 uppercase tracking-wider">UPS Battery</span>
                        <span class="text-xs font-semibold text-gray-500">IT &amp; Commercial</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">UPS Battery</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Instant switchover backup for servers, POS &amp; offices</p>
                </div>
                <div class="h-60 flex items-center justify-center p-4 bg-white">
                    <img src="{{ asset('images/battery-ups.jpg') }}" alt="UPS Battery Pack" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">12V / 24V / 48V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Voltage</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">7Ah - 100Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Range</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">High-Rate</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Backup</div>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Compact sealed design for online &amp; offline UPS</li>
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Built-in overcharge &amp; short-circuit protection</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%20UPS%20Battery." target="_blank" rel="noopener noreferrer" class="w-full py-3 bg-gray-900 hover:bg-[#4CAF50] text-white text-xs font-bold uppercase tracking-wider rounded-xl text-center transition-colors">
                        Enquire Now
                    </a>
                </div>
            </div>

            <!-- 6. 4W Commercial EV Battery -->
            <div x-show="filter === 'all' || filter === 'ev'" x-transition class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden kb-card-hover group flex flex-col">
                <div class="p-6 pb-2">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-bold rounded-full border border-gray-200 uppercase tracking-wider">4W Battery</span>
                        <span class="text-xs font-semibold text-gray-500">Commercial &amp; Fleet</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#4CAF50] transition-colors">4W Modular EV Pack</h3>
                    <p class="text-xs text-gray-500 mt-0.5">Industrial 72V / 96V packs for commercial loaders &amp; vans</p>
                </div>
                <div class="h-60 flex items-center justify-center p-4 bg-white">
                    <img src="{{ asset('images/battery-4w-lithium.jpg') }}" alt="4W Commercial EV Lithium Battery" class="max-h-full max-w-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6 flex-grow flex flex-col justify-between">
                    <div class="grid grid-cols-3 gap-2 mb-5">
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">72V / 96V</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Voltage</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">150Ah - 200Ah</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Capacity</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-2.5 text-center border border-gray-100">
                            <div class="text-xs font-bold text-gray-900">IP67</div>
                            <div class="text-[10px] text-gray-500 uppercase mt-0.5">Protection</div>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs text-gray-600 mb-6 font-medium">
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>CAN-Bus communication with dual master BMS</li>
                        <li class="flex items-center"><svg class="w-4 h-4 text-[#4CAF50] mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Cooling heat-sink fins for continuous commercial duty</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20am%20interested%20in%204W%20EV%20Battery." target="_blank" rel="noopener noreferrer" class="w-full py-3 bg-gray-900 hover:bg-[#4CAF50] text-white text-xs font-bold uppercase tracking-wider rounded-xl text-center transition-colors">
                        Enquire Now
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Exchange & Service CTA -->
<div class="bg-gray-50 py-14 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl p-8 border border-green-100 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <h3 class="text-2xl font-extrabold text-gray-900 mb-2">Need Battery Repair or Lead-Acid to Lithium Upgrade?</h3>
                <p class="text-gray-600 text-sm sm:text-base max-w-2xl">We also repair 2W, 3W (E-Rickshaw), and 4W batteries with cell balancing and BMS replacement, plus instant exchange bonus on old batteries.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0 w-full sm:w-auto">
                <a href="{{ route('services') }}" class="px-6 py-3 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold text-sm rounded-xl shadow-md text-center transition-colors sm:whitespace-nowrap">
                    Battery Repair Services
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 bg-gray-900 hover:bg-gray-800 text-white font-bold text-sm rounded-xl shadow-sm text-center transition-colors sm:whitespace-nowrap">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
