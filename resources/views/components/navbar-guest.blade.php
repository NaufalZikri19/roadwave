{{-- Navbar start --}}
<nav
    class="fixed top-0 z-[80] w-full bg-white border-b border-gray-200 shadow">
    <div class="px-4 py-4 lg:px-10 mx-auto">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between lg:justify-start w-full rtl:justify-start">
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
                <a href="/" class="hidden md:flex justify-center items-center">
                    <img id="logo" src="{{ url('assets/icon/logo.png') }}" class="h-8 me-3" alt="Roadwave Logo" />
                </a>
                <ul class="hidden sm:flex flex-row font-bold rounded-lg rtl:space-x-reverse space-x-3 ms-10 text-sm md:basis-1/3">
                    <li>
                        <a href="/"
                            class="text-base block py-2 px-2 text-slate-600 rounded hover:text-mainColor"
                            aria-current="page">PRODUCT</a>
                    </li>
                    <li>
                        <a href="/tentangkami"
                            class="text-base block py-2 px-2 text-slate-700 rounded hover:text-mainColor">INFORMATION</a>
                    </li>
                    <li>
                        <a href="/panduanukuran"
                            class="text-base block py-2 px-2 text-slate-700 rounded hover:text-mainColor">HELP</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-base block py-2 px-2 text-slate-700 rounded hover:text-mainColor">SALE</a>
                    </li>
                </ul>
            </div>
            <div class="flex justify-end items-center flex-1 sm:flex-none">
                <!-- Search -->
                <div class="relative">
                    <form action="{{ route('search') }}" method="GET">
                        <input
                            type="search"
                            id="search-navbar"
                            name="query"
                            class="block w-[300px] md:w-full p-1.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Cari produk..."
                            value="{{ request('query') }}"
                            required />
                        <button
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
                <button type="button"
                    class="lg:inline-flex hidden items-center p-2 text-slate-800 rounded-lg hover:bg-green-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-slate-300 ml-1 group border border-slate-300">
                    <a href="{{ route('login') }}">Login</a>
                </button>
                <button type="button"
                    class="lg:inline-flex hidden items-center p-2 text-slate-50 rounded-lg bg-primary hover:bg-green-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-slate-300 ml-1 group border border-slate-300">
                    <a href="{{ route('register') }}">Register</a>
                </button>
            </div>
        </div>
    </div>
</nav>
{{-- Navbar end --}}

@include('components.sidebar')
@include('components.bottombar')
