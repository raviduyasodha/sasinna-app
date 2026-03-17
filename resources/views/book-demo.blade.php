@extends('layouts.app')

@section('content')
<section class="py-16 animate-page-enter ">
    <div class="max-w-2xl mx-auto px-4 text-white">
        <h2 class="text-4xl font-bold mb-6 text-center">Book a Free Demo</h2>

        @if(session('success'))
            <div class="bg-green-600 text-white p-4 rounded mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('book-demo.submit') }}" method="POST" class="space-y-6" data-aos="fade-up" data-aos-delay="200">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-medium text-gray-400">Full Name</label>
                    <input type="text" name="name" placeholder="John Doe" class="w-full p-4 rounded-xl bg-white/5 border border-white/10 focus:outline-none focus:ring-2 focus:ring-neonBlue/50 text-white transition-all" required>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium text-gray-400">Email Address</label>
                    <input type="email" name="email" placeholder="john@example.com" class="w-full p-4 rounded-xl bg-white/5 border border-white/10 focus:outline-none focus:ring-2 focus:ring-neonBlue/50 text-white transition-all" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-medium text-gray-400">Phone Number</label>
                    <input type="text" name="phone" placeholder="+94 ..." class="w-full p-4 rounded-xl bg-white/5 border border-white/10 focus:outline-none focus:ring-2 focus:ring-neonBlue/50 text-white transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium text-gray-400">Company Name</label>
                    <input type="text" name="company" placeholder="Business Name" class="w-full p-4 rounded-xl bg-white/5 border border-white/10 focus:outline-none focus:ring-2 focus:ring-neonBlue/50 text-white transition-all">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-400">Interested Product</label>
                <select name="product" class="w-full p-4 rounded-xl bg-white/5 border border-white/10 focus:outline-none focus:ring-2 focus:ring-neonBlue/50 text-white transition-all appearance-none">
                    <option value="" disabled selected>Select a product</option>
                    <option value="POS">Retail & POS Management</option>
                    <option value="Inventory">Inventory & Stock Control</option>
                    <option value="HR">HR & Workforce Management</option>
                    <option value="Exam">Online Examinations</option>
                    <option value="Credits">Credits & Cheques</option>
                    <option value="Appointments">Appointment Bookings</option>
                </select>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-400">Message (Optional)</label>
                <textarea name="message" placeholder="Tell us more about your needs..." rows="4" class="w-full p-4 rounded-xl bg-white/5 border border-white/10 focus:outline-none focus:ring-2 focus:ring-neonBlue/50 text-white transition-all"></textarea>
            </div>

            <button type="submit" class="w-full py-4 bg-neonBlue text-navy font-bold rounded-xl shadow-[0_0_20px_rgba(56,189,248,0.3)] hover:shadow-[0_0_30px_rgba(56,189,248,0.5)] transition-all duration-300 hover:-translate-y-1">
                Submit Request
            </button>
        </form>
    </div>
</section>
@endsection