@extends('client.page.index')
@section('content')
    @auth
        @include('components.navbar')
    @endauth
    @guest
        @include('components.navbar-guest')
    @endguest
    @include('components.sidebar')
    <main class="max-w-screen-xl mx-auto mt-24 px-4">
        <!-- Breadcrumbs and Product Details -->
        <nav class="flex mb-7 w-full mx-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('homepage') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-600">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li></li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">{{ $products->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="lg:flex lg:w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-5">
            <div class="sm:grid sm:grid-cols-5 sm:gap-5 border-2 shadow-sm rounded-lg py-4 px-2 lg:flex-auto lg:w-2/3">
                <!-- Product Image and Details -->
                <div class="max-w-lg mx-auto mb-3 md:mb-0 col-span-2">
                    <img src="{{ url('storage/' . $products->image) }}" alt="{{ $products->name }}" />
                </div>
                <div class="max-w-lg mx-auto col-span-3">
                    <h3 class="text-2xl font-bold text-slate-700">{{ $products->name }}</h3>
                    <h3 class="text-base font-bold text-slate-700 mt-3">Stok: <span id="stock-available">{{ $products->stock }}</span></h3>
                    <h3 class="text-base font-bold text-slate-700 mt-3">Deskripsi</h3>
                    <p class="text-sm mb-2">{{ $products->description }}</p>
                    <div class="mb-2">
                        <p class="text-base font-bold text-slate-700">Ukuran:</p>
                        <p class="text-sm">S : Lebar Dada 51,5 cm, Panjang Badan 70,5 cm, Panjang Tangan
                            21 cm</p>
                        <p class="text-sm">M : Lebar Dada 53,5 cm, Panjang Badan 72,5 cm, Panjang Tangan
                            22 cm</p>
                        <p class="text-sm">L : Lebar Dada 55,5 cm, Panjang Badan 74,5 cm, Panjang Tangan
                            23 cm</p>
                        <p class="text-sm">XL : Lebar Dada 57,5 cm, Panjang Badan 76,5 cm, Panjang
                            Tangan 24 cm</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-base font-bold text-slate-700">Catatan</p>
                        <p class="text-sm">Toleransi Ukuran (-+) 1-3 cm Warna mungkin dapat berbeda
                            akibat cahaya saat pengambilan gambar maupun kondisi gadget saat melihat gambar ini</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-sm">#fashion #kaospria #kaospriakatun</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg w-full lg:flex-auto lg:w-1/3">
                <div class="shadow-sm border-2 rounded-lg py-4 px-4 w-full">
                    <h3 class="text-base text-center font-bold text-slate-700">Silahkan Pilih Varian</h3>
                    <form action="{{ route('order.store') }}" method="POST" id="payment-form">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                        <h3 class="text-base font-bold text-slate-700 mt-2">Jumlah</h3>
                        <!-- Quantity Selector -->
                        <div class="relative flex items-center product-container" data-product-id="{{ $products->id }}">
                            <button type="button" id="decrement-button-{{ $products->id }}"
                                class="button-decrement">-</button>
                            <input type="text" id="counter-input-{{ $products->id }}" name="quantity"
                                class="flex-shrink-0 text-gray-900 border-0 bg-transparent text-lg font-normal focus:outline-none focus:ring-0 max-w-[3.5rem] text-center"
                                placeholder="0" value="1" required readonly />
                            <button type="button" id="increment-button-{{ $products->id }}"
                                class="button-increment">+</button>
                        </div>
                        <div class="mb-7 mt-5">
                            <h3 class="text-base font-bold text-slate-700">Warna</h3>
                            @if ($products->color == 'Hitam')
                                <span class="flex w-5 h-5 me-3 bg-black border border-gray-700 rounded-full"></span>
                            @elseif($products->color == 'Putih')
                                <span class="flex w-5 h-5 me-3 bg-white border border-gray-700 rounded-full"></span>
                            @elseif($products->color == 'Hijau')
                                <span class="flex w-5 h-5 me-3 bg-green-500 border border-gray-700 rounded-full"></span>
                            @elseif($products->color == 'Maroon')
                                <span class="flex w-5 h-5 me-3 bg-red-700 border border-gray-700 rounded-full"></span>
                            @elseif($products->color == 'Navy')
                                <span class="flex w-5 h-5 me-3 bg-blue-700 border border-gray-700 rounded-full"></span>
                            @elseif($products->color == 'Abu')
                                <span class="flex w-5 h-5 me-3 bg-slate-500 border border-gray-700 rounded-full"></span>
                            @endif
                        </div>
                        <!-- SubTotal Display -->
                        <div class="mb-7 mt-5">
                            <h3 class="text-base font-bold text-slate-700 mt-2">SubTotal</h3>
                            <div class="flex justify-between mb-7">
                                <p class="text-red-600 mr-1 text-2xl" id="price-display">
                                    Rp{{ number_format($products->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>

                        <!-- Payment Button -->
                        <div class="w-full flex items-center space-x-2">
                            @if ($products->stock > 0)
                                <button id="pay-button" type="submit"
                                    class="text-slate-100 bg-mainColor hover:bg-green-800 bg-primary focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 flex justify-center items-center flex-auto w-4/5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 mr-2 group-hover:text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    Beli Sekarang
                                </button>
                            @else
                                <button id="pay-button" type="button" disabled
                                    class="text-slate-100 bg-slate-400 bg-primary focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 flex justify-center items-center flex-auto w-4/5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 mr-2 group-hover:text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    Beli Sekarang
                                </button>
                            @endif
                        </div>

                        <!-- Hidden Snap Token Field -->
                        <input type="hidden" name="snap_token" id="snap_token">
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('components.footer-guest')
    @include('components.bottombar')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productId = {{ $products->id }};
            const decrementButton = document.getElementById(`decrement-button-${productId}`);
            const incrementButton = document.getElementById(`increment-button-${productId}`);
            const counterInput = document.getElementById(`counter-input-${productId}`);
            const maxStock = {{ $products->stock }};
            const payButton = document.getElementById('pay-button');
            const snapTokenInput = document.getElementById('snap_token');

            let lastQuantity = 1;

            incrementButton.addEventListener('click', function() {
                let currentValue = parseInt(counterInput.value) || 1;
                if (currentValue < maxStock) {
                    currentValue += 1;
                    counterInput.value = currentValue;
                    lastQuantity = currentValue;
                }
            });

            decrementButton.addEventListener('click', function() {
                let currentValue = parseInt(counterInput.value) || 1;
                if (currentValue > 1) {
                    currentValue -= 1;
                    counterInput.value = currentValue;
                    lastQuantity = currentValue;
                }
            });
        });
    </script>
@endsection
