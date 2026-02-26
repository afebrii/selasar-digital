@extends('layouts.frontend')

@section('content')

    <!-- PAGE HEADER -->
    <section class="bg-[#0F172A] pt-24 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl font-outfit font-bold text-white mb-6">Our <span class="text-[#2563EB]">Services</span>
                </h1>
                <p class="text-xl text-gray-300">Comprehensive digital solutions designed to accelerate your growth and
                    streamline your operations.</p>
            </div>
        </div>
    </section>

    <!-- FULL SERVICES LIST -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($services as $service)
                    <div
                        class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-2xl hover:border-blue-200 transition-all duration-300 flex flex-col h-full group">
                        <div class="p-8 flex-grow">
                            <div
                                class="w-16 h-16 bg-blue-50 text-[#2563EB] rounded-2xl flex items-center justify-center mb-8 group-hover:-translate-y-2 group-hover:bg-[#2563EB] group-hover:text-white transition-all duration-300 shadow-sm">
                                @switch(strtolower($service->icon))
                                @case('globe')
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    @break
                                @case('smartphone')
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    @break
                                @case('pen-tool')
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    @break
                                @default
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            @endswitch
                            </div>
                            <h3 class="text-2xl font-bold text-[#0F172A] mb-4">{{ $service->name }}</h3>
                            <p class="text-gray-600 leading-relaxed">{{ $service->description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">No services currently listed. Check back soon!</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-20 bg-blue-50/50 border-t border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

                <div>
                    <h2 class="text-[#2563EB] text-sm font-bold tracking-widest uppercase mb-3">Why Choose Selasar</h2>
                    <h3 class="text-4xl font-outfit font-bold text-[#0F172A] mb-8">Not Just Vendors, But Technology Partners
                    </h3>

                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-[#2563EB] mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-[#0F172A]">Expert Architecture</h4>
                                <p class="text-gray-600 mt-1">We don't just write code; we architect systems that are
                                    scalable, maintainable, and secure from day one.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-[#2563EB] mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-[#0F172A]">Agile Delivery</h4>
                                <p class="text-gray-600 mt-1">Experience transparent and iterative development that adapts
                                    to your changing business needs.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-[#2563EB] mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-[#0F172A]">Continuous Support</h4>
                                <p class="text-gray-600 mt-1">We stand by our work with dedicated SLA agreements,
                                    monitoring, and ongoing maintenance.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="mt-12 lg:mt-0">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
                            alt="Coding" class="rounded-xl shadow-md w-full h-full object-cover aspect-square">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
                            alt="Meeting" class="rounded-xl shadow-md w-full h-full object-cover aspect-square mt-8">
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection