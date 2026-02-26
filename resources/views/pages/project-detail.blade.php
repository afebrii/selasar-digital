@extends('layouts.frontend')

@section('title', $project->title . ' - Case Study | Selasar Digital')
@section('meta_description', Str::limit(strip_tags($project->description ?? $project->challenge ?? 'Explore this custom digital solution developed by Selasar Digital.'), 160))
@if($project->image)
@section('meta_image', asset('storage/' . $project->image))
@endif

@section('content')

    <!-- HERO SECTION -->
    <section class="bg-[#0F172A] pt-32 pb-12 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] mt-16">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <a href="{{ route('portfolio') }}"
                class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-white transition-colors mb-8">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                Back to Portfolio
            </a>

            <div class="lg:w-2/3">
                <span
                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/10 text-blue-300 tracking-wide uppercase mb-6 border border-white/20">
                    {{ $project->category->name }}
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-outfit font-bold text-white mb-6 leading-tight">
                    {{ $project->title }}
                </h1>

                @if(!empty($project->description))
                    <p class="mt-6 text-lg text-gray-300 leading-relaxed max-w-3xl whitespace-pre-line">
                        {{ $project->description }}
                    </p>
                @endif
            </div>
        </div>
    </section>

    <!-- CASE STUDY CONTENT -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Main Content -->
                <!-- Main Content -->
                <div class="lg:col-span-8 order-2 lg:order-1 mt-8 lg:mt-0">
                    @php
                        // Combine main image with gallery images if they exist
                        $allImages = [];
                        if ($project->image) {
                            $allImages[] = $project->image;
                        }
                        if (is_array($project->gallery) && count($project->gallery) > 0) {
                            $allImages = array_merge($allImages, $project->gallery);
                        }
                    @endphp

                    @if(count($allImages) > 0)
                        <!-- Carousel Component -->
                        <div x-data="{ 
                                                                                                                                activeSlide: 0, 
                                                                                                                                slides: {{ json_encode($allImages) }},
                                                                                                                                next() { this.activeSlide = this.activeSlide === this.slides.length - 1 ? 0 : this.activeSlide + 1 },
                                                                                                                                prev() { this.activeSlide = this.activeSlide === 0 ? this.slides.length - 1 : this.activeSlide - 1 }
                                                                                                                            }"
                            class="relative max-w-lg mx-auto rounded-2xl overflow-hidden shadow-2xl mb-12 border border-gray-100 group w-full bg-gray-100">

                            <!-- Main Slider -->
                            <div class="relative aspect-square w-full overflow-hidden">
                                <template x-for="(slide, index) in slides" :key="index">
                                    <div x-show="activeSlide === index" x-transition:enter="transition ease-out duration-500"
                                        x-transition:enter-start="opacity-0 translate-x-full"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:leave="transition ease-in duration-300 absolute inset-0"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave-end="opacity-0 -translate-x-full" class="w-full h-full">
                                        <img :src="'/storage/' + slide" :alt="'{{ $project->title }} - Image ' + (index + 1)"
                                            class="w-full h-full object-cover">
                                    </div>
                                </template>
                            </div>

                            <!-- Navigation Arrows (Show only if more than 1 image) -->
                            <template x-if="slides.length > 1">
                                <div>
                                    <button @click="prev"
                                        class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/80 hover:bg-white text-gray-800 flex items-center justify-center shadow-lg transition-all opacity-0 group-hover:opacity-100 focus:opacity-100 z-10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                    <button @click="next"
                                        class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/80 hover:bg-white text-gray-800 flex items-center justify-center shadow-lg transition-all opacity-0 group-hover:opacity-100 focus:opacity-100 z-10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </template>

                            <!-- Thumbnails/Dots (Show only if more than 1 image) -->
                            <template x-if="slides.length > 1">
                                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 z-10">
                                    <template x-for="(slide, index) in slides" :key="index">
                                        <button @click="activeSlide = index"
                                            :class="{'w-8 bg-[#2563EB]': activeSlide === index, 'w-2 bg-white/60 hover:bg-white/90': activeSlide !== index}"
                                            class="h-2 rounded-full transition-all duration-300"></button>
                                    </template>
                                </div>
                            </template>
                        </div>
                    @endif

                    <!-- CASE STUDY DETAILS -->
                    <div class="prose prose-lg prose-blue max-w-none font-inter text-gray-600 space-y-16">

                        <!-- 1. The Challenge -->
                        @if($project->challenge)
                            <div>
                                <h2 class="text-3xl font-outfit font-bold text-[#0F172A] mb-6">The Challenge</h2>
                                <p class="text-lg leading-relaxed whitespace-pre-line">
                                    {{ $project->challenge }}
                                </p>
                            </div>
                        @endif

                        <!-- 2. The Solution -->
                        @if($project->solution || $project->key_features)
                            <div>
                                <h2 class="text-3xl font-outfit font-bold text-[#0F172A] mb-6">The Solution</h2>
                                @if($project->solution)
                                    <p class="text-lg leading-relaxed mb-6 whitespace-pre-line">
                                        {{ $project->solution }}
                                    </p>
                                @endif

                                @if($project->key_features)
                                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100">
                                        <h4 class="font-bold text-[#0F172A] mb-4">Key Features Delivered:</h4>
                                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                            @foreach(explode("\n", $project->key_features) as $feature)
                                                @if(trim($feature))
                                                    <li>{{ trim(str_replace('-', '', $feature)) }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        @endif

                        <!-- 3. Results & Impact -->
                        @if($project->efficiency_improvement || $project->system_uptime)
                            <div>
                                <h2 class="text-3xl font-outfit font-bold text-[#0F172A] mb-6">Results & Impact</h2>

                                <div
                                    class="grid grid-cols-1 {{ $project->efficiency_improvement && $project->system_uptime ? 'md:grid-cols-2' : '' }} gap-6 mb-8">
                                    @if($project->efficiency_improvement)
                                        <div
                                            class="bg-[#0F172A] rounded-2xl p-8 text-white text-center flex flex-col justify-center">
                                            <div class="text-4xl font-bold text-[#2563EB] mb-2">
                                                {{ $project->efficiency_improvement }}
                                            </div>
                                            <div class="text-sm text-gray-300 uppercase tracking-widest">Peningkatan Efisiensi</div>
                                        </div>
                                    @endif
                                    @if($project->system_uptime)
                                        <div
                                            class="bg-[#0F172A] rounded-2xl p-8 text-white text-center flex flex-col justify-center">
                                            <div class="text-4xl font-bold text-[#2563EB] mb-2">{{ $project->system_uptime }}</div>
                                            <div class="text-sm text-gray-300 uppercase tracking-widest">System Uptime</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- 4. Testimonial -->
                        @if($project->testimonial_quote)
                            <blockquote
                                class="p-8 bg-blue-50 rounded-2xl border border-blue-100 italic text-gray-700 relative mt-8">
                                <svg class="absolute top-4 left-4 w-8 h-8 text-blue-200" fill="currentColor" viewBox="0 0 32 32"
                                    aria-hidden="true">
                                    <path
                                        d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                </svg>
                                <span class="relative z-10 pl-6 block whitespace-pre-line">
                                    "{{ $project->testimonial_quote }}"
                                </span>
                                @if($project->testimonial_name)
                                    <footer class="mt-4 font-semibold text-[#0F172A] pl-6 block">
                                        - {{ $project->testimonial_name }}
                                        @if($project->testimonial_industry)
                                            <span class="text-sm text-gray-500 font-normal">,
                                                {{ $project->testimonial_industry }}</span>
                                        @endif
                                    </footer>
                                @endif
                            </blockquote>
                        @endif

                    </div>
                </div>

                <!-- Sidebar Details -->
                <div class="lg:col-span-4 order-1 lg:order-2">
                    <div
                        class="max-w-md mx-auto lg:ml-auto lg:mr-0 w-full bg-gray-50 rounded-2xl p-8 border border-gray-100 lg:sticky lg:top-32">
                        <h3 class="text-xl font-outfit font-bold text-[#0F172A] mb-6 pb-4 border-b border-gray-200">Project
                            Overview</h3>

                        <dl class="space-y-6">
                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Project Name
                                </dt>
                                <dd class="text-base font-medium text-gray-900">{{ $project->title }}</dd>
                            </div>

                            {{-- <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Role</dt>
                                <dd class="text-base font-medium text-gray-900">Fullstack Development & UI/UX</dd>
                            </div> --}}

                            @if($project->timeline)
                                <div>
                                    <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Timeline</dt>
                                    <dd class="text-base font-medium text-gray-900">{{ $project->timeline }}</dd>
                                </div>
                            @endif

                            <div>
                                <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Category</dt>
                                <dd class="text-base font-medium text-gray-900">{{ $project->category->name }}</dd>
                            </div>

                            @if(!empty($project->tech_stack))
                                <div>
                                    <dt class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Technologies
                                    </dt>
                                    <dd>
                                        <ul class="space-y-2">
                                            @foreach(is_array($project->tech_stack) ? $project->tech_stack : explode(',', $project->tech_stack) as $tech)
                                                <li class="flex items-center text-gray-700 text-sm">
                                                    <svg class="w-4 h-4 mr-2 text-[#2563EB]" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                    {{ trim($tech) }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </dd>
                                </div>
                            @endif

                            <div class="pt-6 mt-6 border-t border-gray-200">
                                <p class="text-sm text-gray-600 mb-4">Start a Project Like This</p>
                                <a href="{{ route('contact') }}"
                                    class="flex items-center justify-center w-full px-4 py-3 bg-[#2563EB] hover:bg-blue-700 text-white font-semibold rounded-xl transition-colors shadow-sm">
                                    Contact Selasar Digital
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RELATED PROJECTS -->
    @if($relatedProjects->count() > 0)
        <section class="py-24 bg-gray-50 border-t border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-12">
                    <h2 class="text-3xl font-outfit font-bold text-[#0F172A]">Related Projects</h2>
                    <a href="{{ route('portfolio') }}"
                        class="text-[#2563EB] font-medium hover:text-blue-800 transition-colors hidden sm:inline-flex items-center">
                        View full portfolio
                        <svg class="ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($relatedProjects as $related)
                        <div
                            class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
                            <!-- Image -->
                            <div class="aspect-square w-full overflow-hidden bg-gray-100 relative">
                                @if($related->image)
                                    <img src="{{ Storage::url($related->image) }}" alt="{{ $related->title }}"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                                @else
                                    <div
                                        class="w-full h-full bg-gradient-to-br from-gray-50 to-gray-200 flex items-center justify-center text-gray-400">
                                        Image coming soon
                                    </div>
                                @endif
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex-grow flex flex-col">
                                <span
                                    class="text-xs font-semibold text-[#2563EB] uppercase tracking-wider mb-2">{{ $related->category->name }}</span>
                                <h4 class="text-xl font-bold text-[#0F172A] mb-3 group-hover:text-[#2563EB] transition-colors"><a
                                        href="{{ route('portfolio.show', $related->slug) }}">{{ $related->title }}</a></h4>

                                <div class="mt-auto pt-4 border-t border-gray-100">
                                    <a href="{{ route('portfolio.show', $related->slug) }}"
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
                    @endforeach
                </div>

                <div class="mt-8 text-center sm:hidden">
                    <a href="{{ route('portfolio') }}"
                        class="inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-sm font-medium rounded-full text-[#0F172A] bg-white hover:bg-gray-50 transition-colors">
                        View full portfolio
                    </a>
                </div>
            </div>
        </section>
    @endif

@endsection