@extends('layouts.frontend')

@section('title', 'About Us - Selasar Digital')
@section('meta_description', 'Learn about Selasar Digital, our mission to bridge complex business challenges with elegant technological solutions, and the core values that drive our team.')

@section('content')

    <!-- PAGE HEADER -->
    <section class="bg-[#0F172A] pt-24 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl font-outfit font-bold text-white mb-6">About <span class="text-[#2563EB]">Us</span></h1>
                <p class="text-xl text-gray-300">We are a passionate team of technologists, designers, and strategists
                    dedicated to building digital products that make a difference.</p>
            </div>
        </div>
    </section>

    <!-- OUR STORY -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

                <div class="mb-12 lg:mb-0 relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
                        alt="Our Team Meeting" class="rounded-2xl shadow-xl w-full object-cover">
                    <!-- Decorative Element -->
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-blue-100 rounded-2xl -z-10 hidden md:block"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-gray-100 rounded-full -z-10 hidden md:block"></div>
                </div>

                <div>
                    <h2 class="text-[#2563EB] text-sm font-bold tracking-widest uppercase mb-3">Our Story</h2>
                    <h3 class="text-4xl font-outfit font-bold text-[#0F172A] mb-6">Driven by Innovation & Excellence</h3>

                    <div class="prose prose-lg text-gray-600 font-inter">
                        <p class="mb-5">Selasar Digital was founded with a simple yet powerful vision: to bridge the gap
                            between complex business challenges and elegant, scalable technological solutions.</p>
                        <p class="mb-5">What started as a small group of enthusiastic developers has grown into a
                            full-service software house. We don't just write code; we partner with you to understand your
                            market, your users, and your goals.</p>
                        <p>Our approach combines agile methodologies with strict quality assurance, ensuring that every
                            project is delivered on time and exceeds expectations. Whether you are a startup taking your
                            first steps or an enterprise undergoing digital transformation, we have the expertise to get you
                            there.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="py-20 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-[#2563EB] text-sm font-bold tracking-widest uppercase mb-3">What We Believe In</h2>
                <h3 class="text-4xl font-outfit font-bold text-[#0F172A]">Our Core Values</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Value 1 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center hover:-translate-y-2 hover:shadow-lg transition-transform duration-300">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-50 text-[#2563EB] rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-[#0F172A] mb-3">Innovation</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">We constantly explore new technologies and approaches
                        to provide cutting-edge solutions.</p>
                </div>

                <!-- Value 2 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center hover:-translate-y-2 hover:shadow-lg transition-transform duration-300">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-50 text-[#2563EB] rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-[#0F172A] mb-3">Integrity</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Absolute transparency, honesty, and ethical behavior in
                        all our client engagements.</p>
                </div>

                <!-- Value 3 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center hover:-translate-y-2 hover:shadow-lg transition-transform duration-300">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-50 text-[#2563EB] rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-[#0F172A] mb-3">Collaboration</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">We view our clients as partners. Your success is
                        inherently tied to our success.</p>
                </div>

                <!-- Value 4 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center hover:-translate-y-2 hover:shadow-lg transition-transform duration-300">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-50 text-[#2563EB] rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-[#0F172A] mb-3">Excellence</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">We don't settle for 'good enough'. We strive for
                        exceptional quality in every line of code.</p>
                </div>

            </div>
        </div>
    </section>

@endsection