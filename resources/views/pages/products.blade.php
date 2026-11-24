@extends('layouts.main')

@section('title', 'Buy Electric Scooters in Prayagraj – Alpha, Double Light, City Commuter')
@section('meta_description', 'Buy premium electric scooters in Prayagraj from Infravolte Mobility – Alpha Model (2040W), Single Light (1000W), Double Light (1500W) & City Commuter. Price from ₹65,000.')

@section('content')

<!-- Modern Hero Section -->
<div class="relative bg-gradient-to-b from-gray-50 to-white pt-16 pb-32 overflow-hidden border-b border-gray-100">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-green-100 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full bg-emerald-100 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-sm mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-[#4CAF50] mr-2"></span>
            Smart Commuting
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
            Premium <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#4CAF50] to-[#27ae60]">EV Scooters</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Stylish, powerful, and reliable — our electric scooters are designed for Indian roads. Experience zero emissions, unmatched performance, and cutting-edge design.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#models" class="bg-gradient-to-r from-[#4CAF50] to-[#27ae60] hover:from-[#43a047] hover:to-[#2ecc71] text-white px-8 py-4 rounded-full font-bold text-lg shadow-[0_10px_25px_-5px_rgba(76,175,80,0.4)] transition-all transform hover:-translate-y-1 flex items-center justify-center">
                Explore Models
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('contact') }}" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-lg border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Contact Sales
            </a>
        </div>
    </div>
</div>

<!-- Scooters Grid Section -->
<div class="py-24 bg-white" id="models">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Choose Your Ride</h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-lg">From daily office commutes to long weekend rides, we have the perfect electric scooter for your needs.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">

            <!-- Scooter Card 1 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-green-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(76,175,80,0.12)] flex flex-col relative">
                <!-- Highlight Badge -->
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/90 backdrop-blur-sm text-[#4CAF50] text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Top Seller</span>
                </div>
                
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-green-50 to-emerald-50/30 flex items-center justify-center p-8">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Ola_Electric_Scooter_S1_Pro.jpg/640px-Ola_Electric_Scooter_S1_Pro.jpg"
                        alt="Apex Pro Electric Scooter"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700 drop-shadow-xl"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://placehold.co/600x400/f0fdf4/16a34a?text=EV+Scooter';"
                    >
                </div>
                
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-extrabold text-gray-900">Apex Pro 3.5kWh</h3>
                        <span class="text-gray-900 font-extrabold text-2xl">₹1,15,000</span>
                    </div>
                    
                    <p class="text-gray-600 text-base mb-6 leading-relaxed flex-grow">The ultimate city commuter. Equipped with a 3.5kWh lithium pack, it delivers an impressive 110km range and fast charges in just 4 hours.</p>
                    
                    <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-gray-100">
                        <div class="text-center">
                            <div class="text-[#4CAF50] font-bold text-lg mb-1">110km</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Range</div>
                        </div>
                        <div class="text-center border-l border-r border-gray-100">
                            <div class="text-[#4CAF50] font-bold text-lg mb-1">3.5kWh</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Battery</div>
                        </div>
                        <div class="text-center">
                            <div class="text-[#4CAF50] font-bold text-lg mb-1">4 hr</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Charge</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-[#4CAF50] text-white text-center px-6 py-4 rounded-xl transition-colors font-bold uppercase tracking-wide">
                        Inquire Now
                    </a>
                </div>
            </div>

            <!-- Scooter Card 2 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 hover:border-blue-200 transition-all duration-300 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgba(59,130,246,0.12)] flex flex-col relative">
                <!-- Highlight Badge -->
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/90 backdrop-blur-sm text-blue-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">City Commute</span>
                </div>
                
                <div class="relative h-72 overflow-hidden bg-gradient-to-tr from-blue-50 to-indigo-50/30 flex items-center justify-center p-8">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Hero_Electric_Optima_HX.jpg/640px-Hero_Electric_Optima_HX.jpg"
                        alt="Corsa Urban Electric Scooter"
                        class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700 drop-shadow-xl"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://placehold.co/600x400/eff6ff/2563eb?text=City+EV+Scooter';"
                    >
                </div>
                
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-extrabold text-gray-900">Corsa Urban 2kWh</h3>
                        <span class="text-gray-900 font-extrabold text-2xl">₹85,000</span>
                    </div>
                    
                    <p class="text-gray-600 text-base mb-6 leading-relaxed flex-grow">Lightweight urban scooter built for short city trips. Compact, stylish, and completely fuel-free. Perfect for running daily errands.</p>
                    
                    <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-gray-100">
                        <div class="text-center">
                            <div class="text-blue-600 font-bold text-lg mb-1">65km</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Range</div>
                        </div>
                        <div class="text-center border-l border-r border-gray-100">
                            <div class="text-blue-600 font-bold text-lg mb-1">2.0kWh</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Battery</div>
                        </div>
                        <div class="text-center">
                            <div class="text-blue-600 font-bold text-lg mb-1">75kg</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Weight</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-blue-600 text-white text-center px-6 py-4 rounded-xl transition-colors font-bold uppercase tracking-wide">
                        Inquire Now
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- CTA Banner -->
<div class="bg-white py-12 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-3xl overflow-hidden bg-gray-900">
            <div class="absolute inset-0 bg-gradient-to-r from-[#4CAF50]/20 to-transparent"></div>
            <div class="relative z-10 px-8 py-16 flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
                <div>
                    <h3 class="text-3xl font-extrabold text-white mb-2">Need a Test Ride?</h3>
                    <p class="text-gray-400 text-lg">Visit our showroom or book a home test ride to experience the future.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ route('book') }}" class="inline-flex items-center px-8 py-4 bg-[#4CAF50] hover:bg-[#43a047] text-white font-bold uppercase tracking-wide rounded-full transition-all shadow-lg transform hover:-translate-y-1">
                        Book Test Ride
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
