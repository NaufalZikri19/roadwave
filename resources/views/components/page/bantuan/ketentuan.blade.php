@extends('index')
@section('title', 'Ketentuan & Cek')
@section('content')
@auth
  @include('components.navbar')
@endauth
@guest
  @include('components.navbar-guest')
@endguest
@include('components.sidebar')

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
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Ketentuan & Cek</span>
          </div>
        </li>
      </ol>
    </nav>

    <div class="mt-10 mb-10">
      <!-- Tabs -->
      <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200  mt-5 px-7 md:px-10">
        <li class="me-2">
          <a href="/panduanukuran" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Panduan Ukuran</a>
        </li>
        <li class="me-2">
          <a href="/pertanyaanumum" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Pertanyaan Umum</a>
        </li>
        <li class="me-2">
          <a href="/ketentuan" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active">Ketentuan & Cek</a>
        </li>
        <li class="me-2">
          <a href="/pengiriman" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Pengiriman</a>
        </li>
        <li class="me-2">
          <a href="/retur" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Return & Pengembalian Dana</a>
        </li>
      </ul>

      <!-- Content -->
      <div class="px-10 md:px-14 py-5 mb-5">
        <h3 class="text-3xl font-semibold text-slate-700 mb-10  mt-5">Ketentuan dan Cek Status Pengiriman</h3>
        <h4 class="text-xl font-semibold text-slate-700 mb-2 ">Cek Status Pengiriman</h4>
        <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal">
          <li>Roadwave akan mengirimkan informasi pengiriman melalui email beserta no.resi untuk dapat mengecek status.</li>
          <li>Nomer resi dapat digunakan untuk melacak keberadaan barang dapat di cek Klik DISINI</li>
          <li>Customer dapat melacak posisi barang dengan cara :</li>
          <ul class="ps-10 space-y-1 list-decimal list-outside text-base text-gray-500 font-normal">
            <li>Masuk ke "Akun Saya".</li>
            <li>Pilih Menu "Lacak Pengiriman".</li>
          </ul>
        </ul>
        <h4 class="text-xl font-semibold text-slate-700 mt-4 mb-2 ">Cek Status Pengiriman</h4>
        <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal mb-4">
          <li>Pelanggan dapat mengganti alamat pengiriman dengan menghubungi Customer Service kami sebelum 12 jam dari pembayaran atau konfirmasi pembayaran kami terima.</li>
        </ul>
        <h4 class="text-xl font-semibold text-slate-700 mb-2 ">Jasa Pengiriman JNE</h4>
        <p class="font-normal text-gray-500 text-justify mb-3">
          Roadwave telah bekerja sama dengan jasa pengiriman JNE untuk menyediakan layanan pengiriman barang. Dengan jasa pengiriman JNE, pelanggan dapat melacak status pada akun pelanggan Roadwave . Saat ini terdapat 2 jenis layanan
          pengiriman barang JNE di Roadwave, yaitu:
        </p>
        <ul class="ps-10 space-y-1 list-decimal list-outside text-base text-slate-700  mb-4 font-semibold">
          <li>JNE REG (Reguler)</li>
          <p class="font-normal text-gray-500 text-justify mb-3">
            Layanan pengiriman standar yang menjangkau ke seluruh wilayah Indonesia, dengan perkiraan waktu penyampaian kiriman 1-7 hari kerja, tergantung pada daerah yang menjadi tujuan pengiriman.
          </p>
          <li>JNE YES (Yakin Esok Sampai)</li>
          <p class="font-normal text-gray-500 text-justify mb-3">Layanan pengiriman premium dengan target kiriman sampai di tujuan pada keesokan harinya termasuk pada hari Minggu dan libur nasional.</p>
        </ul>
        <p class="font-normal text-gray-500 text-justify mb-3">Saat ini tersedia 2 jenis layanan pengiriman JNE, yaitu:</p>
        <ul class="ps-10 space-y-1 list-decimal list-outside text-base text-slate-700  mb-4 font-semibold">
          <li>JNE REG (Reguler)</li>
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal">
            <li>Tidak melayani pengiriman di hari Minggu dan hari Libur Nasional.</li>
            <li>Tidak berlaku garansi uang kembali (money back guarantee).</li>
            <li>Estimasi waktu penyampaian kiriman untuk tujuan yang berada langsung di kota cabang/agen utama adalah 1-3 hari kerja.</li>
            <li>Sedangkan untuk tujuan kota diluar kota cabang/agen utama, estimasi waktu penyampaian kiriman paling lama 7 hari.</li>
          </ul>
          <li>JNE YES (Yakin Esok Sampai)</li>
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal">
            <li>Estimasi waktu penyampaian kiriman adalah 1 hari.</li>
            <li>Berlaku waktu batas maksimum (cut off time) pengiriman.</li>
            <li>Penyampaian ke penerima paling lambat jam 23.59 waktu setempat.</li>
            <li>Berlaku untuk kota-kota yang telah ditentukan.</li>
            <li>Garansi uang kembali (money back guarantee) apabila keterlambatan penyampaian disebabkan oleh pihak JNE.</li>
          </ul>
        </ul>
        <p class="font-semibold text-slate-700  text-justify mb-3">CUSTOMER CARE (021) 2927-8888, EMAIL: CUSTOMERCARE@JNE.CO.ID</p>
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
