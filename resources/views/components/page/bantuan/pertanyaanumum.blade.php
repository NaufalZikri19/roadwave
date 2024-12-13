@extends('index')
@section('content')
@auth
  @include('layouts.navigasi.navbar')
@endauth
@guest
  @include('layouts.navigasi.navbarguest')
@endguest
@include('layouts.navigasi.sidebar')
@section('title', 'Pertanyaan Umum')
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
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Pertanyaan Umum</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="mt-10 mb-10 w-full max-w-screen-xl mx-auto">
    <!-- Tabs -->
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 mt-5 px-7 md:px-10">
      <li class="me-2">
        <a href="/panduanukuran" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Panduan Ukuran</a>
      </li>
      <li class="me-2">
        <a href="/pertanyaanumum" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active dark:bg-mainColor dark:text-white">Pertanyaan Umum</a>
      </li>
      <li class="me-2">
        <a href="/ketentuan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Ketentuan & Cek</a>
      </li>
      <li class="me-2">
        <a href="/pengiriman" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Pengiriman</a>
      </li>
      <li class="me-2">
        <a href="/retur" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Return & Pengembalian Dana</a>
      </li>
    </ul>

    <!-- Content -->
    <div class="px-10 md:px-14 py-5 mb-5">
      <h3 class="text-3xl font-semibold text-slate-700 mb-10 dark:text-gray-200 mt-5">Pertanyaan Umum</h3>
      <h4 class="text-xl font-semibold text-slate-700 mb-2 dark:text-gray-200">Pendaftaran</h4>
      <ol class="list-decimal list-inside mb-7">
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana cara untuk mendaftar akun Roadwave dan log in ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu bisa mendaftar akun Roadwave Log in</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Apakah saya bisa melakukan pemesanan tanpa harus daftar terlabih dahulu?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu tetap bisa melakukan pemesanan tanpa harus mendaftar akun, pastikan kamu mengisi kolom alamat pengiriman dengan lengkap dan benar.</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Apakah saya bisa melakukan pemesanan tanpa harus daftar terlabih dahulu?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu tetap bisa melakukan pemesanan tanpa harus mendaftar akun, pastikan kamu mengisi kolom alamat pengiriman dengan lengkap dan benar.</p>
        </li>
      </ol>
      <h4 class="text-xl font-semibold text-slate-700 mb-2 dark:text-gray-200">Pemesanan</h4>
      <ol class="list-decimal list-inside mb-7">
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana cara melakukan pemesanan melalui website ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu bisa mendaftar akun Roadwave Log in</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Kamu bisa menggunakan metode pembayaran :
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal dark:text-gray-400">
            <li>BANK TRANSFER</li>
            <li>INDOMARET</li>
            <li>KARTU KREDIT</li>
          </ul>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana cara melakukan konfirmasi pembayaran ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Klik link ini untuk melakukan Konfirmasi Pembayaran</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana cara melakukan pemesanan melalui web chat ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Untuk melakukan pemesanan melalui web, kamu bisa cek di sini disini</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana cara mendapatkan size chart produk ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu bisa lihat Size Chart</p>
        </li>
      </ol>
      <h4 class="text-xl font-semibold text-slate-700 mb-2 dark:text-gray-200">Pengiriman</h4>
      <ol class="list-decimal list-inside mb-7">
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Ekspedisi apa yang digunakan untuk pengiriman ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Pengiriman menggunakan jasa ekpedisi JNE.</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Berapa ongkos kirim pengiriman ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Ongkos pengiriman berbeda-beda setiap kota tujuan. Kamu bisa tanyakan pada admin web chat dan kamu bisa cek di website jne.co.id.</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Berapa lama estimasi waktu dari proses pengiriman hingga tiba ke tujuan ?
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal dark:text-gray-400">
            <li>Customer Service kami beroperasi setiap hari Senin-Jumat, (tidak termasuk hari libur dan tanggal merah) pukul 08.00-17.00.</li>
            <li>Orderan kamu akan diproses segera dalam waktu 1-2 hari (hari kerja) setelah pesanan kamu diterima.</li>
            <li>Order yang masuk pada hari Sabtu, Minggu, dan hari libur akan diproses di hari kerja.</li>
            <li>Waktu pengiriman juga akan muncul setelah anda memasukkan alamat tujuan.</li>
            <li>Kamu dapat menggunakan layanan menggunakan JNE.</li>
            <li>Jika kamu ingin menerima orderan lebih cepat, kami menyarankan agar kamu melakukan pembayaran sebelum pukul 14.00, maka kamu akan mendapatkan pelayanan pengiriman di hari yang sama.</li>
            <li>Jika kamu tidak menerima pengiriman dalam waktu lima hari kerja, silakan hubungi Customer Service kami di Telp/HP (WhatsApp) 082117748606 dan email di roadwaveapparel.com</li>
          </ul>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Di mana bisa mendapatkan nomor ID ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu bisa mendapatkan nomor ID pesanan setelah selesai CHECKOUT melalui SMS dan email. Pastikan nomor handphone dan email kamu selalu aktif.</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana cara mendapatkan nomor resi ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Jika pesanan kamu telah kami kirim, kami akan mengirimkan nomor resi melalui email.</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana cara melacak pesanan ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu bisa melacak pesanan kamu melalui website JNE 1x24 jam setelah kami barang dikirim.</p>
        </li>
      </ol>
      <h4 class="text-xl font-semibold text-slate-700 mb-2 dark:text-gray-200">Pertanyaan Lain</h4>
      <ol class="list-decimal list-inside mb-7">
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Jika saya sudah berbelanja, tetapi sudah melewati maximal payment, apakah saya bisa tetap melakukan pembayaran ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Jika sudah melewati maximal payment 1 x 24 jam, maka kamu diharuskan untuk melakukan pemesanan ulang.</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana saya bisa mengecek invoice ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kami akan mengirimkan invoice melalui email.</p>
        </li>
        <li class="text-slate-700 dark:text-gray-200 px-1 text-justify mb-3 font-semibold">
          Bagaimana caranya membatalkan pesanan ?
          <p class="font-normal text-gray-500 dark:text-gray-400 text-justify mb-3">Kamu bisa menghubungi Customer Service kami melalui web chat atau Whatsapp ke 082117748606.</p>
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
