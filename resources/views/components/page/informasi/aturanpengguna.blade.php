@extends('index')
@section('content')
@auth
  @include('layouts.navigasi.navbar')
@endauth
@guest
  @include('layouts.navigasi.navbarguest')
@endguest
@include('layouts.navigasi.sidebar')
@section('title', 'Aturan Pengguna')
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
          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-gray-600 md:ms-2 dark:text-gray-200 dark:hover:text-white">Information</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Aturan Pengguna</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="mt-10 mb-10">
    <!-- Tabs -->
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 mt-5 px-7 md:px-10">
      <li class="me-2">
        <a href="/tentangkami" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Tentang Kami</a>
      </li>
      <li class="me-2">
        <a href="/aturanpenggunaan" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active dark:bg-mainColor dark:text-white">Aturan Pengguna</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanprivasi" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Kebijakan Privasi</a>
      </li>
      <li class="me-2">
        <a href="/kebjakanhakcipta" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Kebijakan Hak Cipta</a>
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
      <h3 class="text-3xl font-semibold text-slate-700 mb-10 dark:text-gray-200 mt-5">Aturan Pengguna</h3>
      <h4 class="text-xl font-semibold text-slate-700 mb-2 dark:text-gray-200">Pendahuluan</h4>
      <p class="mb-3 text-gray-500 dark:text-gray-400 px-1 text-justify">
        CV ROADWAVE APPAREL (selanjutnya disebut "Roadwave Apparel") adalah suatu perusahaan yang beroperasi dalam bentuk persekutuan komanditer (CV) dan memiliki fokus usaha di sektor fashion. Roadwave Apparel menyediakan layanan portal
        web dengan kegiatan utama berupa perdagangan elektronik (e-commerce), di mana Pengguna dapat melakukan transaksi pembelian produk fashion dan menikmati berbagai fitur serta layanan yang disediakan. Seluruh individu di wilayah
        Negara Kesatuan Republik Indonesia berhak mengakses Platform Roadwave Apparel untuk berbelanja, memanfaatkan fitur/layanan, atau sekadar menjelajahi dan mengunjungi situs ini. Roadwave Apparel berkomitmen untuk menyediakan
        pengalaman berbelanja yang aman dan nyaman bagi semua Pengguna.
      </p>
      <p class="mb-7 text-gray-500 dark:text-gray-400 px-1 text-justify">
        ATURAN PENGGUNAAN INI MERUPAKAN KESANGGUPAN YANG SAH ANTARA PENGGUNA DENGAN ROADWAVE APPAREL. PENGGUNA MENYATAKAN SETUJU DAN SIAP UNTUK MEMATUHI KETENTUAN INI SELAMA MENGGUNAKAN LAYANAN DI PLATFORM ROADWAVE APPAREL.
      </p>
      <h4 class="text-xl font-semibold text-slate-700 mb-2 dark:text-gray-200">Data Pengguna</h4>
      <ol class="list-decimal list-inside">
        <li class="text-gray-500 dark:text-gray-400 px-1 text-justify mb-3">
          Pengguna dengan ini menyepakati dan menyetujui bahwa Roadwave Apparel berhak mengumpulkan, menggunakan, mengakses, menyimpan, dan/atau memproses data Pengguna, termasuk namun tidak terbatas pada informasi pribadi, isi
          percakapan, dan/atau informasi seputar penggunaan layanan oleh Pengguna di Platform Roadwave Apparel.
        </li>
        <li class="text-gray-500 dark:text-gray-400 px-1 text-justify mb-3">
          Selama mematuhi hukum yang berlaku, Roadwave Apparel (termasuk perusahaan afiliasi dan Mitra Resmi yang bermitra dengan Roadwave Apparel) berhak menggunakan seluruh atau sebagian data yang diperoleh dan dikumpulkan dari Pengguna
          melalui Platform Roadwave Apparel untuk pengembangan dan peningkatan mutu, demi keamanan dan kenyamanan Pengguna. Rincian lebih lanjut mengenai data pengguna dapat ditemukan di dalam Kebijakan Privasi Roadwave Apparel.
        </li>
        <li class="text-gray-500 dark:text-gray-400 px-1 text-justify mb-3">
          Roadwave Apparel memiliki hak untuk mengungkapkan data Pengguna dalam proses hukum dan/atau atas permintaan instansi pemerintah, penegak hukum, dan pihak berwenang resmi lainnya sesuai dengan peraturan perundang-undangan yang
          berlaku di Indonesia.
        </li>
      </ol>
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