@extends('index')
@section('content')
@auth
  @include('components.navbar')
@endauth
@guest
  @include('components.navbar-guest')
@endguest
@include('components.sidebar')
@section('title', 'Aturan')
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
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-gray-600 md:ms-2">Information</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Aturan</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="mt-10 mb-10">
    <!-- Tabs -->
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 mt-5 px-7 md:px-10">
      <li class="me-2">
        <a href="/tentangkami" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Tentang Kami</a>
      </li>
      <li class="me-2">
        <a href="/aturanpengguna" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Aturan Pengguna</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanprivasi" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Kebijakan Privasi</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanhakcipta" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Kebijakan Hak Cipta</a>
      </li>
      <li class="me-2">
        <a href="/syaratketentuan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Syarat & Ketentuan Berlaku</a>
      </li>
      <li class="me-2">
        <a href="/aturan" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active">Aturan</a>
      </li>
    </ul>

    <!-- Content -->
    <div class="px-10 md:px-14 py-5 mb-5">
      <h3 class="text-3xl font-semibold text-slate-700 mb-5 mt-5">Policy</h3>
      <p class="mb-3 text-gray-500 px-1 text-justify">
        Kami mengizinkan Anda untuk memberikan komentar dan masukan di situs kami, mengenai produk dan pelayanan. Bagaimanapun, kami tidak akan menerima informasi rahasia atau hak kepemilikan. Oleh karena itu, semua komentar, masukan,
        kartu pos, saran, ide, dan ungkapan pengajuan, yang diserahkan atau dilampirkan kepada Roadwave Apparel melalui situs ini, atau sebaliknya (secara kolektif, masukan), akan dianggap non-rahasia dan menjadi serta tetap properti
        milik Roadwave Apparel.
      </p>
      <p class="mb-3 text-gray-500 px-1 text-justify">Anda setuju bahwa tidak ada masukan yang :</p>
      <ul class="ps-10 space-y-1 list-decimal list-outside text-base text-gray-500 font-normal">
        <li>Melanggar hak setiap pihak ketiga, termasuk hak cipta, merek dagang, privasi atau hak kepemilikan pribadi, atau</li>
        <li>
          Memfitnah atau melanggar hukum, kasar atau cabul. Anda bertanggungjawab atas isi dari setiap masukan yang Anda berikan dan setuju untuk menjamin dan memberikan kami beserta afiliasi kami keamanan dan kekebalan hukum dari dan
          terhadap klaim apapun yang terjadi dari masukan tersebut.
        </li>
      </ul>
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
