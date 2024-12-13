@extends('index')
@section('content')
@auth
  @include('layouts.navigasi.navbar')
@endauth
@guest
  @include('layouts.navigasi.navbarguest')
@endguest
@include('layouts.navigasi.sidebar')
@section('title', 'Tentang Kami')
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
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-gray-600 md:ms-2 dark:text-gray-200 dark:hover:text-white">Information</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Tentang Kami</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="mt-10 mb-10 w-full max-w-screen-xl mx-auto">
    <!-- Tabs -->
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 mt-5 px-7 md:px-10">
      <li class="me-2">
        <a href="/tentangkami" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active dark:bg-mainColor dark:text-white">Tentang Kami</a>
      </li>
      <li class="me-2">
        <a href="/aturanpenggunaan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Aturan Pengguna</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanprivasi" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Kebijakan Privasi</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanhakcipta" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Kebijakan Hak Cipta</a>
      </li>
      <li class="me-2">
        <a href="/syaratketentuan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Syarat & Ketentuan Berlaku</a>
      </li>
      <li class="me-2">
        <a href="/aturan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Aturan</a>
      </li>
    </ul>

    <!-- Content -->
    <div class="px-10 md:px-14 py-5 mb-5">
      <h3 class="text-3xl font-semibold text-slate-700 mb-5 dark:text-gray-200 mt-5">Tentang Roadwave</h3>
      <p class="mb-3 text-gray-500 dark:text-gray-400 px-1 text-justify">
        Roadwave Apparel, sebagai merek pakaian, menggabungkan gaya unik dengan inspirasi otomotif. Sebagai pelopor gaya hidup otomotif, kami berkomitmen memberikan pengalaman berbelanja yang menginspirasi dan memperkuat komunitas pecinta
        kendaraan bermotor. Misi kami mencakup inovasi desain, menyajikan produk berkualitas tinggi, dan memberikan dukungan aktif kepada komunitas otomotif melalui kolaborasi, acara, dan konten yang memotivasi. Dengan filosofi desain
        yang menciptakan keseimbangan harmonis antara estetika modern dan elemen klasik otomotif, setiap produk kami adalah ungkapan semangat kebebasan dan petualangan di jalan.
      </p>
      <p class="text-gray-500 dark:text-gray-400 px-1 text-justify">
        Roadwave Apparel bukan sekadar merek pakaian; kami adalah komunitas tempat individu dapat mengekspresikan cinta mereka terhadap dunia otomotif melalui gaya pribadi. Koleksi produk kami, termasuk kaos, jaket, topi, dan aksesori,
        menawarkan desain menarik yang memenuhi kebutuhan para pecinta otomotif. Dengan fokus pada keberlanjutan, kami juga berkomitmen untuk menjalankan praktik bisnis yang ramah lingkungan. Roadwave Apparel, lebih dari sekadar pakaian,
        merupakan destinasi utama bagi mereka yang mencari gaya hidup otomotif yang autentik dan penuh semangat.
      </p>
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