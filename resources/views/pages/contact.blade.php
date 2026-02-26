@extends('layouts.frontend')

@section('title', 'Contact Us - Start Your Project | Selasar Digital')
@section('meta_description', 'Get in touch with Selasar Digital. Let\'s discuss your next custom software, web, or mobile application project. We are ready to help you innovate.')

@section('content')

    <!-- PAGE HEADER -->
    <section class="bg-[#0F172A] pt-24 pb-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl font-outfit font-bold text-white mb-6">Contact <span class="text-[#2563EB]">Us</span>
                </h1>
                <p class="text-xl text-gray-300">Ready to start your next project or have a question? We'd love to hear from
                    you.</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Contact Info Panel -->
                <div
                    class="lg:col-span-5 bg-gray-50 rounded-3xl p-10 border border-gray-100 shadow-sm relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-blue-100 rounded-full mix-blend-multiply opacity-50">
                    </div>

                    <h3 class="text-3xl font-outfit font-bold text-[#0F172A] mb-8 relative z-10">Get In Touch</h3>

                    <ul class="space-y-8 relative z-10">
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-100 text-[#2563EB]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-lg font-bold text-[#0F172A]">Email Us</h4>
                                <p class="text-gray-600 mt-1 mb-2">For general inquiries and project requests.</p>
                                <a href="mailto:hello@selasardigital.com"
                                    class="text-[#2563EB] font-medium hover:underline">hello@selasardigital.com</a>
                            </div>
                        </li>

                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-100 text-[#2563EB]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-lg font-bold text-[#0F172A]">Call or WhatsApp</h4>
                                <p class="text-gray-600 mt-1 mb-2">Mon-Fri from 9am to 6pm (WIB).</p>
                                <a href="https://wa.me/6281234567890" target="_blank"
                                    class="text-[#2563EB] font-medium hover:underline">+62 812 3456 7890</a>
                            </div>
                        </li>

                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-xl bg-blue-100 text-[#2563EB]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-lg font-bold text-[#0F172A]">Our Office</h4>
                                <p class="text-gray-600 mt-1">
                                    Sudirman Central Business District (SCBD)<br>
                                    Jakarta Selatan, DKI Jakarta<br>
                                    Indonesia 12190
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Contact Form Panel -->
                <div class="lg:col-span-7">

                    @if(Session::has('success'))
                        <div class="bg-green-50 border border-green-200 text-green-800 rounded-2xl p-6 mb-8 flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="text-lg font-bold">Message Sent!</h4>
                                <p class="mt-1">{{ Session::get('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <div class="bg-white">
                        <h3 class="text-3xl font-outfit font-bold text-[#0F172A] mb-8">Send Us A Message</h3>

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#2563EB] focus:ring-[#2563EB] bg-gray-50 py-3 px-4 text-sm"
                                        placeholder="John Doe">
                                    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address
                                        <span class="text-red-500">*</span></label>
                                    <input type="email" name="email" id="email" required value="{{ old('email') }}"
                                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#2563EB] focus:ring-[#2563EB] bg-gray-50 py-3 px-4 text-sm"
                                        placeholder="john@company.com">
                                    @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone
                                        Number</label>
                                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#2563EB] focus:ring-[#2563EB] bg-gray-50 py-3 px-4 text-sm"
                                        placeholder="+62 812 3456 7890">
                                    @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject <span
                                            class="text-red-500">*</span></label>
                                    <select name="subject" id="subject" required
                                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#2563EB] focus:ring-[#2563EB] bg-gray-50 py-3 px-4 text-sm">
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                        <option value="Web Development Project" {{ old('subject') == 'Web Development Project' ? 'selected' : '' }}>Web Development Project</option>
                                        <option value="Mobile App Project" {{ old('subject') == 'Mobile App Project' ? 'selected' : '' }}>Mobile App Project</option>
                                        <option value="UI/UX Design Services" {{ old('subject') == 'UI/UX Design Services' ? 'selected' : '' }}>UI/UX Design Services</option>
                                        <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('subject') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="mb-8">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message Details
                                    <span class="text-red-500">*</span></label>
                                <textarea name="message" id="message" rows="5" required
                                    class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#2563EB] focus:ring-[#2563EB] bg-gray-50 py-3 px-4 text-sm"
                                    placeholder="Tell us about your project, timeline, and goals...">{{ old('message') }}</textarea>
                                @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>

                            <button type="submit"
                                class="w-full md:w-auto inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-xl text-white bg-[#2563EB] hover:bg-blue-700 shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                                Send Message
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection