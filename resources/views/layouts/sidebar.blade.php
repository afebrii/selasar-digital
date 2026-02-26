<!-- Sidebar -->
<aside :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }"
    class="fixed inset-y-0 left-0 z-50 w-64 bg-[#0F172A] text-white transition-transform duration-300 ease-in-out md:translate-x-0 md:static md:inset-auto flex flex-col h-screen">

    <!-- Sidebar Header (Logo) -->
    <div class="flex items-center justify-center h-16 border-b border-[#334155] px-4">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2">
            <x-application-logo class="h-8 w-auto text-[#2563EB]" />
            <span class="text-xl font-bold tracking-wide">Selasar Digital</span>
        </a>
    </div>

    <!-- Sidebar Links -->
    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <a href="{{ route('dashboard') }}"
            class="flex items-center space-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('dashboard') ? 'bg-[#2563EB] text-white' : 'text-gray-300 hover:bg-[#334155] hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="font-medium">Dashboard</span>
        </a>

        <!-- Add CMS Links Here -->
        <a href="{{ route('admin.services.index') }}"
            class="flex items-center space-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.services.*') ? 'bg-[#2563EB] text-white' : 'text-gray-300 hover:bg-[#334155] hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
            <span class="font-medium">Services</span>
        </a>

        <a href="{{ route('admin.categories.index') }}"
            class="flex items-center space-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.categories.*') ? 'bg-[#2563EB] text-white' : 'text-gray-300 hover:bg-[#334155] hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                </path>
            </svg>
            <span class="font-medium">Categories</span>
        </a>

        <a href="{{ route('admin.projects.index') }}"
            class="flex items-center space-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.projects.*') ? 'bg-[#2563EB] text-white' : 'text-gray-300 hover:bg-[#334155] hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>
            <span class="font-medium">Portfolio Projects</span>
        </a>



        <a href="{{ route('admin.inquiries.index') }}"
            class="flex items-center space-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.inquiries.*') ? 'bg-[#2563EB] text-white' : 'text-gray-300 hover:bg-[#334155] hover:text-white' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
            <span class="font-medium">Inquiries</span>

            @php $newInquiries = \App\Models\Inquiry::where('is_read', false)->count(); @endphp
            @if($newInquiries > 0)
                <span
                    class="ml-auto bg-red-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">{{ $newInquiries }}</span>
            @endif
        </a>
    </nav>
</aside>