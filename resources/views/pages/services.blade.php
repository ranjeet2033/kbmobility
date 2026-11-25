@extends('layouts.main')

@section('title', 'EV Repair Services – Battery, Charger, Controller & Motor | KB Mobility')
@section('meta_description', 'Expert EV repair services in Uttam Nagar West, New Delhi: 2W/3W/4W Battery Repair, IP57/IP67/IP65 Charger Repair, Chinese & Branded Controller Repair, and Motor Repair.')

@section('content')
<!-- Modern Hero Banner Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 kb-fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-green-500 mr-2 kb-dot-ping"></span>
            EV Diagnostics &amp; Repair • New Delhi
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
            Our <span class="kb-gradient-text">EV Services</span>
        </h1>
        <p class="text-base md:text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Specialized repair and diagnostics for Battery Packs (2W, 3W, 4W), IP57/IP67/IP65 Chargers, Controllers, and Motors for both Chinese &amp; Branded EVs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('book') }}" class="kb-btn-primary px-8 py-4 rounded-full font-bold text-base flex items-center justify-center">
                Book Service Online
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="tel:+918808363701" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Call +91 8808363701
            </a>
        </div>
    </div>
</div>

<!-- 1. Battery Repair Section (2W, 3W E-Rickshaw, 4W with Photo & Videos) -->
<div class="py-12 sm:py-16 bg-white" id="battery-repair">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-[#4CAF50]">Cell Balancing &amp; BMS Repair</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1">Battery Repair</h2>
            <p class="text-gray-500 mt-2 max-w-2xl mx-auto">Complete lithium &amp; LiFePO4 battery diagnostics, weak cell replacement, and BMS repair with workshop photo &amp; video documentation.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- 2W Battery Repairing -->
            <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 hover:border-[#4CAF50]/50 transition-all flex flex-col">
                <div class="relative h-52 bg-white p-4 flex items-center justify-center">
                    <img src="{{ asset('images/battery-2w-lithium.jpg') }}" alt="2W Battery Repairing" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                    <span class="absolute top-3 right-3 px-2.5 py-1 bg-green-50 text-[#4CAF50] text-[11px] font-bold rounded-full border border-green-100">Photos &amp; Videos</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">2W Battery Repairing</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">Cell-level balancing, BMS replacement, and range restoration for 48V, 60V &amp; 72V electric scooter battery packs.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                        <a href="{{ route('gallery') }}" class="text-xs font-bold text-gray-600 hover:text-[#4CAF50] uppercase tracking-wider">View Photos &amp; Videos</a>
                        <a href="{{ route('book', ['service' => '2W Battery Repairing']) }}" class="text-xs font-bold text-[#4CAF50] hover:underline uppercase tracking-wider">Book Repair →</a>
                    </div>
                </div>
            </div>

            <!-- 3W (E-Rickshaw) Battery Repair -->
            <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 hover:border-[#4CAF50]/50 transition-all flex flex-col">
                <div class="relative h-52 bg-white p-4 flex items-center justify-center">
                    <img src="{{ asset('images/battery-3w-lithium.jpg') }}" alt="3W E-Rickshaw Battery Repair" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                    <span class="absolute top-3 right-3 px-2.5 py-1 bg-blue-50 text-blue-600 text-[11px] font-bold rounded-full border border-blue-100">Photos &amp; Videos</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">3W (E-Rickshaw) Battery Repair</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">Heavy-duty LiFePO4 prismatic cell testing, terminal overhaul, and high-current BMS repair for passenger &amp; cargo e-rickshaws.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                        <a href="{{ route('gallery') }}" class="text-xs font-bold text-gray-600 hover:text-[#4CAF50] uppercase tracking-wider">View Photos &amp; Videos</a>
                        <a href="{{ route('book', ['service' => '3W E-Rickshaw Battery Repair']) }}" class="text-xs font-bold text-[#4CAF50] hover:underline uppercase tracking-wider">Book Repair →</a>
                    </div>
                </div>
            </div>

            <!-- 4W Battery Repair -->
            <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 hover:border-[#4CAF50]/50 transition-all flex flex-col">
                <div class="relative h-52 bg-white p-4 flex items-center justify-center">
                    <img src="{{ asset('images/battery-4w-lithium.jpg') }}" alt="4W Battery Repair" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                    <span class="absolute top-3 right-3 px-2.5 py-1 bg-purple-50 text-purple-600 text-[11px] font-bold rounded-full border border-purple-100">Photos &amp; Videos</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">4W Battery Repair</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">Modular 72V/96V commercial EV battery diagnostics, CAN-Bus BMS troubleshooting, and thermal pack servicing.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                        <a href="{{ route('gallery') }}" class="text-xs font-bold text-gray-600 hover:text-[#4CAF50] uppercase tracking-wider">View Photos &amp; Videos</a>
                        <a href="{{ route('book', ['service' => '4W Battery Repair']) }}" class="text-xs font-bold text-[#4CAF50] hover:underline uppercase tracking-wider">Book Repair →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 2. Charger Repairing Section (IP57, IP67, IP65 with Photo & Videos) -->
<div class="py-12 sm:py-16 bg-gray-50 border-t border-gray-100" id="charger-repair">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-600">Chip-Level Electronics</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1">Charger Repairing</h2>
            <p class="text-gray-500 mt-2 max-w-2xl mx-auto">Expert MOSFET, IC, transformer, and cooling fan repairs for IP57, IP67, and IP65 EV chargers.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- IP57 Charger Repair -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="relative h-52 bg-white p-4 flex items-center justify-center">
                    <img src="{{ asset('images/charger-ip57.jpg') }}" alt="IP57 Charger Repairing" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                    <span class="absolute top-3 right-3 px-2.5 py-1 bg-green-50 text-[#4CAF50] text-[11px] font-bold rounded-full border border-green-100">Photos &amp; Videos</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">IP57 Charger Repairing</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">48V / 60V / 72V (6A–25A) IP57 charger repair: voltage calibration, cutoff circuit fix, and connector replacement.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <a href="{{ route('gallery') }}" class="text-xs font-bold text-gray-600 hover:text-[#4CAF50] uppercase tracking-wider">View Photos &amp; Videos</a>
                        <a href="{{ route('book', ['service' => 'IP57 Charger Repair']) }}" class="text-xs font-bold text-[#4CAF50] hover:underline uppercase tracking-wider">Book Repair →</a>
                    </div>
                </div>
            </div>

            <!-- IP67 Charger Repair -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="relative h-52 bg-white p-4 flex items-center justify-center">
                    <img src="{{ asset('images/service-charger.png') }}" alt="IP67 Charger Repairing" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                    <span class="absolute top-3 right-3 px-2.5 py-1 bg-blue-50 text-blue-600 text-[11px] font-bold rounded-full border border-blue-100">Photos &amp; Videos</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">IP67 Charger Repairing</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">Waterproof potted IP67 charger diagnostics, high-ampere power stage repair, and thermal seal restoration.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <a href="{{ route('gallery') }}" class="text-xs font-bold text-gray-600 hover:text-[#4CAF50] uppercase tracking-wider">View Photos &amp; Videos</a>
                        <a href="{{ route('book', ['service' => 'IP67 Charger Repair']) }}" class="text-xs font-bold text-[#4CAF50] hover:underline uppercase tracking-wider">Book Repair →</a>
                    </div>
                </div>
            </div>

            <!-- IP65 Charger Repair -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="relative h-52 bg-white p-4 flex items-center justify-center">
                    <img src="{{ asset('images/charger-ip65.jpg') }}" alt="IP65 Charger Repairing" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                    <span class="absolute top-3 right-3 px-2.5 py-1 bg-indigo-50 text-indigo-600 text-[11px] font-bold rounded-full border border-indigo-100">Photos &amp; Videos</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">IP65 Charger Repairing</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">Sealed industrial IP65 charger repair including display module, relay, and surge protection restoration.</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <a href="{{ route('gallery') }}" class="text-xs font-bold text-gray-600 hover:text-[#4CAF50] uppercase tracking-wider">View Photos &amp; Videos</a>
                        <a href="{{ route('book', ['service' => 'IP65 Charger Repair']) }}" class="text-xs font-bold text-[#4CAF50] hover:underline uppercase tracking-wider">Book Repair →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3. Controller Repair & 4. Motor Repair Section -->
<div class="py-12 sm:py-16 bg-white border-t border-gray-100" id="controller-motor">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Controller Repair -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:border-[#4CAF50]/50 transition-colors flex flex-col">
                <div class="h-52 bg-white rounded-2xl p-4 mb-6 flex items-center justify-center">
                    <img src="{{ asset('images/service-controller-repair.jpg') }}" alt="Controller Repair Chinese IP57 and Branded IP65" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                </div>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-3">Controller Repair</h2>
                <p class="text-gray-600 mb-6 text-sm leading-relaxed">Complete BLDC &amp; sine-wave controller diagnostics, MOSFET replacement, hall-sensor circuit repair, and throttle calibration.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <div class="text-xs font-bold uppercase text-blue-600 mb-1">Type 1</div>
                        <div class="font-bold text-gray-900">Chinese (IP57)</div>
                        <p class="text-xs text-gray-500 mt-1">Universal 48V/60V/72V Chinese scooter &amp; e-rickshaw controllers.</p>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <div class="text-xs font-bold uppercase text-[#4CAF50] mb-1">Type 2</div>
                        <div class="font-bold text-gray-900">IP65 (Branded Vehicle)</div>
                        <p class="text-xs text-gray-500 mt-1">Sealed OEM controllers for branded 2W &amp; 3W electric vehicles.</p>
                    </div>
                </div>
                <a href="{{ route('book', ['service' => 'Controller Repair']) }}" class="mt-auto inline-flex items-center text-gray-900 hover:text-[#4CAF50] font-bold text-sm uppercase tracking-wider">
                    Book Controller Repair <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

            <!-- Motor Repair -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:border-[#4CAF50]/50 transition-colors flex flex-col">
                <div class="h-52 bg-white rounded-2xl p-4 mb-6 flex items-center justify-center">
                    <img src="{{ asset('images/service-motor.png') }}" alt="EV Motor Repair Chinese and Branded Vehicles" class="max-h-full max-w-full object-contain rounded-xl" loading="lazy">
                </div>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-3">Motor Repair</h2>
                <p class="text-gray-600 mb-6 text-sm leading-relaxed">Hub motor and mid-drive BLDC motor rewinding, hall sensor replacement, bearing overhaul, and waterproofing.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <div class="text-xs font-bold uppercase text-blue-600 mb-1">Category 1</div>
                        <div class="font-bold text-gray-900">Chinese Vehicles</div>
                        <p class="text-xs text-gray-500 mt-1">10" &amp; 12" hub motors and 3W e-rickshaw traction motors.</p>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <div class="text-xs font-bold uppercase text-[#4CAF50] mb-1">Category 2</div>
                        <div class="font-bold text-gray-900">Branded Vehicles</div>
                        <p class="text-xs text-gray-500 mt-1">Precision hall-sensor &amp; winding service for branded EVs.</p>
                    </div>
                </div>
                <a href="{{ route('book', ['service' => 'Motor Repair']) }}" class="mt-auto inline-flex items-center text-gray-900 hover:text-[#4CAF50] font-bold text-sm uppercase tracking-wider">
                    Book Motor Repair <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

        </div>
    </div>
</div>

<div class="bg-green-50 py-16 text-center border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-4 tracking-tight">Need a custom service not listed here?</h2>
        <p class="text-gray-600 mb-6 max-w-xl mx-auto">Visit our Uttam Nagar West workshop or book an appointment online.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold uppercase tracking-wider rounded-md text-white bg-[#4CAF50] hover:bg-[#43a047] transition-colors shadow-md">
            Get in touch with us
        </a>
    </div>
</div>
@endsection
