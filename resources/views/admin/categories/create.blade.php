<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#1E293B] leading-tight">
            {{ __('Create Project Category') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] overflow-hidden p-6">

                <form method="POST" action="{{ route('admin.categories.store') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-6">
                        <x-input-label for="name" :value="__('Category Name')" />
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')"
                            required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <p class="text-sm text-gray-500 mt-1">The slug will be generated automatically from the name.
                        </p>
                    </div>

                    <div class="flex items-center justify-end">
                        <a href="{{ route('admin.categories.index') }}"
                            class="text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                        <x-primary-button class="bg-[#2563EB] hover:bg-blue-700">
                            {{ __('Save Category') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>