@extends('layouts.app')

@section('content')
    <section class="py-16  text-white animate-page-enter">
        <div class="max-w-7xl mx-auto px-4">

            <!-- Photos Section -->
            <div class="mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 text-center" data-aos="fade-down">Photos</h2>
                <p class="text-gray-400 mb-12 text-center max-w-2xl mx-auto" data-aos="fade-up">Explore our past products and high-impact projects built for clients across various industries.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
                    <!-- Photo Card 1 -->
                    <div
                        class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter">
                        <img src="https://webclanka.com/assets/img/portfolio/liyomark.png" alt="Project 1"
                            class="w-full h-64 md:h-72 object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <span class="text-white font-bold text-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">liyomark Hotel Web App</span>
                        </div>
                    </div>

                    <!-- Photo Card 2 -->
                    <div
                        class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter">
                        <img src="https://webclanka.com/assets/img/portfolio/p2.png" alt="Project 2"
                            class="w-full h-64 md:h-72 object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <span class="text-white font-bold text-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">Ziezergy Tution Clz web App</span>
                        </div>
                    </div>

                    <!-- Photo Card 3 -->
                    <div
                        class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter">
                        <img src="https://webclanka.com/assets/img/portfolio/p5.png" alt="Project 3"
                            class="w-full h-64 md:h-72 object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <span class="text-white font-bold text-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">Online Exam App</span>
                        </div>
                    </div>

                    <!-- Photo Card 4 (Duplicate fixed) -->
                    <div
                        class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter">
                        <img src="https://webclanka.com/assets/img/portfolio/p5.png" alt="Project 4"
                            class="w-full h-64 md:h-72 object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <span class="text-white font-bold text-lg transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">Mobile Solutions</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Videos Section -->
            <div>
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 text-center" data-aos="fade-down">Videos</h2>
                <p class="text-gray-400 mb-12 text-center max-w-2xl mx-auto" data-aos="fade-up">Watch real-world demonstrations of our powerful application modules in action.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
                    <!-- Video Card 1 -->
                    <div class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter video-card"
                        data-video="{{ asset('images/0124.mp4') }}">
                        <video class="w-full h-64 md:h-72 object-cover preview-video" autoplay muted playsinline loop>
                            <source src="{{ asset('images/0124.mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <div class="flex flex-col gap-2 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 w-full">
                                <span class="bg-neonBlue text-navy text-[10px] font-bold px-2 py-0.5 rounded w-fit uppercase">Demo</span>
                                <span class="text-white font-bold text-lg">Supplier Section</span>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter video-card"
                        data-video="{{ asset('images/0124(1).mp4') }}">
                        <video class="w-full h-64 md:h-72 object-cover preview-video" autoplay muted playsinline loop>
                            <source src="{{ asset('images/0124(1).mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <div class="flex flex-col gap-2 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 w-full">
                                <span class="bg-neonBlue text-navy text-[10px] font-bold px-2 py-0.5 rounded w-fit uppercase">Demo</span>
                                <span class="text-white font-bold text-lg">Customer Section</span>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter video-card"
                        data-video="{{ asset('images/0124(2).mp4') }}">
                        <video class="w-full h-64 md:h-72 object-cover preview-video" autoplay muted playsinline loop>
                            <source src="{{ asset('images/0124(2).mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <div class="flex flex-col gap-2 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 w-full">
                                <span class="bg-neonBlue text-navy text-[10px] font-bold px-2 py-0.5 rounded w-fit uppercase">Demo</span>
                                <span class="text-white font-bold text-lg">Purchase Order</span>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 4 -->
                    <div class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter video-card"
                        data-video="{{ asset('images/0124(3).mp4') }}">
                        <video class="w-full h-64 md:h-72 object-cover preview-video" autoplay muted playsinline loop>
                            <source src="{{ asset('images/0124(3).mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <div class="flex flex-col gap-2 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 w-full">
                                <span class="bg-neonBlue text-navy text-[10px] font-bold px-2 py-0.5 rounded w-fit uppercase">Demo</span>
                                <span class="text-white font-bold text-lg">Reports Section</span>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 5 -->
                    <div class="relative overflow-hidden rounded-2xl group hover:shadow-[0_0_20px_rgba(56,189,248,0.3)] transition-all duration-500 cursor-pointer animate-card-enter video-card"
                        data-video="{{ asset('images/0124(4).mp4') }}">
                        <video class="w-full h-64 md:h-72 object-cover preview-video" autoplay muted playsinline loop>
                            <source src="{{ asset('images/0124(4).mp4') }}" type="video/mp4">
                        </video>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6 z-10">
                            <div class="flex flex-col gap-2 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 w-full">
                                <span class="bg-neonBlue text-navy text-[10px] font-bold px-2 py-0.5 rounded w-fit uppercase">Demo</span>
                                <span class="text-white font-bold text-lg">Cheques Section</span>
                            </div>
                        </div>
                    </div>
                </div>
      <!-- Video Modal -->
                    <div id="video-modal"
                        class="fixed inset-0 hidden z-50 flex items-center justify-center bg-black/70 p-4">
                        <div class="relative w-full max-w-3xl">
                            <!-- Close Button -->
                            <button id="close-modal"
                                class="absolute top-2 right-2 text-white text-3xl font-bold z-50">&times;</button>

                            <!-- Video Player -->
                            <video id="modal-video" class="w-full h-auto rounded-lg shadow-lg" controls preload="auto"
                                playsinline>
                                <source src="" type="video/mp4">
                            </video>
                        </div>
                    </div>


                    <!-- Add more video cards here -->
                </div>
            </div>

        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const videoCards = document.querySelectorAll('.video-card');
            const modal = document.getElementById('video-modal');
            const modalVideo = document.getElementById('modal-video');
            const modalSource = modalVideo.querySelector('source');
            const closeBtn = document.getElementById('close-modal');

            videoCards.forEach(card => {
                card.addEventListener('click', () => {
                    const src = card.dataset.video;

                    modal.classList.remove('hidden');

                    modalVideo.pause();
                    modalSource.src = src;
                    modalVideo.load();

                    modalVideo.currentTime = 0;
                    modalVideo.play();
                });
            });

            function closeModal() {
                modalVideo.pause();
                modalVideo.currentTime = 0;
                modalSource.src = '';
                modalVideo.load();
                modal.classList.add('hidden');
            }

            closeBtn.addEventListener('click', closeModal);

            modal.addEventListener('click', e => {
                if (e.target === modal) closeModal();
            });
        });

        document.querySelectorAll('.preview-video').forEach(video => {
            const PREVIEW_DURATION = 30; // seconds

            video.addEventListener('timeupdate', () => {
                if (video.currentTime >= PREVIEW_DURATION) {
                    video.currentTime = 0;
                    video.play();
                }
            });

            video.addEventListener('ended', () => {
                video.currentTime = 0;
                video.play();
            });
        });
    </script>
@endsection
