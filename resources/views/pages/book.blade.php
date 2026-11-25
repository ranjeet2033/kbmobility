@extends('layouts.main')

@section('title', 'Book EV Service Online – KB Mobility Uttam Nagar, New Delhi')
@section('meta_description', 'Book an EV service appointment with KB Mobility in Uttam Nagar West, New Delhi. Battery repair, motor service, controller fix & more. Fast response, expert technicians.')

@section('content')
<div class="relative overflow-hidden kb-hero-surface py-16 px-4 sm:px-6 lg:px-8 border-b border-gray-100">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full kb-blob-1 mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-80 w-72 h-72 rounded-full kb-blob-2 mix-blend-multiply filter blur-3xl opacity-70 animate-blob" style="animation-delay: 2s;"></div>
    <div class="max-w-3xl mx-auto relative z-10 bg-white p-6 sm:p-10 md:p-12 rounded-2xl border border-gray-100 shadow-xl kb-fade-up">
        
        <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-green-50 border border-green-100 text-green-600 font-semibold text-xs mb-4 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-green-500 mr-2 kb-dot-ping"></span>
            Priority Support
        </div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight font-heading">
            Book <span class="kb-gradient-text">EV Service</span>
        </h1>
        <p class="mt-3 text-base sm:text-lg text-gray-600">
            Fill out the form below to schedule a diagnostic or repair session. Our team will contact you shortly to confirm the appointment.
        </p>

        @if(session('success'))
            <div class="mt-8 rounded-md bg-green-900/40 p-4 border border-green-800">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-300">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('leads.store') }}" method="POST" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            @csrf
            
            <div class="sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" required class="py-3 px-4 block w-full bg-green-50 text-gray-900 border border-gray-200 rounded-md shadow-sm focus:ring-[#4CAF50] focus:border-[#4CAF50] transition-colors" placeholder="John Doe">
                </div>
                @error('name')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                <div class="mt-1">
                    <input type="text" name="phone" id="phone" required class="py-3 px-4 block w-full bg-green-50 text-gray-900 border border-gray-200 rounded-md shadow-sm focus:ring-[#4CAF50] focus:border-[#4CAF50] transition-colors" placeholder="+91 9876543210">
                </div>
                @error('phone')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Required</label>
                <div class="mt-1">
                    <select id="service" name="service" required class="py-3 px-4 block w-full bg-green-50 text-gray-900 border border-gray-200 rounded-md shadow-sm focus:ring-[#4CAF50] focus:border-[#4CAF50] transition-colors">
                        <option value="Battery Repair" {{ request('service') == 'Battery Repair' ? 'selected' : '' }}>Battery Repair &amp; Diagnostic</option>
                        <option value="2W Battery Repairing" {{ request('service') == '2W Battery Repairing' ? 'selected' : '' }}>2W Battery Repairing</option>
                        <option value="3W E-Rickshaw Battery Repair" {{ request('service') == '3W E-Rickshaw Battery Repair' ? 'selected' : '' }}>3W (E-Rickshaw) Battery Repair</option>
                        <option value="4W Battery Repair" {{ request('service') == '4W Battery Repair' ? 'selected' : '' }}>4W Battery Repair</option>
                        <option value="IP57 Charger Repair" {{ request('service') == 'IP57 Charger Repair' ? 'selected' : '' }}>IP57 Charger Repairing</option>
                        <option value="IP67 Charger Repair" {{ request('service') == 'IP67 Charger Repair' ? 'selected' : '' }}>IP67 Charger Repairing</option>
                        <option value="IP65 Charger Repair" {{ request('service') == 'IP65 Charger Repair' ? 'selected' : '' }}>IP65 Charger Repairing</option>
                        <option value="Controller Repair" {{ request('service') == 'Controller Repair' ? 'selected' : '' }}>Controller Repair (Chinese IP57 / Branded IP65)</option>
                        <option value="Motor Repair" {{ request('service') == 'Motor Repair' ? 'selected' : '' }}>Motor Repair (Chinese / Branded Vehicles)</option>
                        <option value="Controller/Charger Repair" {{ request('service') == 'Controller/Charger Repair' ? 'selected' : '' }}>Controller or Charger Repair</option>
                        <option value="General Service" {{ request('service') == 'General Service' ? 'selected' : '' }}>General EV Service</option>
                        <option value="Parts/Sales Inquiry" {{ request('service') == 'Parts/Sales Inquiry' ? 'selected' : '' }}>2W &amp; 3W Spare Parts / Sales Inquiry</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                @error('service')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Your Location / City</label>
                <div class="mt-1">
                    <input type="text" name="location" id="location" required class="py-3 px-4 block w-full bg-green-50 text-gray-900 border border-gray-200 rounded-md shadow-sm focus:ring-[#4CAF50] focus:border-[#4CAF50] transition-colors" placeholder="Your City & Area">
                </div>
                @error('location')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2 pt-4">
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-4 border border-transparent rounded-md shadow-[0_0_20px_rgba(117,209,24,0.3)] text-base font-bold text-black uppercase tracking-widest bg-[#4CAF50] hover:bg-[#43a047] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#1c1c1c] focus:ring-[#4CAF50] transition-all transform hover:-translate-y-1">
                    Submit Booking Request
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
