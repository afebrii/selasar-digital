<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#1E293B] leading-tight flex items-center">
            <a href="{{ route('admin.inquiries.index') }}" class="text-gray-500 hover:text-gray-700 mr-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            {{ __('View Inquiry') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] overflow-hidden">

                <div class="flex items-center justify-between p-6 border-b border-gray-200 bg-gray-50">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">{{ $inquiry->subject }}</h3>
                        <p class="text-sm text-gray-500 mt-1">Received on
                            {{ $inquiry->created_at->format('l, F j, Y \a\t g:i A') }}</p>
                    </div>

                    <div class="flex items-center space-x-3">
                        <!-- Mark as Unread Button -->
                        <form action="{{ route('admin.inquiries.update', $inquiry) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="is_read" value="0">
                            <button type="submit"
                                class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200 focus:outline-none transition">
                                Mark as Unread
                            </button>
                        </form>

                        <!-- Delete Button -->
                        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-3 py-1 border border-red-300 text-sm leading-4 font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

                <div class="p-6">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div>
                            <span
                                class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">From</span>
                            <div class="text-sm text-gray-900 font-medium">{{ $inquiry->name }}</div>
                            <div class="text-sm text-[#2563EB]"><a
                                    href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></div>
                        </div>
                        <div>
                            <span class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Phone
                                Number</span>
                            <div class="text-sm text-gray-900">{{ $inquiry->phone ?? 'Not provided' }}</div>
                            @if($inquiry->phone)
                                <div class="text-xs text-gray-500 mt-1">
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}"
                                        target="_blank" class="text-green-600 hover:text-green-800 flex items-center">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.115.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.098.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.937 0 3.825-3.113 6.938-6.938 6.938z" />
                                        </svg>
                                        Message on WhatsApp
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="prose max-w-none">
                        <h4 class="text-sm font-medium text-gray-900 border-b border-gray-200 pb-2 mb-4">Message</h4>
                        <div class="text-gray-700 whitespace-pre-wrap leading-relaxed">{{ $inquiry->message }}</div>
                    </div>
                </div>

                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex justify-end">
                    <a href="mailto:{{ $inquiry->email }}?subject=RE: {{ $inquiry->subject }}"
                        class="inline-flex items-center px-4 py-2 bg-[#2563EB] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        Reply via Email
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>