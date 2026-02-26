@extends('layouts.frontend')

@section('title', 'Our Portfolio - Digital Products We\'ve Built | Selasar Digital')
@section('meta_description', 'Explore Selasar Digital\'s portfolio of past projects. We have crafted innovative web and mobile solutions for clients across various industries.')

@section('content')

    <!-- PAGE HEADER -->
    <section class="bg-[#0F172A] pt-24 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl font-outfit font-bold text-white mb-6">Our <span class="text-[#2563EB]">Portfolio</span>
                </h1>
                <p class="text-xl text-gray-300">Explore some of the digital products we've brought to life for our amazing
                    clients.</p>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO GRID WITH ALPINE FILTERING -->
    <section class="py-24 bg-gray-50 min-h-screen" x-data="{ activeCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Filters -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-16">
                <button @click="activeCategory = 'all'"
                    :class="{ 'bg-[#2563EB] text-white border-[#2563EB]': activeCategory === 'all', 'bg-white text-gray-600 border-gray-200 hover:bg-gray-50': activeCategory !== 'all' }"
                    class="px-6 py-2 rounded-full border text-sm font-medium transition-colors duration-300 focus:outline-none">
                    All Work
                </button>

                @foreach($categories as $category)
                    <button @click="activeCategory = '{{ $category->slug }}'"
                        :class="{ 'bg-[#2563EB] text-white border-[#2563EB]': activeCategory === '{{ $category->slug }}', 'bg-white text-gray-600 border-gray-200 hover:bg-gray-50': activeCategory !== '{{ $category->slug }}' }"
                        class="px-6 py-2 rounded-full border text-sm font-medium transition-colors duration-300 focus:outline-none">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($projects as $project)
                    <div x-show="activeCategory === 'all' || activeCategory === '{{ $project->category->slug }}'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col h-full border border-gray-100 {{ $project->is_featured ? 'ring-2 ring-blue-100' : '' }}"
                        style="display: none;">

                        <!-- Image -->
                        <div class="aspect-square w-full overflow-hidden bg-gray-100 relative">
                            @if($project->image)
                                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div
                                    class="w-full h-full bg-gradient-to-br from-gray-50 to-gray-200 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            @endif

                            <!-- Category Tag -->
                            <div class="absolute top-4 left-4">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/95 text-[#2563EB] shadow-sm tracking-wide uppercase">
                                    {{ $project->category->name }}
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8 flex-grow flex flex-col">
                            <h3 class="text-2xl font-bold text-[#0F172A] mb-3 group-hover:text-[#2563EB] transition-colors">
                                {{ $project->title }}
                            </h3>
                            <p class="text-gray-600 mb-6 flex-grow">{{ $project->description }}</p>

                            {{-- @if(!empty($project->tech_stack))
                            <div class="pt-6 border-t border-gray-100 mt-auto">
                                <h4 class="text-xs font-semibold text-gray-500 tracking-wider uppercase mb-3">Technologies Used
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    @foreach(is_array($project->tech_stack) ? $project->tech_stack : explode(',',
                                    $project->tech_stack) as $tech)
                                    <span
                                        class="px-3 py-1 bg-gray-50 border border-gray-200 text-gray-600 rounded-md text-xs font-medium">
                                        {{ trim($tech) }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            @endif --}}

                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <a href="{{ route('portfolio.show', $project->slug) }}"
                                    class="inline-flex items-center text-sm font-semibold text-[#0F172A] group-hover:text-[#2563EB] transition-colors">
                                    View Case Study
                                    <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20 bg-white rounded-2xl border border-dashed border-gray-300">
                        <p class="text-gray-500 text-lg">No portfolio projects available yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection