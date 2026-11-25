@extends('layouts.main')

@section('title', '2W & 3W Accessories and Spare Parts in New Delhi | KB Mobility')
@section('meta_description', 'Buy genuine 2W EV scooter spare parts and 3W e-rickshaw spare parts in Uttam Nagar West, New Delhi. Motors, controllers, throttles, brakes, wiring harness, differentials & chargers.')

@section('content')

<!-- Modern Hero Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center kb-fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-green-500 mr-2 kb-dot-ping"></span>
            OEM Certified Quality • 2W &amp; 3W
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
            2W &amp; 3W <span class="kb-gradient-text">Accessories &amp; Spare Parts</span>
        </h1>
        <p class="text-base md:text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Complete stock of genuine 2-wheeler electric scooter spare parts and 3-wheeler e-rickshaw / e-loader spare parts in New Delhi.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#spare-parts-lists" class="kb-btn-primary px-8 py-4 rounded-full font-bold text-base flex items-center justify-center">
                View Spare Parts List
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <a href="{{ route('book') }}" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Book Installation
            </a>
        </div>
    </div>
</div>

<!-- 2W Spare Parts & 3W Spare Parts Lists -->
<div class="py-12 sm:py-16 bg-white" id="spare-parts-lists">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">2W &amp; 3W Spare Parts Catalog</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">Wholesale &amp; retail availability for all major electric scooter and e-rickshaw models.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- 2W Spare Parts -->
            <div class="bg-gray-50 rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col">
                <div class="h-64 bg-white p-6 flex items-center justify-center border-b border-gray-100">
                    <img src="{{ asset('images/parts-2w-spares.jpg') }}" alt="2W Spare Parts List" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                </div>
                <div class="p-5 sm:p-8 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-extrabold text-gray-900">2W Spare Parts</h3>
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full uppercase">Electric Scooters</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6">Genuine replacement parts for Single Light, Double Light, Activa, Old, BMW &amp; TVS iQube models:</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700 font-medium mb-8">
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>BLDC Hub Motor (10" / 12")</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>Smart Controller (48V/60V/72V)</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>Throttle &amp; Grip Set</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>DC-DC Converter (12V)</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>Brake Pads &amp; Disc Rotor</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>Main Wiring Harness</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>LED Headlight &amp; Indicators</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>Digital Speedometer</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>Front &amp; Rear Shockers</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-[#4CAF50] mr-2.5"></span>MCB, Ignition Lock &amp; Socket</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20need%20a%20quote%20for%202W%20Spare%20Parts." target="_blank" rel="noopener noreferrer" class="mt-auto w-full bg-gray-900 hover:bg-[#4CAF50] text-white text-center px-6 py-3.5 rounded-xl font-bold text-sm uppercase tracking-wider transition-colors">
                        Order 2W Spare Parts
                    </a>
                </div>
            </div>

            <!-- 3W Spare Parts -->
            <div class="bg-gray-50 rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col">
                <div class="h-64 bg-white p-6 flex items-center justify-center border-b border-gray-100">
                    <img src="{{ asset('images/parts-3w-spares.jpg') }}" alt="3W Spare Parts List" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                </div>
                <div class="p-5 sm:p-8 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-extrabold text-gray-900">3W Spare Parts</h3>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-full uppercase">E-Rickshaw &amp; Loader</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6">Heavy-duty commercial spare parts for passenger E-Rickshaws and Cargo E-Loaders:</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700 font-medium mb-8">
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>Differential &amp; Rear Axle</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>1000W–1200W Traction Motor</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>Heavy-Duty 3W Controller</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>Leaf Spring &amp; Shocker</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>Brake Drum, Shoe &amp; Cable</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>3W Main Wiring Harness</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>Accelerator Pedal / Throttle</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>Wiper Motor, Glass &amp; Roof</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>DC Converter &amp; Flasher</li>
                        <li class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-600 mr-2.5"></span>Heavy-Duty Rim &amp; Tyres</li>
                    </ul>
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20I%20need%20a%20quote%20for%203W%20E-Rickshaw%20Spare%20Parts." target="_blank" rel="noopener noreferrer" class="mt-auto w-full bg-gray-900 hover:bg-blue-600 text-white text-center px-6 py-3.5 rounded-xl font-bold text-sm uppercase tracking-wider transition-colors">
                        Order 3W Spare Parts
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Essential Components Grid -->
<div class="py-12 sm:py-16 bg-gray-50 border-t border-gray-100" id="parts">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Essential Components</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">High-quality components sourced directly for 2-wheeler scooties and 3-wheeler e-rickshaws.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Part Card 1 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img src="{{ asset('images/service-battery.png') }}" alt="Lithium battery packs and cells" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Battery Packs &amp; Cells</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">Grade A lithium-ion cells with smart BMS protection for all major EV scooter brands.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">Get Quote</a>
                </div>
            </div>

            <!-- Part Card 2 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img src="{{ asset('images/service-maintenance.png') }}" alt="Smart BLDC Controller" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Smart Controllers</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">30A–60A BLDC controllers (IP57 &amp; IP65) with cruise control &amp; regenerative braking support.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">Get Quote</a>
                </div>
            </div>

            <!-- Part Card 3 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img src="{{ asset('images/service-motor.png') }}" alt="BLDC Hub Motor" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">BLDC Hub Motors</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">High-torque rear hub motors available in 10" and 12" variants for extreme durability.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">Get Quote</a>
                </div>
            </div>

            <!-- Part Card 4 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:border-purple-200 transition-all duration-300 group shadow-sm hover:shadow-xl flex flex-col">
                <div class="relative h-48 overflow-hidden bg-purple-50 p-6 flex items-center justify-center">
                    <img src="{{ asset('images/service-charger.png') }}" alt="EV Fast Charger" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 drop-shadow-lg" loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Fast Chargers</h4>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">48V, 60V, and 72V (6A–25A) IP57 &amp; IP65 smart chargers with auto-cutoff safety.</p>
                    <a href="{{ route('contact') }}" class="mt-auto w-full inline-flex justify-center items-center px-4 py-3 border border-gray-200 hover:border-purple-600 hover:bg-purple-600 hover:text-white rounded-lg text-sm font-bold uppercase tracking-wide transition-colors text-gray-900">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
