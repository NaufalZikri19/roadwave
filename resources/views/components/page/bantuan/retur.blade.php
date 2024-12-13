@extends('index')
@section('content')
@auth
  @include('components.navbar')
@endauth
@guest
  @include('components.navbar-guest')
@endguest
@include('components.sidebar')
@section('title', 'Retur & Pengembalian Dana')
<!-- BreadCrumb -->
<nav class="flex mt-24 ps-7 mb-7 max-w-screen-xl mx-auto" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-600">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
            />
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-gray-600 md:ms-2">Help</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Return & Pengembalian Dana</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="mt-10 mb-10">
    <!-- Tabs -->
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 mt-5 px-7 md:px-10">
        <li class="me-2">
          <a href="/panduanukuran" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Panduan Ukuran</a>
        </li>
        <li class="me-2">
          <a href="/pertanyaanumum" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Pertanyaan Umum</a>
        </li>
        <li class="me-2">
          <a href="/ketentuan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Ketentuan & Cek</a>
        </li>
        <li class="me-2">
          <a href="/pengiriman" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Pengiriman</a>
        </li>
        <li class="me-2">
          <a href="/retur" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active">Return & Pengembalian Dana</a>
        </li>
    </ul>

    <!-- Content -->
    <div class="px-10 md:px-14 py-5 mb-5">
      <h3 class="text-3xl font-semibold text-slate-700 mb-10 mt-5">Ketentuan Pengembalian</h3>
      <h4 class="text-xl font-semibold text-slate-700 mb-2">Syarat dan Ketentuan Pengembalian</h4>
      <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal">
        <li>Retur berlaku untuk ketidak sesuaian barang yang kami kirim, karena kesalahan ukuran, kesalahan model atau warna, dan reject atau cacat produksi (barang rusak, berlubang, dan robek).</li>
        <li>Retur dapat dilakukan selama produk masih dalam keadaan semula/tidak kotor/tag terpasang dan selama stock masih tersedia.</li>
        <li>Penukaran produk dikirim kembali ke alamat kami maksimal 3x24 jam setelah paket diterima oleh customer dengan menginformasikan kepada kami terlebih dahulu.</li>
        <li>Hal yang perlu diinformasikan kepada Customer Service kami:</li>
        <ul class="ps-10 space-y-1 list-decimal list-outside text-base text-gray-500 font-normal">
          <li>Nomor order.</li>
          <li>Penjelasan detail mengenai produk yang rusak/cacat.</li>
          <li>No. SKU yang terdapat pada tag produk.</li>
        </ul>
        <li>Jika produk yang ingin ditukar tidak tersedia, dimungkinkan untuk mengganti dengan produk lain atau refund.</li>
        <li>Proses refund dilakukan minimal 7 hari kerja dan bukti transfer akan diinformasikan oleh Customer Service kami.</li>
        <li>Biaya pengiriminan yang dilakukan untuk penggantian produk ditanggung oleh kami senilai JNE Reguler.</li>
        <li>Kehilangan dan kerusakan yang disebabkan oleh kurir pengiriman (JNE), diluar tanggung jawab kami.</li>
      </ul>
      <h4 class="text-xl font-semibold text-slate-700 mt-4 mb-2">Lama Pengembalian Barang Refund</h4>
      <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal">
        <li>
          Pengembalian barang dari alamat Anda akan memakan waktu 1-3 hari kerja (untuk Jakarta) atau 2-6 hari kerja (untuk luar Jakarta) sampai di gudang Roadwave. Lamanya waktu juga dipengaruhi oleh jasa pengiriman yang Anda pilih.
        </li>
        <li>Refund Anda akan selesai kami proses min 7 hari kerja semenjak barang retur diterima di warehouse kami.</li>
      </ul>
      <div class="mx-auto w-full flex justify-center items-center my-7">
        <button
          type="button"
          class="text-white bg-mainColor hover:bg-mainColorOld focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none"
        >
          ISI FORMULIR DISINI
        </button>
      </div>
    </div>
  </div>
  @auth
  @include('components.footer')
@endauth
@guest
  @include('components.footer-guest')
@endguest
@include('components.bottombar')
@endsection
