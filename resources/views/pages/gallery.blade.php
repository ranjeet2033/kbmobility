@extends('layouts.main')

@section('title', 'Gallery – Showroom, Battery & Charger Repair Photos & Videos | KB Mobility')
@section('meta_description', 'Explore real photos and repair videos of KB Mobility’s EV showroom, 2W/3W/4W battery repairing, IP57/IP67/IP65 charger repairing, and workshop in Uttam Nagar West, New Delhi.')

@section('content')
<!-- Modern Hero Banner Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 kb-fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-green-500 mr-2 kb-dot-ping"></span>
            Photos &amp; Videos • Uttam Nagar West
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-4 font-heading">
            Showroom &amp; Repair <span class="kb-gradient-text">Gallery</span>
        </h1>
        <p class="mt-3 text-base md:text-lg text-gray-600 max-w-2xl mx-auto font-sans leading-relaxed">
            Explore our Uttam Nagar showroom, EV scooter fleet, plus real photos &amp; videos of 2W/3W/4W Battery Repairing and IP57/IP67/IP65 Charger Repairing.
        </p>
    </div>
</div>

<div class="py-12 sm:py-16 bg-white relative" x-data="{ filter: 'all', modalOpen: false, modalTitle: '', modalImg: '', modalDesc: '', modalType: 'photo' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Gallery Filters -->
        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 mb-10">
            <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-600 border-gray-200 hover:border-gray-500'" class="px-5 py-2 rounded-full border font-bold text-xs sm:text-sm uppercase tracking-wider transition-colors">All</button>
            <button @click="filter = 'showroom'" :class="filter === 'showroom' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-600 border-gray-200 hover:border-gray-500'" class="px-5 py-2 rounded-full border font-bold text-xs sm:text-sm uppercase tracking-wider transition-colors">Showroom &amp; Fleet</button>
            <button @click="filter = 'battery-repair'" :class="filter === 'battery-repair' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-600 border-gray-200 hover:border-gray-500'" class="px-5 py-2 rounded-full border font-bold text-xs sm:text-sm uppercase tracking-wider transition-colors">Battery Repair (Photos &amp; Videos)</button>
            <button @click="filter = 'charger-repair'" :class="filter === 'charger-repair' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-600 border-gray-200 hover:border-gray-500'" class="px-5 py-2 rounded-full border font-bold text-xs sm:text-sm uppercase tracking-wider transition-colors">Charger Repair (Photos &amp; Videos)</button>
            <button @click="filter = 'workshop'" :class="filter === 'workshop' ? 'bg-[#4CAF50] text-white border-[#4CAF50]' : 'bg-white text-gray-600 border-gray-200 hover:border-gray-500'" class="px-5 py-2 rounded-full border font-bold text-xs sm:text-sm uppercase tracking-wider transition-colors">Workshop &amp; Spares</button>
        </div>

        <!-- CSS Grid Gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Showroom Lineup -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80 md:col-span-2 cursor-pointer" @click="modalOpen = true; modalTitle = 'KB Mobility Electric Scooter Lineup'; modalImg = '{{ asset('images/kb-showroom-1.jpg') }}'; modalDesc = 'Our showroom lineup of premium electric scooters in Uttam Nagar West, New Delhi.'; modalType = 'photo'">
                <img src="{{ asset('images/kb-showroom-1.jpg') }}" alt="KB Mobility Showroom Floor Fleet" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-95 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/30 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest">Showroom Floor</span>
                    <h3 class="text-2xl font-bold text-white mt-1">KB Mobility Electric Scooter Lineup</h3>
                    <p class="text-xs text-gray-300 mt-1">Our showroom lineup of premium electric scooters in New Delhi.</p>
                </div>
            </div>

            <!-- Showroom Fleet View -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = 'Showroom Fleet View'; modalImg = '{{ asset('images/kb-showroom-2.jpg') }}'; modalDesc = 'Uttam Nagar West, New Delhi Showroom'; modalType = 'photo'">
                <img src="{{ asset('images/kb-showroom-2.jpg') }}" alt="KB Mobility Showroom" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-95 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest">Delhi Fleet</span>
                    <h3 class="text-xl font-bold text-white mt-1">Showroom Fleet View</h3>
                    <p class="text-xs text-gray-300 mt-1">Uttam Nagar West, New Delhi</p>
                </div>
            </div>

            <!-- Battery Repair 2W (Photo & Video) -->
            <div x-show="filter === 'all' || filter === 'battery-repair'" x-transition class="group relative rounded-2xl overflow-hidden bg-white border border-gray-200 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = '2W Battery Repairing – Photo & Video'; modalImg = '{{ asset('images/battery-2w-lithium.jpg') }}'; modalDesc = 'Cell-level balancing, BMS replacement & load testing for 2-wheeler EV scooter lithium battery packs.'; modalType = 'video'">
                <img src="{{ asset('images/battery-2w-lithium.jpg') }}" alt="2W Battery Repairing Photo and Video" class="w-full h-full object-contain p-4 transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-black/75 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[#4CAF50]" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Photo &amp; Video
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-85"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest">Battery Repair</span>
                    <h3 class="text-xl font-bold text-white mt-1">2W Battery Repairing</h3>
                    <p class="text-xs text-gray-300 mt-1">Cell balancing &amp; BMS diagnostics</p>
                </div>
            </div>

            <!-- Battery Repair 3W E-Rickshaw (Photo & Video) -->
            <div x-show="filter === 'all' || filter === 'battery-repair'" x-transition class="group relative rounded-2xl overflow-hidden bg-white border border-gray-200 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = '3W (E-Rickshaw) Battery Repair – Photo & Video'; modalImg = '{{ asset('images/battery-3w-lithium.jpg') }}'; modalDesc = 'Prismatic LiFePO4 cell testing and high-current BMS repair for 3-wheeler E-Rickshaws.'; modalType = 'video'">
                <img src="{{ asset('images/battery-3w-lithium.jpg') }}" alt="3W E-Rickshaw Battery Repair Photo and Video" class="w-full h-full object-contain p-4 transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-black/75 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[#4CAF50]" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Photo &amp; Video
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-85"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-blue-400 font-bold text-xs uppercase tracking-widest">Battery Repair</span>
                    <h3 class="text-xl font-bold text-white mt-1">3W (E-Rickshaw) Battery Repair</h3>
                    <p class="text-xs text-gray-300 mt-1">LiFePO4 pack repair &amp; testing</p>
                </div>
            </div>

            <!-- Battery Repair 4W (Photo & Video) -->
            <div x-show="filter === 'all' || filter === 'battery-repair'" x-transition class="group relative rounded-2xl overflow-hidden bg-white border border-gray-200 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = '4W Battery Repair – Photo & Video'; modalImg = '{{ asset('images/battery-4w-lithium.jpg') }}'; modalDesc = 'Modular 72V/96V commercial EV battery repair and CAN-Bus BMS servicing.'; modalType = 'video'">
                <img src="{{ asset('images/battery-4w-lithium.jpg') }}" alt="4W Battery Repair Photo and Video" class="w-full h-full object-contain p-4 transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-black/75 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[#4CAF50]" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Photo &amp; Video
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-85"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-purple-400 font-bold text-xs uppercase tracking-widest">Battery Repair</span>
                    <h3 class="text-xl font-bold text-white mt-1">4W Battery Repair</h3>
                    <p class="text-xs text-gray-300 mt-1">Modular commercial EV pack repair</p>
                </div>
            </div>

            <!-- Charger Repair IP57 (Photo & Video) -->
            <div x-show="filter === 'all' || filter === 'charger-repair'" x-transition class="group relative rounded-2xl overflow-hidden bg-white border border-gray-200 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = 'IP57 Charger Repairing – Photo & Video'; modalImg = '{{ asset('images/charger-ip57.jpg') }}'; modalDesc = '48V/60V/72V (6A–25A) IP57 EV charger chip-level repair, MOSFET & auto-cutoff calibration.'; modalType = 'video'">
                <img src="{{ asset('images/charger-ip57.jpg') }}" alt="IP57 Charger Repairing Photo and Video" class="w-full h-full object-contain p-4 transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-black/75 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[#4CAF50]" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Photo &amp; Video
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-85"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest">Charger Repairing</span>
                    <h3 class="text-xl font-bold text-white mt-1">IP57 Charger (48V/60V/72V)</h3>
                    <p class="text-xs text-gray-300 mt-1">MOSFET &amp; cutoff circuit repair</p>
                </div>
            </div>

            <!-- Charger Repair IP67 (Photo & Video) -->
            <div x-show="filter === 'all' || filter === 'charger-repair'" x-transition class="group relative rounded-2xl overflow-hidden bg-white border border-gray-200 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = 'IP67 Charger Repairing – Photo & Video'; modalImg = '{{ asset('images/service-charger.png') }}'; modalDesc = 'Waterproof IP67 EV charger diagnostics, power stage repair, and thermal seal restoration.'; modalType = 'video'">
                <img src="{{ asset('images/service-charger.png') }}" alt="IP67 Charger Repairing Photo and Video" class="w-full h-full object-contain p-4 transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-black/75 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[#4CAF50]" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Photo &amp; Video
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-85"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-blue-400 font-bold text-xs uppercase tracking-widest">Charger Repairing</span>
                    <h3 class="text-xl font-bold text-white mt-1">IP67 Charger Repairing</h3>
                    <p class="text-xs text-gray-300 mt-1">Waterproof high-ampere charger repair</p>
                </div>
            </div>

            <!-- Charger Repair IP65 (Photo & Video) -->
            <div x-show="filter === 'all' || filter === 'charger-repair'" x-transition class="group relative rounded-2xl overflow-hidden bg-white border border-gray-200 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = 'IP65 Charger Repairing – Photo & Video'; modalImg = '{{ asset('images/charger-ip65.jpg') }}'; modalDesc = 'Sealed industrial IP65 charger repair including display module, relay, and surge protection.'; modalType = 'video'">
                <img src="{{ asset('images/charger-ip65.jpg') }}" alt="IP65 Charger Repairing Photo and Video" class="w-full h-full object-contain p-4 transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-black/75 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[#4CAF50]" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Photo &amp; Video
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-85"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-indigo-400 font-bold text-xs uppercase tracking-widest">Charger Repairing</span>
                    <h3 class="text-xl font-bold text-white mt-1">IP65 Charger Repairing</h3>
                    <p class="text-xs text-gray-300 mt-1">Sealed industrial charger servicing</p>
                </div>
            </div>

            <!-- Workshop -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = 'Service & Repair Bay'; modalImg = '{{ asset('images/gallery-workshop.jpg') }}'; modalDesc = 'Our Uttam Nagar West EV workshop bay equipped for controller, motor & battery diagnostics.'; modalType = 'photo'">
                <img src="{{ asset('images/gallery-workshop.jpg') }}" alt="EV Workshop Service Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest">Workshop</span>
                    <h3 class="text-xl font-bold text-white mt-1">Service &amp; Repair Bay</h3>
                </div>
            </div>

            <!-- Battery Area -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative rounded-2xl overflow-hidden bg-green-50 border border-gray-100 h-80 cursor-pointer" @click="modalOpen = true; modalTitle = 'Lithium Battery Inventory'; modalImg = '{{ asset('images/gallery-battery-store.png') }}'; modalDesc = 'Stock of 2W, 3W, Solar Inverter, Home Inverter, and UPS batteries.'; modalType = 'photo'">
                <img src="{{ asset('images/gallery-battery-store.png') }}" alt="Battery Store Area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="text-[#4CAF50] font-bold text-xs uppercase tracking-widest">Spares &amp; Battery</span>
                    <h3 class="text-xl font-bold text-white mt-1">Lithium Battery Inventory</h3>
                </div>
            </div>

            <!-- Brand Logo -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative rounded-2xl overflow-hidden bg-white border border-gray-100 h-80 flex items-center justify-center p-6">
                <img src="{{ asset('images/kb-mobility-logo.jpg') }}" alt="KB Mobility Brand" class="max-h-full max-w-full object-contain transition-transform duration-700 group-hover:scale-105">
            </div>

        </div>
    </div>

    <!-- Lightbox Modal for Photos & Videos -->
    <div x-show="modalOpen" x-cloak style="display: none;" class="fixed inset-0 z-50 bg-black/80 flex items-center justify-center p-4" @click.self="modalOpen = false">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-extrabold text-gray-900" x-text="modalTitle"></h3>
                <button @click="modalOpen = false" class="text-gray-500 hover:text-gray-900 text-2xl leading-none">&times;</button>
            </div>
            <div class="p-6 bg-gray-50 flex flex-col items-center">
                <img :src="modalImg" :alt="modalTitle" class="max-h-80 w-auto object-contain rounded-xl mb-4">
                <p class="text-sm text-gray-600 text-center mb-4" x-text="modalDesc"></p>
                <template x-if="modalType === 'video'">
                    <a href="https://wa.me/918808363701?text=Hi%20KB%20Mobility%2C%20please%20share%20workshop%20repair%20videos%20and%20details." target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-5 py-2.5 bg-[#4CAF50] hover:bg-[#43a047] text-white text-xs font-bold uppercase tracking-wider rounded-full transition-colors">
                        Request Live Workshop Video on WhatsApp
                    </a>
                </template>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-16 text-center border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 md:mb-0 tracking-tight text-left">Seen enough? Let's fix your ride.</h2>
        <a href="{{ route('book') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold uppercase tracking-wider rounded-md text-white bg-[#4CAF50] hover:bg-[#43a047] transition-colors shadow-md">
            Book Appointment
        </a>
    </div>
</div>
@endsection
