@extends('layouts.app')

@section('content')
<!-- Contact Section -->
<section class="py-20 relative overflow-hidden">
    <!-- Soft Neon Glow Background -->
    <div class="absolute -top-32 -left-32 w-[300px] md:w-[400px] h-[300px] md:h-[400px] bg-neonBlue/20 rounded-full blur-3xl animate-blob-slow"></div>
    <div class="absolute -bottom-32 -right-32 w-[300px] md:w-[400px] h-[300px] md:h-[400px] bg-brandBlue/20 rounded-full blur-3xl animate-blob-slow delay-2000"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <!-- Heading -->
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 animate-fade-in-down">
            Get in Touch
        </h2>
        <p class="text-gray-400 text-base md:text-lg mb-16 animate-fade-in-up max-w-2xl mx-auto" style="animation-delay: 200ms;">
            We’d love to hear from you. Contact us for any queries or business opportunities.
        </p>

        <!-- Contact Info Cards -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-navyLight/50 backdrop-blur-xl rounded-2xl p-8 flex flex-col items-center text-center shadow-lg hover:shadow-neonBlue transition-all duration-300 animate-card-enter">
                <span class="text-neonBlue text-4xl mb-4 animate-pulse">📧</span>
                <p class="text-white font-semibold text-lg mb-1">Email</p>
                <p class="text-gray-300">contact@WebCLanka.com</p>
            </div>

            <div class="bg-navyLight/50 backdrop-blur-xl rounded-2xl p-8 flex flex-col items-center text-center shadow-lg hover:shadow-neonBlue transition-all duration-300 animate-card-enter" style="animation-delay: 150ms;">
                <span class="text-neonBlue text-4xl mb-4 animate-pulse">📞</span>
                <p class="text-white font-semibold text-lg mb-1">Phone</p>
                <p class="text-gray-300">034 22 40 5 40</p>
            </div>

            <div class="bg-navyLight/50 backdrop-blur-xl rounded-2xl p-8 flex flex-col items-center text-center shadow-lg hover:shadow-neonBlue transition-all duration-300 animate-card-enter" style="animation-delay: 300ms;">
                <span class="text-neonBlue text-4xl mb-4 animate-pulse">📍</span>
                <p class="text-white font-semibold text-lg mb-1">Address</p>
                <p class="text-gray-300">113/27 A, Matugama, Sri Lanka</p>
            </div>
        </div>
    </div>
</section>

@endsection
