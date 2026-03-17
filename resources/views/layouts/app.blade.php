<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!--@vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#0A122A',
                        navyLight: '#0c1a42',
                        neonBlue: '#38BDF8',
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script src="https://unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="font-sans antialiased">

<!-- Navbar -->
<nav class="fixed w-full top-0 z-50 bg-navyLight/90 backdrop-blur-md shadow-lg" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-14">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="inline-block">
            <img src="{{ asset('images/logo1.png') }}" 
                 alt="Sasinna Logo" 
                 class="h-10 md:h-14 transition-transform duration-300 hover:scale-105">
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-8 items-center">
            <a href="/" class="text-gray-300 hover:text-neonBlue transition">Home</a>
            <a href="/products" class="text-gray-300 hover:text-neonBlue transition">Products</a>
            <a href="/gallery" class="text-gray-300 hover:text-neonBlue transition">Gallery</a>
            <a href="/contact" class="text-gray-300 hover:text-neonBlue transition">Contact</a>

            <a href="/book-demo"
               class="text-white font-semibold bg-neonBlue/10 px-4 py-2 rounded-lg border border-neonBlue/20 hover:text-neonBlue transition">
                Book Demo
            </a>
        </div>

        <!-- Hamburger -->
        <div class="flex md:hidden items-center">
            <button @click="open = !open"
                    class="text-gray-300 hover:text-white focus:outline-none transition">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open"
         x-transition
         class="md:hidden fixed top-14 right-0 w-2/4 h-screen bg-[#1A015A]/95 backdrop-blur-2xl border-l border-white/10 z-50 shadow-2xl"
         @click.away="open = false">

        <div class="p-6 space-y-4">
            <a href="/" class="block py-3 text-gray-300 hover:text-neonBlue">Home</a>
            <a href="/products" class="block py-3 text-gray-300 hover:text-neonBlue">Products</a>
            <a href="/gallery" class="block py-3 text-gray-300 hover:text-neonBlue">Gallery</a>
            <a href="/contact" class="block py-3 text-gray-300 hover:text-neonBlue">Contact</a>

            <a href="/book-demo"
               class="block w-full py-3 text-center font-bold text-navy bg-neonBlue rounded-xl shadow-lg">
                Book Demo
            </a>
        </div>
    </div>
</nav>

<div class="pt-16">
    @yield('content')
</div>

<footer class="bg-navyLight py-6 mt-10">
    <div class="max-w-7xl mx-auto px-4 text-center text-gray-400">
        <p>&copy; {{ date('Y') }} Web C Lanka. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
