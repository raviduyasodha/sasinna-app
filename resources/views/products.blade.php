@extends('layouts.app')

@section('content')
    <section class="py-16 animate-page-enter">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-8">Our Apps & Solutions</h2>
            <p class="text-gray-300 mb-12">High-quality apps we have built for our clients</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">
                <!-- Card 1 -->
                <div
                    class="bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl
                    border border-white/20 shadow-lg overflow-hidden
                    hover:shadow-neonBlue transition-all duration-300
                    flex flex-col justify-between h-full animate-card-enter group transform hover:scale-105">
                    <div class="w-full h-40 md:h-50 flex items-center justify-center">
                        <i class="fa-solid fa-cash-register neon-icon text-neonBlue text-6xl md:text-8xl transform group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-2 md:p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Retail & POS Management</h3>
                            <p class="text-gray-400 mb-4 leading-relaxed">
                                Powerful tools for managing daily sales, customer loyalty, and invoicing.
                            </p>
                        </div>
                        <a href="/book-demo"
                            class="w-full inline-block px-6 py-3 bg-neonBlue/10 text-white font-semibold rounded-xl border border-neonBlue/30 shadow-lg hover:shadow-neonBlue transition-all duration-300 hover:bg-neonBlue hover:text-navy text-center">
                            Book a Free Demo
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl
                    border border-white/20 shadow-lg overflow-hidden
                    hover:shadow-neonBlue transition-all duration-300
                    flex flex-col justify-between h-full animate-card-enter group transform hover:scale-105">
                    <div class="w-full h-40 md:h-50 flex items-center justify-center">
                        <i class="fa-solid fa-boxes-stacked neon-icon text-neonBlue text-6xl md:text-8xl transform group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-2 md:p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Inventory & Stock Control</h3>
                            <p class="text-gray-400 mb-4 leading-relaxed">
                                Eliminate stockouts and optimize purchasing with precise inventory tracking.
                            </p>
                        </div>
                        <a href="/book-demo"
                            class="w-full inline-block px-6 py-3 bg-neonBlue/10 text-white font-semibold rounded-xl border border-neonBlue/30 shadow-lg hover:shadow-neonBlue transition-all duration-300 hover:bg-neonBlue hover:text-navy text-center">
                            Book a Free Demo
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl
                    border border-white/20 shadow-lg overflow-hidden
                    hover:shadow-neonBlue transition-all duration-300
                    flex flex-col justify-between h-full animate-card-enter group transform hover:scale-105">
                   <div class="w-full h-40 md:h-50 flex items-center justify-center">
                        <i class="fa-solid fa-users-gear neon-icon text-neonBlue text-6xl md:text-8xl transform group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-2 md:p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">HR & Workforce Management</h3>
                            <p class="text-gray-400 mb-4 leading-relaxed">
                                Simplify employee onboarding, payroll, leave, and learning schedules.
                            </p>
                        </div>
                        <a href="/book-demo"
                            class="w-full inline-block px-6 py-3 bg-neonBlue/10 text-white font-semibold rounded-xl border border-neonBlue/30 shadow-lg hover:shadow-neonBlue transition-all duration-300 hover:bg-neonBlue hover:text-navy text-center">
                            Book a Free Demo
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl
                    border border-white/20 shadow-lg overflow-hidden
                    hover:shadow-neonBlue transition-all duration-300
                    flex flex-col justify-between h-full animate-card-enter group transform hover:scale-105">
                    <div class="w-full h-40 md:h-50 flex items-center justify-center">
                        <i class="fa-solid fa-graduation-cap neon-icon text-neonBlue text-6xl md:text-8xl transform group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-2 md:p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Online Examinations</h3>
                            <p class="text-gray-400 mb-4 leading-relaxed">
                                Securely conduct exams online with automated grading and real-time monitoring.
                            </p>
                        </div>
                        <a href="/book-demo"
                            class="w-full inline-block px-6 py-3 bg-neonBlue/10 text-white font-semibold rounded-xl border border-neonBlue/30 shadow-lg hover:shadow-neonBlue transition-all duration-300 hover:bg-neonBlue hover:text-navy text-center">
                            Book a Free Demo
                        </a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl
                    border border-white/20 shadow-lg overflow-hidden
                    hover:shadow-neonBlue transition-all duration-300
                    flex flex-col justify-between h-full animate-card-enter group transform hover:scale-105">
                    <div class="w-full h-40 md:h-50 flex items-center justify-center">
                        <i class="fa-solid fa-money-check-dollar neon-icon text-neonBlue text-6xl md:text-8xl transform group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-2 md:p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Credits & Cheques</h3>
                            <p class="text-gray-400 mb-4 leading-relaxed">
                                Track credits, cheques, and due payments efficiently with clear records.
                            </p>
                        </div>
                        <a href="/book-demo"
                            class="w-full inline-block px-6 py-3 bg-neonBlue/10 text-white font-semibold rounded-xl border border-neonBlue/30 shadow-lg hover:shadow-neonBlue transition-all duration-300 hover:bg-neonBlue hover:text-navy text-center">
                            Book a Free Demo
                        </a>
                    </div>
                </div>

                <!-- Card 6 -->
                <div
                    class="bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl
                    border border-white/20 shadow-lg overflow-hidden
                    hover:shadow-neonBlue transition-all duration-300
                    flex flex-col justify-between h-full animate-card-enter group transform hover:scale-105">
                   <div class="w-full h-40 md:h-50 flex items-center justify-center">
                        <i class="fa-solid fa-calendar-check neon-icon text-neonBlue text-6xl md:text-8xl transform group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-2 md:p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Appointment Bookings</h3>
                            <p class="text-gray-400 mb-4 leading-relaxed">
                                Allow customers to book appointments instantly with smart scheduling.
                            </p>
                        </div>
                        <a href="/book-demo"
                            class="w-full inline-block px-6 py-3 bg-neonBlue/10 text-white font-semibold rounded-xl border border-neonBlue/30 shadow-lg hover:shadow-neonBlue transition-all duration-300 hover:bg-neonBlue hover:text-navy text-center">
                            Book a Free Demo
                        </a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
@endsection
