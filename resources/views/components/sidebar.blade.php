{{-- Sidebar start --}}
<div id="drawer-navigation"
    class="fixed top-0 left-0 z-[81] w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label"
        class="font-extrabold text-mainColor uppercase font-manrope text-lg">Menu</h5>
    <hr class="w-4/5 border rounded-full border-slate-300 outline-none mt-2" />
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/"
                    class="flex items-center p-2 text-slate-800 rounded-lg group font-manrope text-base active:bg-mainColor active:text-white">
                    <span class="ms-3">T-Shirt</span>
                </a>
            </li>
            <li>
                <a href="/"
                    class="flex items-center p-2 text-slate-800 rounded-lg group font-manrope text-base active:bg-mainColor active:text-white">
                    <span class="ms-3">Shirt</span>
                </a>
            </li>
            <li>
                <a href="/"
                    class="flex items-center p-2 text-slate-800 rounded-lg group font-manrope text-base active:bg-mainColor active:text-white">
                    <span class="ms-3">Pants</span>
                </a>
            </li>
            <li>
                <a href="/"
                    class="flex items-center p-2 text-slate-800 rounded-lg group font-manrope text-base active:bg-mainColor active:text-white">
                    <span class="ms-3">Outwear</span>
                </a>
            </li>
            <hr />
            <li>
                <a href="#"
                    class="flex items-center p-2 text-slate-800 rounded-lg group font-manrope text-base active:bg-mainColor active:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                    <span class="ms-3">My Wish List</span>
                </a>
            </li>
            <li>
                <a href="/tentangkami"
                    class="flex items-center p-2 text-slate-800 rounded-lg group font-manrope text-base active:bg-mainColor active:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                    <span class="ms-3">Information</span>
                </a>
            </li>
            <li>
                <a href="/panduanukuran"
                    class="flex items-center p-2 text-slate-800 rounded-lg group font-manrope text-base active:bg-mainColor active:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                    </svg>
                    <span class="ms-3">Help</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{{-- Sidebar end --}}
