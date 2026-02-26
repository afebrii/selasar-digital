<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#1E293B] leading-tight">
            {{ __('Add Testimonial') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] overflow-hidden p-6">

                <form method="POST" action="{{ route('admin.testimonials.store') }}">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Client Name -->
                        <div>
                            <x-input-label for="client_name" :value="__('Client Name')" />
                            <x-text-input id="client_name" class="block w-full mt-1" type="text" name="client_name"
                                :value="old('client_name')" required autofocus />
                            <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                        </div>

                        <!-- Client Company -->
                        <div>
                            <x-input-label for="client_company" :value="__('Company / Role')" />
                            <x-text-input id="client_company" class="block w-full mt-1" type="text"
                                name="client_company" :value="old('client_company')"
                                placeholder="e.g., CEO of TechCorp" />
                            <x-input-error :messages="$errors->get('client_company')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="mb-6 w-full md:w-1/2">
                        <x-input-label for="rating" :value="__('Rating (1-5)')" />
                        <select id="rating" name="rating"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            required>
                            <option value="5" {{ old('rating', 5) == 5 ? 'selected' : '' }}>5 Stars</option>
                            <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>4 Stars</option>
                            <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>3 Stars</option>
                            <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>2 Stars</option>
                            <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>1 Star</option>
                        </select>
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>

                    <!-- Content -->
                    <div class="mb-6">
                        <x-input-label for="content" :value="__('Testimonial Content')" />
                        <textarea id="content" name="content"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            rows="5" required>{{ old('content') }}</textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end">
                        <a href="{{ route('admin.testimonials.index') }}"
                            class="text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                        <x-primary-button class="bg-[#2563EB] hover:bg-blue-700">
                            {{ __('Save Testimonial') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>