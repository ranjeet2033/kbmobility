@extends('layouts.main')

@section('title', 'Contact Us – Infravolte Mobility Prayagraj | +91 9277250171')
@section('meta_description', 'Contact Infravolte Mobility for EV service, spare parts & scooter sales in Prayagraj. Visit us at JK15 Kalindipuram or call +91 9277250171. Open Mon–Sat 9am–7pm.')

@section('content')
<div class="bg-white py-20 border-b border-gray-100 relative overflow-hidden">
    <!-- Abstract Hexagon Background (CSS representation) -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at right center, #75d118 0%, transparent 60%);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Contact <span class="text-[#4CAF50]">Infravolte Mobility</span></h1>
            <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
                Whether you need technical support, want to inquire about a new scooter, or need rare spare parts, our team is here to help.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div>
                <div class="bg-gray-50 p-8 md:p-10 rounded-2xl border border-gray-100 h-full">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Reach Out To Us</h3>
                    
                    <dl class="space-y-8 font-sans">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-green-50 text-[#4CAF50] border border-gray-100">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-6">
                                <dt class="text-lg font-medium text-gray-900 mb-1">Phone Number</dt>
                                <dd class="text-base text-gray-600"><a href="tel:+919277250171" class="hover:text-[#4CAF50] transition-colors">+91 9277250171</a></dd>
                                <dd class="text-sm text-gray-500 mt-1">Mon-Sat 9am to 7pm</dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-green-50 text-[#4CAF50] border border-gray-100">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-6">
                                <dt class="text-lg font-medium text-gray-900 mb-1">Email</dt>
                                <dd class="text-base text-gray-600"><a href="mailto:infravoltemobility@gmail.com" class="hover:text-[#4CAF50] transition-colors">infravoltemobility@gmail.com</a></dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-green-50 text-[#4CAF50] border border-gray-100">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                            </div>
                            <div class="ml-6">
                                <dt class="text-lg font-medium text-gray-900 mb-1">Service Center HQ</dt>
                                <dd class="text-base text-gray-600 leading-relaxed">
                                    CQGW+VR5, JK15 Kalindipuram<br>
                                    Prayagraj, Roshan Bag, Daiwghat<br>
                                    Uttar Pradesh 211015
                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Direct Book Service Instead of Message -->
            <div class="bg-gray-50 p-8 md:p-10 rounded-2xl border border-gray-100 flex flex-col justify-center items-center text-center">
                <svg class="w-20 h-20 text-gray-800 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Fast-Track Your Request</h3>
                <p class="text-lg text-gray-600 mb-8 max-w-md font-sans">
                    Skip the email queue. If you need a repair or a specific spare part, use our dedicated booking system. Our diagnostic team gets instantly notified.
                </p>
                <a href="{{ route('book') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 border border-transparent rounded-md shadow-[0_0_20px_rgba(117,209,24,0.3)] text-base font-bold uppercase tracking-widest text-black bg-[#4CAF50] hover:bg-[#43a047] transition-all transform hover:-translate-y-1">
                    Book Service Now
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="w-full h-96 bg-green-50 border-t border-gray-100 relative z-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639435.7279577325!2d76.8031845777325!3d27.025853827828694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398535005f4a65e5%3A0x4b49c1d13a248a18!2sInfravolt%20E%20mobility!5e0!3m2!1sen!2sin!4v1777149599117!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Infravolte Mobility Location Map"></iframe>
</div>
@endsection
