@extends('layouts.main')

@section('title', 'About Us – KB Mobility | New Delhi EV Dealer & Workshop')
@section('meta_description', 'Learn about KB Mobility – New Delhi’s trusted electric vehicle service center & dealer located in Uttam Nagar West. Our mission is to make EV ownership affordable, reliable, and hassle-free.')

@section('content')
<!-- Modern Hero Banner Section -->
<div class="relative kb-hero-surface py-16 overflow-hidden border-b border-gray-100">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 rounded-full kb-blob-3 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 4s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs sm:text-sm mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-[#4CAF50] mr-2"></span>
            About KB Mobility • New Delhi
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-6 font-heading">
            Pioneering The <span class="kb-gradient-text">Future of EV</span> in Delhi
        </h1>
        <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
            Founded with a vision to build a sustainable, pollution-free future, KB Mobility is New Delhi's trusted hub for electric vehicle sales, diagnostic repair, and OEM spare parts. We are dedicated to keeping your electric drive smooth, efficient, and reliable.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('products') }}" class="bg-gradient-to-r from-[#4CAF50] to-[#27ae60] hover:from-[#43a047] hover:to-[#2ecc71] text-white px-8 py-4 rounded-full font-bold text-base shadow-[0_10px_25px_-5px_rgba(76,175,80,0.4)] transition-all transform hover:-translate-y-1 flex items-center justify-center">
                Explore Our Scooters
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('contact') }}" class="bg-white text-gray-800 hover:text-[#4CAF50] px-8 py-4 rounded-full font-bold text-base border border-gray-200 shadow-sm hover:shadow-md transition-all flex items-center justify-center">
                Contact & Visit Us
            </a>
        </div>
    </div>
</div>

<div class="py-12 sm:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div>
                <img class="w-full rounded-2xl shadow-xl shadow-gray-200 border border-gray-100 transform hover:scale-[1.02] transition-transform duration-500 object-cover h-[350px] sm:h-[400px]"
                    src="{{ asset('images/kb-showroom-1.jpg') }}"
                    alt="KB Mobility Showroom New Delhi">
            </div>
            <div class="mt-10 lg:mt-0">
                <div class="inline-flex items-center space-x-2 text-[#4CAF50] font-bold text-xs uppercase tracking-widest mb-3 px-3 py-1 bg-green-50 rounded-full border border-green-100">
                    <span>Our Story</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mb-4">The Engine Behind KB Mobility</h2>
                <div class="space-y-4 text-base text-gray-600 leading-relaxed font-sans">
                    <p>
                        As the adoption of electric scooters and rickshaws rapidly expands across Delhi NCR, riders need dependable service, immediate spare parts, and transparent vehicle sales.
                    </p>
                    <p>
                        KB Mobility was established in Uttam Nagar West, New Delhi to bridge this gap. We combine a full-fledged sales showroom with state-of-the-art diagnostic facilities for battery repair, motor controller troubleshooting, and scheduled EV maintenance.
                    </p>
                    <p>
                        Today, we supply high-quality electric scooters, commercial e-rickshaws, and OEM-grade components. Located near Hanuman Dharam Kanta in Hastsal Village, our dedicated team is always ready to assist you on your journey towards clean green electric transport.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto py-12 sm:py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div class="p-6">
                <div class="w-16 h-16 mx-auto bg-green-50 border border-gray-100 text-[#4CAF50] rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-sm">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Modern Workshops</h3>
                <p class="text-gray-500 font-sans">Our partner garages are equipped with the latest electronic diagnostic and cell balancing tools.</p>
            </div>
            <div class="p-6">
                <div class="w-16 h-16 mx-auto bg-green-50 border border-gray-100 text-[#4CAF50] rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-sm">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Certified Techs</h3>
                <p class="text-gray-500 font-sans">Every technician passes rigorous training on high-voltage systems and lithium-ion protocols.</p>
            </div>
            <div class="p-6">
                <div class="w-16 h-16 mx-auto bg-green-50 border border-gray-100 text-[#4CAF50] rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-sm">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Fast Turnaround</h3>
                <p class="text-gray-500 font-sans">We know downtime costs you money. Our efficient supply chain ensures parts are always ready.</p>
            </div>
        </div>
    </div>
</div>
@endsection
