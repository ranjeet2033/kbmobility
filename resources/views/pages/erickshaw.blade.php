@extends('layouts.main')

@section('title', 'Buy E-Rickshaw in Uttam Nagar, New Delhi – Passenger & Cargo | KB Mobility')
@section('meta_description', 'Buy commercial e-rickshaws in New Delhi from KB Mobility. Passenger & cargo models, 80–100km range, 1000W–1200W motor in Uttam Nagar West. Best EV rickshaw price in Delhi.')

@section('content')

<!-- Modern Hero Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center kb-fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 border border-blue-100 text-blue-600 font-semibold text-sm mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-blue-600 mr-2 kb-dot-ping"></span>
            Commercial Mobility in Delhi NCR
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-4 sm:mb-6 font-heading">
            Heavy-Duty <span class="kb-gradient-text">E-Rickshaws</span>
        </h1>
        <p class="text-base sm:text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Built for maximum payload and minimum maintenance. Power your passenger or logistics business with our commercial-grade electric rickshaws designed for Delhi's roads.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#models" class="kb-btn-primary px-8 py-4 rounded-full font-bold text-base flex items-center justify-center">
                View Vehicles
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('contact') }}" class="bg-white text-gray-800 hover:text-blue-600 px-8 py-4 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Contact Sales
            </a>
        </div>
    </div>
</div>

<!-- E-Rickshaw Grid Section -->
<div class="py-12 sm:py-16 bg-white" id="models">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Power Your Business</h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto text-base sm:text-lg">Whether you are transporting passengers or delivering cargo across New Delhi, our E-Rickshaws provide the best ROI.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">

            <!-- Rickshaw Card 1 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative kb-reveal kb-card-hover">
                <!-- Highlight Badge -->
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/90 backdrop-blur-sm text-blue-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Passenger Pro</span>
                </div>
                
                <div class="relative h-72 overflow-hidden bg-white flex items-center justify-center p-4">
                    <img
                        src="{{ asset('images/erickshaw-passenger.jpg') }}"
                        alt="KB Mobility Passenger E-Rickshaw"
                        class="w-full h-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-700"
                        loading="lazy"
                    >
                </div>
                
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-extrabold text-gray-900">EV Metro Passenger</h3>
                        <span class="text-gray-900 font-extrabold text-2xl">Ask Price</span>
                    </div>
                    
                    <p class="text-gray-600 text-base mb-6 leading-relaxed flex-grow">Designed for high-frequency passenger transport. Features reinforced chassis, comfortable seating for 4+1, and advanced telematics.</p>
                    
                    <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-gray-100">
                        <div class="text-center">
                            <div class="text-blue-600 font-bold text-lg mb-1">100km</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Range</div>
                        </div>
                        <div class="text-center border-l border-r border-gray-100">
                            <div class="text-blue-600 font-bold text-lg mb-1">1000W</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Motor</div>
                        </div>
                        <div class="text-center">
                            <div class="text-blue-600 font-bold text-lg mb-1">400kg</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Payload</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-blue-600 text-white text-center px-6 py-4 rounded-xl transition-colors font-bold uppercase tracking-wide">
                        Request Quote
                    </a>
                </div>
            </div>

            <!-- Rickshaw Card 2 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 group shadow-[0_8px_30px_rgb(0,0,0,0.04)] flex flex-col relative kb-reveal kb-card-hover">
                <!-- Highlight Badge -->
                <div class="absolute top-6 left-6 z-20">
                    <span class="bg-white/90 backdrop-blur-sm text-indigo-600 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full shadow-sm border border-gray-100">Cargo & Logistics</span>
                </div>
                
                <div class="relative h-72 overflow-hidden bg-white flex items-center justify-center p-4">
                    <img
                        src="{{ asset('images/erickshaw-cargo.jpg') }}"
                        alt="KB Mobility Cargo Loader E-Rickshaw"
                        class="w-full h-full object-contain rounded-xl group-hover:scale-105 transition-transform duration-700"
                        loading="lazy"
                    >
                </div>
                
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-extrabold text-gray-900">EV Freight Loader</h3>
                        <span class="text-gray-900 font-extrabold text-2xl">Ask Price</span>
                    </div>
                    
                    <p class="text-gray-600 text-base mb-6 leading-relaxed flex-grow">The ultimate last-mile logistics partner. Massive cargo box, heavy-duty suspension, and optimized gear ratios for heavy lifting.</p>
                    
                    <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-gray-100">
                        <div class="text-center">
                            <div class="text-indigo-600 font-bold text-lg mb-1">80km</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Range</div>
                        </div>
                        <div class="text-center border-l border-r border-gray-100">
                            <div class="text-indigo-600 font-bold text-lg mb-1">1200W</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Motor</div>
                        </div>
                        <div class="text-center">
                            <div class="text-indigo-600 font-bold text-lg mb-1">600kg</div>
                            <div class="text-xs text-gray-500 uppercase font-medium">Payload</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="w-full bg-gray-900 hover:bg-indigo-600 text-white text-center px-6 py-4 rounded-xl transition-colors font-bold uppercase tracking-wide">
                        Request Quote
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Business Benefits Section -->
<div class="bg-gray-50 py-12 sm:py-16 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold text-gray-900">Why Choose Our E-Rickshaws?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Maximum ROI</h3>
                <p class="text-gray-600">Extremely low running costs of under ₹1 per km, maximizing your daily profits.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Durability</h3>
                <p class="text-gray-600">Reinforced steel chassis and heavy-duty suspension designed to withstand rough roads.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Fast Charging</h3>
                <p class="text-gray-600">Equipped with fast-charging capable OEM battery packs to keep your vehicle on the road longer.</p>
            </div>
        </div>
    </div>
</div>

@endsection
