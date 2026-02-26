<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#1E293B] leading-tight">
            {{ __('Edit Service') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] overflow-hidden p-6">

                <form method="POST" action="{{ route('admin.services.update', $service) }}">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div class="mb-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title', $service->title)" required autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            rows="4" required>{{ old('description', $service->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Icon -->
                    <div class="mb-6">
                        <x-input-label for="icon" :value="__('Icon (e.g., globe, smartphone)')" />
                        <x-text-input id="icon" class="block w-full mt-1" type="text" name="icon" :value="old('icon', $service->icon)" />
                        <p class="text-sm text-gray-500 mt-1">We use Feather Icons or similar. Enter the icon name.</p>
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end">
                        <a href="{{ route('admin.services.index') }}"
                            class="text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                        <x-primary-button class="bg-[#2563EB] hover:bg-blue-700">
                            {{ __('Update Service') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>