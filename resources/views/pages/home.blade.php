@extends('layouts.frontend')

@section('title', 'Selasar Digital - Custom Software & Web Development Agency')
@section('meta_description', 'Selasar Digital provides premium web development, mobile apps, and UI/UX design. Partner with us to accelerate your business growth through technology.')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative bg-white overflow-hidden pt-12 lg:pt-20 pb-20">
        <!-- Background Elements -->
        <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-blue-50 to-white -z-10"></div>
        <div class="absolute top-0 right-10 -translate-y-12 translate-x-1/3 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute top-32 right-1/4 translate-x-1/3 w-72 h-72 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                
                <!-- Hero Text -->
                <div class="lg:col-span-6 text-center lg:text-left mb-16 lg:mb-0">
                    <span class="inline-block py-1 px-3 rounded-full bg-blue-50 border border-blue-100 text-[#2563EB] text-sm font-semibold mb-6 tracking-wide uppercase">
                        Empowering Digital Innovation
                    </span>
                    <h1 class="text-5xl lg:text-6xl/tight font-outfit font-extrabold text-[#0F172A] mb-8 tracking-tight">
                        We Build <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2563EB] to-[#4F46E5]">Scalable</span> Software Solutions.
                    </h1>
                    <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-inter">
                        Selasar Digital is your trusted technology partner. We craft modern, performant web and mobile applications tailored to drive your business forward.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('portfolio') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-transparent text-base font-medium rounded-full text-white bg-[#0F172A] hover:bg-[#1E293B] shadow-xl hover:-translate-y-1 transition-all duration-300">
                            Our Portfolio
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3.5 border border-[#E2E8F0] text-base font-medium rounded-full text-[#0F172A] bg-white hover:bg-gray-50 hover:-translate-y-1 transition-all duration-300 shadow-sm">
                            Work With Us
                            <svg class="ml-2 w-5 h-5 text-[#2563EB] group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Hero Image/Graphic -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-2xl bg-white shadow-2xl overflow-hidden border border-gray-100 p-2 transform transition-transform hover:-translate-y-2 duration-500">
                        <img class="w-full h-auto rounded-xl object-cover" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" alt="Selasar Digital Team Collaborating">
                        <!-- Floating Glass Card -->
                        <div class="absolute -bottom-6 -left-6 bg-white/70 backdrop-blur-md border border-white/50 shadow-xl rounded-xl p-5 w-64 hidden md:flex items-center gap-4">
                            <div class="bg-green-100 text-green-600 p-3 rounded-full">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">100% Quality</p>
                                <p class="text-xs text-gray-500">Delivered on time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- LOGO CLOUD (Trust Signals) -->
    <section class="py-10 border-t border-b border-gray-100 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm font-medium text-gray-500 uppercase tracking-widest mb-8">Trusted by innovative companies</p>
            <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Placeholder SVG Logos -->
                <svg class="h-8 text-gray-800" viewBox="0 0 100 30" fill="currentColor"><path d="M10 20h20v-5H10v5zM10 10h20V5H10v5zM40 20h20v-5H40v5zM40 10h20V5H40v5zM70 20h20v-5H70v5zM70 10h20V5H70v5z"/></svg>
                <svg class="h-8 text-gray-800" viewBox="0 0 100 30" fill="currentColor"><path d="M10 15a5 5 0 100-10 5 5 0 000 10zm25 0a5 5 0 100-10 5 5 0 000 10zm25 0a5 5 0 100-10 5 5 0 000 10z"/></svg>
                <svg class="h-8 text-gray-800" viewBox="0 0 100 30" fill="currentColor"><rect width="20" height="20" x="10" y="5"/><rect width="20" height="20" x="40" y="5"/><rect width="20" height="20" x="70" y="5"/></svg>
            </div>
        </div>
    </section> --}}

    <!-- SERVICES OVERVIEW -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-[#2563EB] text-sm font-bold tracking-widest uppercase mb-3">Our Expertise</h2>
                <h3 class="text-4xl font-outfit font-bold text-[#0F172A] mb-4">Tailored Solutions for Your Needs</h3>
                <p class="text-gray-600 text-lg">We combine strategic thinking with technical excellence to build products that users love and businesses rely on.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="group bg-white rounded-2xl border border-gray-100 p-8 shadow-sm hover:shadow-2xl hover:border-blue-100 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-50 text-[#2563EB] rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#2563EB] group-hover:text-white transition-all duration-300">
                        @switch(strtolower($service->icon))
                            @case('globe')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                @break
                            @case('smartphone')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                @break
                            @case('pen-tool')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                @break
                            @default
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        @endswitch
                    </div>
                    <h4 class="text-xl font-bold text-[#0F172A] mb-3">{{ $service->name }}</h4>
                    <p class="text-gray-600 mb-6 leading-relaxed line-clamp-3">{{ $service->description }}</p>
                    <a href="{{ route('services') }}" class="inline-flex items-center text-sm font-semibold text-[#2563EB] group-hover:text-blue-700">
                        Learn more 
                        <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- FEATURED PROJECTS -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div class="max-w-2xl">
                    <h2 class="text-[#2563EB] text-sm font-bold tracking-widest uppercase mb-3">Our Work</h2>
                    <h3 class="text-4xl font-outfit font-bold text-[#0F172A]">Featured Projects</h3>
                </div>
                <div class="mt-6 md:mt-0">
                    <a href="{{ route('portfolio') }}" class="inline-flex items-center text-[#2563EB] font-medium hover:text-blue-800 transition-colors">
                        Explore Full Portfolio
                        <svg class="ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <!-- Project Image -->
                    <div class="aspect-square w-full overflow-hidden bg-gray-200 relative">
                        @if($project->image)
                            <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-300 flex items-center justify-center">
                                <span class="text-gray-400 font-medium">Image coming soon</span>
                            </div>
                        @endif
                        
                        <!-- Overlay Category -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/90 backdrop-blur-sm text-[#0F172A] shadow-sm">
                                {{ $project->category->name }}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Project Info -->
                    <div class="p-8">
                        <h4 class="text-2xl font-bold text-[#0F172A] mb-3 group-hover:text-[#2563EB] transition-colors">{{ $project->title }}</h4>
                        <p class="text-gray-600 mb-6 line-clamp-2">{{ $project->description }}</p>
                        
                        @if(!empty($project->tech_stack))
                        <div class="flex flex-wrap gap-2">
                            @foreach(is_array($project->tech_stack) ? $project->tech_stack : explode(',', $project->tech_stack) as $tech)
                                <span class="px-2.5 py-1 rounded bg-gray-100 text-gray-600 text-xs font-medium border border-gray-200">
                                    {{ trim($tech) }}
                                </span>
                            @endforeach
                        </div>
                        @endif

                        <div class="mt-8 pt-6 border-t border-gray-100 mt-auto">
                            <a href="{{ route('portfolio.show', $project->slug) }}" class="inline-flex items-center justify-center w-full px-4 py-3 bg-gray-50 hover:bg-[#2563EB] text-[#0F172A] hover:text-white border border-gray-200 hover:border-transparent text-sm font-semibold rounded-xl transition-all duration-300">
                                View Case Study
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-[#2563EB] text-sm font-bold tracking-widest uppercase mb-3">Client Stories</h2>
                <h3 class="text-4xl font-outfit font-bold text-[#0F172A]">Don't Just Take Our Word For It</h3>
            </div>

            <!-- Simple CSS Grid for Testimonials (Replacing a complex JS slider for stability, but styling it beautifully) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($testimonials->take(3) as $testimonial)
                <div class="bg-white rounded-2xl border border-gray-100 p-8 shadow-sm hover:shadow-lg transition-all duration-300 relative">
                    <!-- Quote Mark -->
                    <svg class="absolute top-6 right-6 w-10 h-10 text-blue-50" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                        <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                    </svg>
                    
                    <div class="flex text-yellow-400 mb-4">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    
                    <p class="text-gray-600 mb-8 italic relative z-10">"{!! nl2br(e($testimonial->content)) !!}"</p>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-[#0F172A] rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            {{ substr($testimonial->client_name, 0, 1) }}
                        </div>
                        <div>
                            <h5 class="font-bold text-[#0F172A]">{{ $testimonial->client_name }}</h5>
                            @if($testimonial->client_company)
                                <p class="text-sm text-gray-500">{{ $testimonial->client_company }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-[#0F172A]"></div>
        <!-- Decorative bg patterns -->
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="absolute right-0 bottom-0 w-1/2 h-full bg-gradient-to-l from-[#2563EB]/20 to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-outfit font-bold text-white mb-6">Ready to Start Your Project?</h2>
                <p class="text-xl text-gray-300 mb-10">Let's build something remarkable together. Get in touch with our team for a free consultation and project estimate.</p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-full text-[#0F172A] bg-white hover:bg-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        Contact Us Today
                    </a>
                    <a href="https://wa.me/6282216796892" target="_blank" class="inline-flex items-center justify-center px-8 py-4 border border-gray-600 text-lg font-medium rounded-full text-white bg-transparent hover:bg-gray-800 hover:border-gray-500 transition-colors">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.115.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.098.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.937 0 3.825-3.113 6.938-6.938 6.938z"/></svg>
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
