@extends('client.page.index')
@section('content')
    @auth
        @include('components.navbar')
    @endauth
    @guest
        @include('components.navbar-guest')
    @endguest
    @include('components.sidebar')
    @if ($existingTransaction->status == 'pending')
        <main class="max-w-screen-xl mx-auto mt-24 px-4">
            <nav class="flex mb-7 w-full mx-auto" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('homepage') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-600">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
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
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Pembayaran</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="lg:flex lg:w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-5">
                <div class="sm:grid sm:grid-cols-5 sm:gap-5 border-2 shadow-sm rounded-lg py-4 px-2 lg:flex-auto lg:w-2/3">
                    <div class="max-w-lg mx-auto mb-3 md:mb-0 col-span-2">
                        <img src="{{ url('storage/' . $order->product->image) }}" alt="{{ $order->product->name }}" />
                    </div>
                    <div class="max-w-lg mx-auto col-span-3">
                        <h3 class="text-2xl font-bold text-slate-700">{{ $order->product->name }}</h3>
                        <p class="text-sm mb-2">{{ $order->product->description }}</p>
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
                        <h3 class="text-base text-center font-bold text-slate-700">Detail Transaksi</h3>
                        <h3 class="text-base font-bold text-slate-700 mt-2">Status : <span>{{ $order->status }}</span></h3>
                        <h3 class="text-base font-bold text-slate-700 mt-2">Jumlah : <span>{{ $order->quantity }}</span>
                        </h3>
                        <div class="mb-7">
                            <h3 class="text-base font-bold text-slate-700 mt-2">SubTotal : <span class="text-red-600">Rp
                                    {{ number_format($order->subtotal) }}</span></h3>
                        </div>

                        <!-- Payment Button -->
                        <div class="w-full flex items-center space-x-2">
                            <button id="pay-button" type="button"
                                class="text-slate-100 bg-mainColor hover:bg-green-800 bg-primary focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 flex justify-center items-center flex-auto w-4/5">
                                Bayar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}"></script>
        <script type="text/javascript">
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                window.snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result) {
                        Swal.fire({
                            title: "Pembayaran Berhasil!",
                            text: "Status pembayaran Anda berhasil",
                            icon: "success",
                            confirmButtonText: "OK",
                            confirmButtonColor: "#12524B",
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('homepage') }}";
                            }
                        });
                    },
                    onPending: function(result) {
                        alert("Menunggu pembayaran!");
                        console.log(result);
                    },
                    onError: function(result) {
                        alert("Pembayaran gagal!");
                        console.log(result);
                    },
                    onClose: function() {
                        alert('Anda menutup pop-up tanpa menyelesaikan pembayaran');
                    }
                });
            });
            fetch("{{ route('midtrans.createTransaction') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: lastQuantity,
                        amount: {{ $order->product->price }},
                        name: "{{ Auth::user()->name }}",
                        email: "{{ Auth::user()->email }}",
                        phone: "{{ Auth::user()->phone }}"
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.snap_token) {
                        snapTokenInput.value = data.snap_token;
                        payButton.disabled = false;
                    } else {
                        alert('Error: Unable to generate payment token');
                        payButton.disabled = true;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to generate Snap token');
                    payButton.disabled = true;
                });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @elseif ($existingTransaction->status == 'success')
        <div class="flex flex-col justify-center items-center h-screen">
            <img class="w-1/4" src="{{ asset('assets/icon/no-transaction.png') }}" alt="No Transaction Icon">
            <h1 class="text-2xl font-bold text-black">Oooops... Tidak Ada Transaksi</h1>
        </div>
    @endif
@endsection
