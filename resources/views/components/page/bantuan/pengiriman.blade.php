@extends('index')
@section('content')
@auth
  @include('layouts.navigasi.navbar')
@endauth
@guest
  @include('layouts.navigasi.navbarguest')
@endguest
@include('layouts.navigasi.sidebar')
@section('title', 'Pengiriman')
  <!-- BreadCrumb -->
  <nav class="flex mt-24 ps-7 mb-7 max-w-screen-xl mx-auto" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-600 dark:text-gray-200 dark:hover:text-white">
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
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-gray-600 md:ms-2 dark:text-gray-200 dark:hover:text-white">Help</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Pengiriman</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="mt-10 mb-10">
    <!-- Tabs -->
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 mt-5 px-7 md:px-10">
      <li class="me-2">
        <a href="/panduanukuran" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Panduan Ukuran</a>
      </li>
      <li class="me-2">
        <a href="/pertanyaanumum" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Pertanyaan Umum</a>
      </li>
      <li class="me-2">
        <a href="/ketentuan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Ketentuan & Cek</a>
      </li>
      <li class="me-2">
        <a href="/pengiriman" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active dark:bg-mainColor dark:text-white">Pengiriman</a>
      </li>
      <li class="me-2">
        <a href="/retur" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Return & Pengembalian Dana</a>
      </li>
    </ul>

    <!-- Content -->
    <div class="px-10 md:px-14 py-5">
      <h3 class="text-3xl font-semibold text-slate-700 mb-5 dark:text-gray-200 mt-5">Pengiriman</h3>
      <div class="mx-auto flex justify-center items-center">
        <img src="{{ url('assets\icon\underconstruction.png') }}" width="w-full" alt="" />
      </div>
    </div>
</div>
@auth
  @include('layouts.footer.footer')
@endauth
@guest
  @include('layouts.footer.footerguest')
@endguest
@include('layouts.navigasi.bottombar')
@endsection
