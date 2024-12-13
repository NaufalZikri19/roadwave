{{-- Navbar start --}}
<nav
    class="fixed top-0 z-[80] w-full bg-white border-b border-gray-200 shadow">
    <div class="px-4 py-4 lg:px-10 max-w-screen-xl mx-auto">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between w-full bg rtl:justify-end">
                <!-- Hamburger Sidebar -->
                <div class="flex justify-between items-center flex-1 sm:hidden">
                    <button
                        class="inline-flex items-center p-2 rounded-lg sm:hidden hover:bg-mainColor group text-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-300"
                        type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                        aria-controls="drawer-navigation">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6 group-hover:text-white" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- Logo -->
                <a href="/" class="flex ms-2 flex-2">
                    <img id="logo" src="{{ url('assets/icon/logo.png') }}" class="h-8 me-3" alt="Roadwave Logo" />
                </a>
                <ul class="hidden sm:flex flex-row font-bold rounded-lg rtl:space-x-reverse text-sm md:basis-1/3">
                    <li>
                        <a href="/"
                            class="text-base block py-2 px-3 text-slate-600 rounded hover:text-mainColor"
                            aria-current="page">PRODUCT</a>
                    </li>
                    <li>
                        <a href="/tentangkami"
                            class="text-base block py-2 px-3 text-slate-700 rounded hover:text-mainColor">INFORMATION</a>
                    </li>
                    <li>
                        <a href="/panduanukuran"
                            class="text-base block py-2 px-3 text-slate-700 rounded hover:text-mainColor">HELP</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-base block py-2 px-3 text-slate-700 rounded hover:text-mainColor">SALE</a>
                    </li>
                </ul>
                <div class="flex justify-end items-center flex-1 sm:flex-none">
                    <!-- Search Icon -->
                    <button
                        class="lg:hidden inline-flex items-center p-2 text-slate-800 rounded-lg hover:bg-mainColor focus:outline-none focus:ring-2 focus:ring-slate-300"
                        type="button" data-drawer-target="" data-drawer-show="" aria-controls="">
                        <span class="sr-only">Open main menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                    <!-- Search -->
                    <div class="relative hidden lg:block">
                        <form action="/search" method="GET" class="flex items-center">
                            <input
                                type="text"
                                id="search-navbar"
                                name="query"
                                class="block w-full p-1.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Cari produk..."
                                required
                            />
                            <button
                                type="submit"
                                class="absolute inset-y-0 start-0 flex items-center ps-3 text-gray-500 hover:text-gray-700">
                                <svg
                                    class="w-4 h-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 20 20">
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                                    />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <!-- Account -->
                    <button type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start"
                        class="lg:inline-flex hidden items-center p-2 text-slate-800 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-slate-300 ml-1 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <!-- Dropdown menu -->
                        <div id="userDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <div class="pt-4 pb-1 border-t border-gray-200">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="mt-3 space-y-1">
                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-responsive-nav-link>
                                    <x-responsive-nav-link :href="route('transaction.view')">
                                        {{ __('Pembayaran') }}
                                    </x-responsive-nav-link>
                                    <x-responsive-nav-link :href="route('history.view')">
                                        {{ __('Riwayat') }}
                                    </x-responsive-nav-link>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- Navbar end --}}

@include('components.sidebar')
@include('components.bottombar')
