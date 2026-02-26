<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Selasar Digital') . ' - Premium Software House')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta name="description"
        content="@yield('meta_description', 'Selasar Digital is a premium software house located in Indonesia, specializing in cutting-edge web development, mobile applications, and UI/UX design.')">

    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title"
        content="@yield('title', config('app.name', 'Selasar Digital') . ' - Premium Software House')">
    <meta property="og:description"
        content="@yield('meta_description', 'Selasar Digital is a premium software house located in Indonesia, specializing in cutting-edge web development, mobile applications, and UI/UX design.')">
    <meta property="og:type" content="@yield('meta_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Selasar Digital">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|outfit:400,500,600,700,800&display=swap"
        rel="stylesheet" />

    <!-- Scripts and CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-[#1E293B] bg-white flex flex-col min-h-screen">

    <!-- Global Glassmorphism Navbar -->
    <nav x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="{ 'bg-white/80 backdrop-blur-md shadow-sm': scrolled, 'bg-transparent': !scrolled }"
        class="fixed w-full z-50 transition-all duration-300 top-0 left-0 border-b border-gray-100/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">

                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                        <x-application-logo
                            class="h-10 w-auto text-[#2563EB] transition-transform duration-300 group-hover:scale-105" />
                        <span class="text-2xl font-outfit font-bold tracking-tight text-[#0F172A]">Selasar <span
                                class="text-[#2563EB]">Digital</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-sm font-medium transition-colors hover:text-[#2563EB] {{ request()->routeIs('home') ? 'text-[#2563EB]' : 'text-gray-600' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="text-sm font-medium transition-colors hover:text-[#2563EB] {{ request()->routeIs('about') ? 'text-[#2563EB]' : 'text-gray-600' }}">About
                        Us</a>
                    <a href="{{ route('services') }}"
                        class="text-sm font-medium transition-colors hover:text-[#2563EB] {{ request()->routeIs('services') ? 'text-[#2563EB]' : 'text-gray-600' }}">Services</a>
                    <a href="{{ route('portfolio') }}"
                        class="text-sm font-medium transition-colors hover:text-[#2563EB] {{ request()->routeIs('portfolio') ? 'text-[#2563EB]' : 'text-gray-600' }}">Portfolio</a>

                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-full text-white bg-[#2563EB] hover:bg-blue-700 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2563EB]">
                        Hire Us
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#2563EB] transition-colors"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg x-show="!mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg x-show="mobileMenuOpen" style="display: none;" class="block h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2" style="display: none;"
            class="md:hidden absolute top-20 left-0 w-full bg-white shadow-xl border-b border-gray-100">
            <div class="px-4 pt-2 pb-6 space-y-1 sm:px-3 flex flex-col shadow-inner">
                <a href="{{ route('home') }}"
                    class="block px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-[#2563EB] bg-blue-50' : 'text-gray-700 hover:text-[#2563EB] hover:bg-gray-50' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="block px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-[#2563EB] bg-blue-50' : 'text-gray-700 hover:text-[#2563EB] hover:bg-gray-50' }}">About
                    Us</a>
                <a href="{{ route('services') }}"
                    class="block px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('services') ? 'text-[#2563EB] bg-blue-50' : 'text-gray-700 hover:text-[#2563EB] hover:bg-gray-50' }}">Services</a>
                <a href="{{ route('portfolio') }}"
                    class="block px-3 py-3 rounded-md text-base font-medium {{ request()->routeIs('portfolio') ? 'text-[#2563EB] bg-blue-50' : 'text-gray-700 hover:text-[#2563EB] hover:bg-gray-50' }}">Portfolio</a>
                <a href="{{ route('contact') }}"
                    class="block w-full text-center mt-4 px-3 py-3 rounded-md text-base font-medium text-white bg-[#2563EB] hover:bg-blue-700 transition-colors">Hire
                    Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Global Footer -->
    <footer class="bg-[#0F172A] text-gray-300 py-12 lg:py-16 border-t border-gray-800 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

                <!-- Brand Info -->
                <div class="lg:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 mb-6">
                        <x-application-logo class="h-8 w-auto text-[#2563EB]" />
                        <span class="text-xl font-outfit font-bold tracking-tight text-white">Selasar <span
                                class="text-[#2563EB]">Digital</span></span>
                    </a>
                    <p class="text-sm text-gray-400 mb-6 leading-relaxed">
                        Crafting high-quality digital solutions. We specialize in web development, mobile applications,
                        and user-centric UI/UX design.
                    </p>
                    <div class="flex space-x-4">
                        <!-- Social Icons (Placeholders) -->
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase mb-5">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">About Us</a></li>
                        <li><a href="{{ route('services') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">Services</a></li>
                        <li><a href="{{ route('portfolio') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">Portfolio</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase mb-5">Services</h3>
                    <ul class="space-y-3" id="footer-services-list">
                        <!-- We can hardcode top 3 or inject from view composers later. Hardcoding for standard looks -->
                        <li><a href="{{ route('services') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">Web Development</a>
                        </li>
                        <li><a href="{{ route('services') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">Mobile App
                                Development</a></li>
                        <li><a href="{{ route('services') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">UI/UX Design</a>
                        </li>
                        <li><a href="{{ route('services') }}"
                                class="text-sm text-gray-400 hover:text-[#2563EB] transition-colors">Cloud
                                Architecture</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase mb-5">Contact Us</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-[#2563EB] mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-400">hello@selasardigital.com</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-[#2563EB] mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-400">+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-[#2563EB] mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-400">Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-500">
                    &copy; {{ date('Y') }} Selasar Digital. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0 space-x-4">
                    <a href="#" class="text-sm text-gray-500 hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="text-sm text-gray-500 hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>