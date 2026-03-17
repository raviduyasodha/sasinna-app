@extends('layouts.app')

@section('content')
    <script>
        document.addEventListener('mousemove', (e) => {
            const hero = document.getElementById('hero-parallax');
            if (!hero) return;

            const x = (e.clientX - window.innerWidth / 2) / 60;
            const y = (e.clientY - window.innerHeight / 2) / 60;

            hero.style.transform = `translate(${x}px, ${y}px) scale(1.05)`;
        });
    </script>
    <section class="relative h-screen w-full overflow-hidden">

        <!-- Fullscreen Hero Image -->
        <div id="hero-parallax" class="absolute inset-0 z-0 hero-image-wrapper">
            <img src="{{ asset('images/hero1.png') }}" alt="Sasinna App Demo"
                class="hero-image w-full h-full object-cover scale-105">
        </div>
        <!-- Dark overlay for readability 
        <div class="absolute inset-0 bg-navy/80 z-10"></div>-->

        <!-- Subtle animated shapes -->
        <div class="absolute inset-0 z-20 pointer-events-none">
            <div class="absolute w-40 h-40 bg-neonBlue rounded-full opacity-25 animate-bounce-slow -top-20 -left-20"></div>
            <div class="absolute w-32 h-32 bg-neonBlue rounded-full opacity-20 animate-bounce-slow bottom-10 right-10"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-30 flex items-center justify-center h-full text-center px-4 md:px-6">
            <div class="max-w-4xl" data-aos="zoom-out" data-aos-duration="1200">
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight" data-aos="fade-up">
                    Showcase your business with <span class="text-neonBlue">high-quality apps</span>
                </h1>

                <p class="text-base sm:text-lg md:text-2xl text-gray-300 mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">
                    Professional digital solutions designed to impress your clients and grow your brand.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 px-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="/book-demo"
                        class="w-full sm:w-auto inline-block px-8 py-4 bg-neonBlue text-navy font-bold rounded-xl shadow-[0_0_20px_rgba(56,189,248,0.4)] hover:shadow-[0_0_30px_rgba(56,189,248,0.6)] transition-all duration-300 hover:-translate-y-1">
                        Book a Free Demo
                    </a>
                    <a href="/products"
                        class="w-full sm:w-auto inline-block px-8 py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-xl border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1">
                        View All Solutions
                    </a>
                </div>
            </div>
        </div>

    </section>
    <section class="relative py-16 text-white overflow-hidden">

        <!-- Soft ambient glow -->
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-neonBlue/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -right-40 w-[500px] h-[500px] bg-brandBlue/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-16 md:mb-24">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">
                    Designed for Your Success
                </h2>
                <p class="text-gray-400 max-w-2xl mx-auto text-base md:text-lg px-2" data-aos="fade-up" data-aos-delay="150">
                    We create powerful, elegant digital solutions that help businesses stand out and grow in a competitive market.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">

                <div class="group bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl border border-white/10 hover:border-neonBlue/50 hover:shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300"
                    data-aos="fade-up">
                    <div class="text-neonBlue text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">⚡</div>
                    <h3 class="text-xl font-semibold mb-3">High Performance</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Optimized applications that load fast and scale with your business demands.
                    </p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl border border-white/10 hover:border-neonBlue/50 hover:shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-neonBlue text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">🎨</div>
                    <h3 class="text-xl font-semibold mb-3">Modern UI / UX</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Clean, professional designs that build trust and drive user engagement.
                    </p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl border border-white/10 hover:border-neonBlue/50 hover:shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-neonBlue text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">🔒</div>
                    <h3 class="text-xl font-semibold mb-3">Secure Architecture</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Built with security-first practices to protect your data and user privacy.
                    </p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl border border-white/10 hover:border-neonBlue/50 hover:shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-neonBlue text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">📈</div>
                    <h3 class="text-xl font-semibold mb-3">Business Growth</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Solutions designed to convert visitors into loyal customers and brand advocates.
                    </p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl border border-white/10 hover:border-neonBlue/50 hover:shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="text-neonBlue text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">🧩</div>
                    <h3 class="text-xl font-semibold mb-3">Custom Solutions</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Tailor-made applications built specifically for your unique business needs.
                    </p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-6 md:p-8 rounded-2xl border border-white/10 hover:border-neonBlue/50 hover:shadow-[0_0_20px_rgba(56,189,248,0.2)] transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="text-neonBlue text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">🤝</div>
                    <h3 class="text-xl font-semibold mb-3">Reliable Support</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Long-term support and continuous improvements as your business evolves.
                    </p>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-24" data-aos="zoom-in">
                <a href="/book-demo"
                    class="inline-block px-12 py-4 text-white font-semibold rounded-xl
                      bg-gradient-to-r from-navy via-brandBlue to-neonBlue
                      bg-[length:200%_200%]
                      animate-[gradient-move_6s_ease_infinite]
                      shadow-[0_0_35px_rgba(56,189,248,0.6)]
                      hover:scale-105 transition-transform">
                    Book a Free Demo
                </a>
            </div>

        </div>

    </section>

    <section class="relative py-8 text-white overflow-hidden">
        <!-- Ambient glowing shapes -->
        <div class="absolute -top-40 -left-40 w-[400px] h-[400px] bg-neonBlue/10 rounded-full blur-3xl animate-bounce-slow">
        </div>
        <div
            class="absolute -bottom-40 -right-40 w-[400px] h-[400px] bg-brandBlue/10 rounded-full blur-3xl animate-bounce-slow">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 text-center">
            <!-- Heading -->
            <h2 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">
                Our Premium Work & Talented Team
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg mb-16" data-aos="fade-up" data-aos-delay="150">
                We deliver exceptional digital solutions with skill, creativity, and precision. Our projects reflect quality
                and innovation.
            </p>

            <!-- Feature Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="group bg-white/5 backdrop-blur-2xl p-8 rounded-2xl border border-white/20 hover:shadow-neonBlue transition-all duration-300"
                    data-aos="fade-up">
                    <div class="text-neonBlue text-4xl mb-4">🏆</div>
                    <h3 class="text-xl font-semibold mb-2">Premium Projects</h3>
                    <p class="text-gray-300">We deliver top-notch applications that impress clients worldwide.</p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-8 rounded-2xl border border-white/20 hover:shadow-neonBlue transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-neonBlue text-4xl mb-4">💡</div>
                    <h3 class="text-xl font-semibold mb-2">Creative Solutions</h3>
                    <p class="text-gray-300">Innovative ideas transforming complex problems into elegant digital solutions.
                    </p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-8 rounded-2xl border border-white/20 hover:shadow-neonBlue transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-neonBlue text-4xl mb-4">👨‍💻</div>
                    <h3 class="text-xl font-semibold mb-2">Talented Team</h3>
                    <p class="text-gray-300">Our experts combine skill and passion to create remarkable digital experiences.
                    </p>
                </div>

                <div class="group bg-white/5 backdrop-blur-2xl p-8 rounded-2xl border border-white/20 hover:shadow-neonBlue transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-neonBlue text-4xl mb-4">🌟</div>
                    <h3 class="text-xl font-semibold mb-2">Client Success</h3>
                    <p class="text-gray-300">We help businesses grow, impress customers, and achieve measurable results.
                    </p>
                </div>
            </div>

            <!-- CTA -->
            <div class="mt-20" data-aos="zoom-in">
                <a href="/products"
                    class="inline-block px-12 py-4 text-white font-semibold rounded-xl
                bg-gradient-to-r from-navy via-brandBlue to-neonBlue
                bg-[length:200%_200%]
                animate-[gradient-move_6s_ease_infinite]
                shadow-[0_0_35px_rgba(56,189,248,0.6)]
                hover:scale-105 transition-transform">
                    Explore Our Work
                </a>
            </div>
        </div>
    </section>
@endsection
