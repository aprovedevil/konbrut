<div class="flex min-h-screen">
    <div class="flex flex-col sticky top-0 w-64 bg-gray-50 border-r border-gray-200 h-screen overflow-y-auto">
        <div class="py-4 px-6 flex items-center space-x-4">
            <a href="{{ route('dashboard') }}" aria-label="Dashboard">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
            <p class="text-gray-800">Admin</p>
        </div>

        <div class="flex flex-col flex-grow">
            <div class="mb-10 mt-4">
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'text-blue-600 hover:text-blue-700' : 'text-gray-500 hover:text-green-600' }} flex items-center px-6 py-2.5 group"
                    aria-current="{{ request()->routeIs('admin.dashboard') ? 'page' : 'false' }}">
                    <svg class="h-5 w-5 mr-2 group-hover:fill-current" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    {{ __('Admin Dashboard') }}
                </a>

                <a href="{{ route('admin.account') }}"
                    class="{{ request()->routeIs('admin.account') ? 'text-blue-600 hover:text-blue-700' : 'text-gray-500 hover:text-green-600' }} flex items-center px-6 py-2.5 group"
                    aria-current="{{ request()->routeIs('admin.account') ? 'page' : 'false' }}">
                    <svg class="h-5 w-5 mr-2 group-hover:fill-current" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    {{ __('Admin Account') }}
                </a>
            </div>

            <div class="flex-grow">
                <div class="mb-10">
                    <h3 class="mx-6 mb-2 text-xs text-gray-400 uppercase tracking-widest">
                        Data Sekolah
                    </h3>
                    <a href="{{ route('admin.account') }}"
                        class="{{ request()->routeIs('admin.account') ? 'text-blue-600 hover:text-blue-700' : 'text-gray-500 hover:text-green-600' }} flex items-center px-6 py-2.5 group"
                        aria-current="{{ request()->routeIs('admin.account') ? 'page' : 'false' }}">
                        <svg class="h-5 w-5 mr-2 group-hover:fill-current" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        {{ __('Data Pendaftar') }}
                    </a>
                </div>

                <div class="mb-10">
                    <h3 class="mx-6 mb-2 text-xs text-gray-400 uppercase tracking-widest">
                        Following
                    </h3>
                    <!-- Add links for the Following section -->
                </div>
            </div>

            <!-- Elemen Logout yang ditempatkan di bagian bawah -->
            <div class="mb-3 px-6">
                <h3 class="text-xs text-gray-400 uppercase tracking-widest cursor-pointer">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </h3>
            </div>
        </div>
    </div>
</div>
