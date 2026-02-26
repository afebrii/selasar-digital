<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#1E293B] leading-tight">
            {{ __('Edit Portfolio Project') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] overflow-hidden p-6">

                <form method="POST" action="{{ route('admin.projects.update', $project) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('Project Title')" />
                            <x-text-input id="title" class="block w-full mt-1" type="text" name="title"
                                :value="old('title', $project->title)" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Category -->
                        <div>
                            <x-input-label for="project_category_id" :value="__('Category')" />
                            <select id="project_category_id" name="project_category_id"
                                class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('project_category_id', $project->project_category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('project_category_id')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            rows="5" required>{{ old('description', $project->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Tech Stack -->
                    <div class="mb-6">
                        <x-input-label for="tech_stack" :value="__('Tech Stack')" />
                        @php
                            $techStackString = is_array($project->tech_stack) ? implode(', ', $project->tech_stack) : old('tech_stack');
                        @endphp
                        <x-text-input id="tech_stack" class="block w-full mt-1" type="text" name="tech_stack"
                            :value="old('tech_stack', $techStackString)" placeholder="e.g., Laravel, Vue, Tailwind" />
                        <p class="text-sm text-gray-500 mt-1">Comma-separated list of technologies used.</p>
                        <x-input-error :messages="$errors->get('tech_stack')" class="mt-2" />
                    </div>

                    <!-- Case Study Details -->
                    <div class="border-t border-gray-200 pt-6 mt-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Case Study Details</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <!-- Timeline -->
                            <div>
                                <x-input-label for="timeline" :value="__('Timeline')" />
                                <x-text-input id="timeline" class="block w-full mt-1" type="text" name="timeline"
                                    :value="old('timeline', $project->timeline)" placeholder="e.g., 3 Months" />
                                <x-input-error :messages="$errors->get('timeline')" class="mt-2" />
                            </div>

                            <!-- Efficiency Improvement -->
                            <div>
                                <x-input-label for="efficiency_improvement" :value="__('Efficiency Improvement (%)')" />
                                <x-text-input id="efficiency_improvement" class="block w-full mt-1" type="text"
                                    name="efficiency_improvement" :value="old('efficiency_improvement', $project->efficiency_improvement)" placeholder="e.g., 30%" />
                                <x-input-error :messages="$errors->get('efficiency_improvement')" class="mt-2" />
                            </div>

                            <!-- System Uptime -->
                            <div>
                                <x-input-label for="system_uptime" :value="__('System Uptime')" />
                                <x-text-input id="system_uptime" class="block w-full mt-1" type="text"
                                    name="system_uptime" :value="old('system_uptime', $project->system_uptime)"
                                    placeholder="e.g., 99.9%" />
                                <x-input-error :messages="$errors->get('system_uptime')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Challenge -->
                        <div class="mb-4">
                            <x-input-label for="challenge" :value="__('The Challenge')" />
                            <textarea id="challenge" name="challenge"
                                class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                rows="3">{{ old('challenge', $project->challenge) }}</textarea>
                            <x-input-error :messages="$errors->get('challenge')" class="mt-2" />
                        </div>

                        <!-- Solution -->
                        <div class="mb-4">
                            <x-input-label for="solution" :value="__('The Solution')" />
                            <textarea id="solution" name="solution"
                                class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                rows="3">{{ old('solution', $project->solution) }}</textarea>
                            <x-input-error :messages="$errors->get('solution')" class="mt-2" />
                        </div>

                        <!-- Key Features -->
                        <div class="mb-4">
                            <x-input-label for="key_features" :value="__('Key Features')" />
                            <textarea id="key_features" name="key_features"
                                class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                rows="3"
                                placeholder="Enter one feature per line or separate with commas">{{ old('key_features', $project->key_features) }}</textarea>
                            <x-input-error :messages="$errors->get('key_features')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Testimonial Section -->
                    <div class="border-t border-gray-200 pt-6 mt-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Client Testimonial</h3>

                        <!-- Quote -->
                        <div class="mb-4">
                            <x-input-label for="testimonial_quote" :value="__('Testimonial Quote')" />
                            <textarea id="testimonial_quote" name="testimonial_quote"
                                class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                rows="3">{{ old('testimonial_quote', $project->testimonial_quote) }}</textarea>
                            <x-input-error :messages="$errors->get('testimonial_quote')" class="mt-2" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <!-- Name -->
                            <div>
                                <x-input-label for="testimonial_name" :value="__('Client Name')" />
                                <x-text-input id="testimonial_name" class="block w-full mt-1" type="text"
                                    name="testimonial_name" :value="old('testimonial_name', $project->testimonial_name)"
                                    placeholder="e.g., John Doe" />
                                <x-input-error :messages="$errors->get('testimonial_name')" class="mt-2" />
                            </div>

                            <!-- Industry -->
                            <div>
                                <x-input-label for="testimonial_industry" :value="__('Client Industry/Role')" />
                                <x-text-input id="testimonial_industry" class="block w-full mt-1" type="text"
                                    name="testimonial_industry" :value="old('testimonial_industry', $project->testimonial_industry)" placeholder="e.g., CEO at TechCorp" />
                                <x-input-error :messages="$errors->get('testimonial_industry')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <!-- Image Update Option -->
                    <div class="mb-6">
                        <x-input-label for="image" :value="__('Project Image (Leave blank to keep current)')" />
                        @if($project->image)
                            <div class="mt-2 mb-2">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($project->image) }}"
                                    alt="Current Project Image" class="h-32 object-cover rounded-md border border-gray-200">
                            </div>
                        @endif
                        <input id="image" type="file" name="image"
                            class="block w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            accept="image/*">
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <!-- Gallery Images -->
                    <div class="mb-4">
                        <label for="gallery" class="block text-gray-700 text-sm font-bold mb-2">Add More Gallery Images
                            (Optional)</label>

                        @if(is_array($project->gallery) && count($project->gallery) > 0)
                            <div class="mb-3">
                                <p class="text-sm text-gray-600 mb-2">Current Gallery Images:</p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($project->gallery as $galImg)
                                        <div class="w-20 h-20 rounded overflow-hidden border">
                                            <img src="{{ Storage::url($galImg) }}" class="w-full h-full object-cover">
                                        </div>
                                    @endforeach
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Uploading new images will add to this gallery.</p>
                            </div>
                        @endif

                        <input type="file" name="gallery[]" id="gallery"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            accept="image/*" multiple>
                        @error('gallery')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                        @if($errors->has('gallery.*'))
                            <div class="mt-2 text-sm text-red-600 space-y-1">
                                @foreach($errors->get('gallery.*') as $errorsArray)
                                    @foreach((array) $errorsArray as $errorMsg)
                                        <p class="text-red-500 text-xs italic">{{ $errorMsg }}</p>
                                    @endforeach
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Featured Checkbox -->
                    <div class="mb-6 block">
                        <label for="is_featured" class="inline-flex items-center">
                            <input id="is_featured" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>
                            <span
                                class="ms-2 text-sm text-gray-600">{{ __('Feature this project on the homepage') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end">
                        <a href="{{ route('admin.projects.index') }}"
                            class="text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                        <x-primary-button class="bg-[#2563EB] hover:bg-blue-700">
                            {{ __('Update Project') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>