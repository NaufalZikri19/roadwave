@extends('index')
@section('content')
@auth
  @include('layouts.navigasi.navbar')
@endauth
@guest
  @include('layouts.navigasi.navbarguest')
@endguest
@include('layouts.navigasi.sidebar')
@section('title', 'Kebijakan Privasi')
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
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Kebijakan Privasi</span>
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
        <a href="/aturanpenggunaan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Aturan Pengguna</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanprivasi" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active dark:bg-mainColor dark:text-white">Kebijakan Privasi</a>
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
      <h3 class="text-3xl font-semibold text-slate-700 mb-10 dark:text-gray-200 mt-5">Kebijakan Privasi</h3>
      <ol class="space-y-10 text-gray-700 list-decimal list-inside dark:text-gray-200 text-xl font-semibold mb-2">
        <li>
          Pendahuluan
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Selamat datang di roadwaveapparel.com yang dioperasikan oleh Roadwave Apparel. Roadwave Apparel bertanggung jawab dalam menjaga privasi data pribadi Anda dan patuh pada hukum yang berlaku. Kami berkomitmen untuk mengelola,
            melindungi, dan memproses Data Pribadi Anda sesuai dengan Kebijakan ini yang akan berlaku untuk seluruh data pribadi yang kami peroleh dari Anda melalui platform kami.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Silakan tinjau kembali dokumen ini karena dokumen ini mengatur penggunaan situs ini. Penggunaan situs kami merupakan persetujuan Anda untuk mengikuti persyaratan penggunaan. Kami juga dapat mengumpulkan dan memproses data
            pribadi Anda sebagaimana dikecualikan dalam Hukum yang Berlaku yang tidak dijabarkan dalam Kebijakan ini
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">Untuk tujuan pemahaman Kebijakan Perlindungan Data Pribadi roadwaveapparel.com, kebijakan ini memiliki arti sebagai berikut :</p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            <span class="font-bold text-gray-700 dark:text-gray-200">“Hukum yang Berlaku”</span> berarti seluruh peraturan dan perundang-undangan yang terkait dengan perlindungan dan/atau pengelolaan data pribadi yang berlaku di
            Indonesia, termasuk namun tidak terbatas pada Undang-Undang No. 11 Tahun 2018 Tentang Informasi dan Transaksi Elektronik (beserta perubahannya), Peraturan Pemerintah No. 82 Tahun 2012 Tentang Penyelenggaraan Sistem dan
            Transaksi Elektronik dan Peraturan Menteri Komunikasi Dan Informatika Nomor 20 Tahun 2016 Tentang Perlindungan Data Pribadi dalam Sistem Elektronik;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            <span class="font-bold text-gray-700 dark:text-gray-200">“Data Pribadi”</span> berarti data apapun mengenai (a) seorang individu yang dapat diidentifikasi (i) dari data tersebut; atau (ii) dari data dan informasi lain yang
            kami miliki atau yang dapat kami akses dan termasuk data dalam database kami yang dapat diperbaharui dari waktu ke waktu, atau (b) didefinisikan sebagai “data pribadi” atau “informasi pribadi” dalam Hukum yang Berlaku;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            <span class="font-bold text-gray-700 dark:text-gray-200">“Media Sosial”</span> berarti halaman dan akun Roadwave Apparel dalam platform media sosial milik pihak ketiga seperti Instagram, Shopee, dan Tiktok.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            <span class="font-bold text-gray-700 dark:text-gray-200">“Website”</span> berarti website 3Second yang dapat diakses melalui alamat www.roadwaveapparel.com;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Kami dapat memperbaharui Kebijakan ini untuk memastikan bahwa Kebijakan senantiasa konsisten dengan trend industri dan/atau segala perubahan dalam persyaratan hukum dan peraturan. Anda setuju untuk mengikatkan diri dalam
            persyaratan dan ketentuan yang berlaku dalam Kebijakan ini yang mana dapat diperbaharui dari waktu ke waktu. Kami akan berusaha untuk menginformasikan kepada Anda baik melalui email atau melalui pemberitahuan dalam Website
            apabila ada perubahan material pada Kebijakan.
          </p>
        </li>
        <li>
          Bagaimana Kami Mengumpulkan Data Pribadi Anda
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">Kami akan/mungkin mengumpulkan data pribadi Anda saat :</p>
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal dark:text-gray-400">
            <li>Anda membuat akun pada Website;</li>
            <li>Anda memilah atau melakukan browsingatas produk-produk dan jasa kami atau melakukan aktivitas dalam Website kami;</li>
            <li>Anda menerima cookies dalam perangkat Anda;</li>
            <li>Anda berinteraksi dengan tim customer service atau perwakilan kami lainnya, misalnya, melalui webform, email, telpon, surat atau dalam pertemuan tatap muka;</li>
            <li>Anda berinteraksi dengan kami melalui Media Sosial, misalnya dengan memberi tanda likeatau mengomentari isi posting kami, atau dengan menyampaikan pesan pribadi kepada kami melalui Media Sosial kami;</li>
            <li>Anda berpartisipasi dalam promosi, undian, inisiatif atau permintaan Data Pribadi tambahan melalui survey konsumen;</li>
            <li>
              Perwakilan yang berwenang untuk mewakili Anda memberikan Data Pribadi milik Anda kepada kami sesuai dengan kewenangan yang sewajarnya Anda berikan, misalnya apabila perwakilan Anda tersebut membeli produk atau jasa kami
              untuk dikirimkan kepada Anda atau sebagai hadiah;
            </li>
            <li>Apabila Anda dengan suka rela menyerahkan Data Pribadi Anda kepada kami untuk alasan apapun.</li>
          </ul>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Kami tidak menyimpan detail kartu kredit Anda baik yang digunakan untuk memproses pembayaran Anda atau untuk tujuan layanan pelanggan. Detail kartu kredit Anda dikumpulkan, diproses dan disimpan langsing oleh pihak ketiga yang
            memproses pembayaran sesuai dengan persyaratan.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Pastikan agar seluruh data pribadi yang Anda sampaikan kepada kami lengkap, akurat dan benar. Kesalahan pada data pribadi yang Anda sampaikan dapat mengakibatkan kami tidak dapat memberikan kepada Anda produk dan jasa yang
            Anda inginkan.
          </p>
        </li>
        <li>
          Bagaimana Kami Menggunakan Informasi yang Anda Berikan Kepada Kami?
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Kami dapat menggunakan dan mengungkapkan data pribadi Anda untuk tujuan-tujuan yang diperlukan agar kami dapat menyampaikan produk kami kepada Anda, termasuk untuk:
          </p>
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal dark:text-gray-400">
            <li>Mendaftarkan dan mengelola akun pengguna Anda dan untuk memverifikasi identitas atau umur Anda;</li>
            <li>Memproses pesanan produk Anda, memproses, atau menerima pembayaran atas pesanan Anda;</li>
            <li>Mengirimkan atau menyediakan produk yang Anda beli, termasuk meminta kurir ekspedisi (pihak ketiga) untuk menelpon atau menghubungi Anda untuk memberikan informasi pengiriman produk yang Anda beli;</li>
            <li>Memproses permintaan pengembalian barang atau pengembalian pembayaran Anda sesuai dengan Persyaratan dan Ketentuan kami;</li>
            <li>Melakukan personalisasi dan meningkatkan customer experience Anda saat Anda mengunjungi Website kami, misalnya dengan memprioritaskan produk yang muncul dalam kolom pencarian Anda;</li>
            <li>
              Memenuhi ketentuan internal risk controls kami, akses kami terkait dengan proses pembayaran atau layanan bank seperti sengketa kartu kredit, penipuan, kesalahan dalam pembayaran; atau peraturan perundangan yang berlaku; dan
            </li>
            <li>
              Memastikan Website kami berfungsi dengan baik dan untuk meningkatkan kinerja mereka dengan melakukan beberapa aktivitas tertentu yang diperlukan, seperti melakukan debugging dan analisa statistik untuk mengoptimalkan Website
              kami.
            </li>
          </ul>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Kami juga dapat menggunakan data pribadi Anda untuk tujuan lain yang sewajarnya berhubungan dengan Tujuan dan yang persetujuannya telah kami peroleh dan urus sebagaimana diperlukan untuk Tujuan Tambahan atau dalam keadaan
            dimana penggunaan termaksud tidak membutuhkan persetujuan berdasarkan Hukum yang Berlaku.
          </p>
        </li>
        <li>
          Kepada Siapa Data Pribadi Anda Akan Diungkapkan?
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">Terkait dengan penggunaan data pribadi, kami mungkin akan mengungkapkan data pribadi Anda kepada:</p>
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal dark:text-gray-400">
            <li>Pegawai kami.</li>
            <li>Pihak yang memproses pembayaran yang Anda lakukan melalui Website.</li>
            <li>Penyedia logistik kami seperti jasa kurir yang mengantarkan pesanan kepada Anda.</li>
            <li>Mitra bisnis kami yang secara terpisah memiliki akun anda untuk program voucher.</li>
            <li>Mitra bisnis atau vendor kami yang memproses kegiatan promosi yang kami lakukan.</li>
            <li>Penasihat dan konsultan kami.</li>
            <li>Pihak lainnya yang Anda beri kewenangan untuk menerima pengungkapan Data Pribadi Anda dari kami.</li>
          </ul>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Sebisa mungkin kami akan meminimalisir pengungkapan Data Pribadi Anda hanya untuk informasi yang diperlukan untuk pelaksanaan Tujuan atau untuk Tujuan Tambahan terkait.
          </p>
        </li>
        <li>
          Bagaimana Kami Melindungi dan Menarik Informasi Pelanggan?
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Kami menerapkan berbagai langkah pengamanan dan berusaha untuk memastikan keamanan data pribadi Anda di sistem kami. Data pribadi pengguna berada di belakang jaringan yang aman dan hanya dapat diakses oleh sejumlah kecil
            karyawan yang memiliki hak akses khusus ke sistem tersebut. Namun demikian, tidak adanya jaminan atau keamanan absolut tidak dapat terhindarkan.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Kami akan menyimpan data pribadi sesuai dengan Undang-Undang Privasi dan/atau hukum lain yang berlaku, yaitu, kami akan memusnahkan atau menganonimkan data pribadi Anda ketika kami secara wajar menganggap bahwa tujuan data
            pribadi yang dikumpulkan itu tidak lagi difungsikan oleh penyimpanan data pribadi tersebut; penyimpanan tidak lagi diperlukan untuk tujuan hukum atau bisnis apa pun; dan tidak ada surat perintah yang melegitimasi untuk
            melakukan penarikan data pribadi tersebut lebih jauh. Tunduk terhadap hukum yang berlaku, kami dapat secara aman membuang data pribadi Anda tanpa pemberitahuan sebelumnya kepada Anda.
          </p>
        </li>
        <li>
          Informasi yang Dikumpulkan Oleh Pihak Ketiga
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Website kami menggunakan Google Analytics, layanan analitik web yang disediakan oleh Google, Inc. ("Google"). Google Analytics menggunakan cookie, yang merupakan file teks yang ditempatkan pada perangkat Anda, untuk membantu
            Website kami menganalisis, bagaimana pengguna menggunakan Website. Informasi yang dihasilkan oleh cookie mengenai penggunaan Platform (termasuk alamat IP Anda) akan ditransmisikan ke, dan disimpan oleh Google pada server.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Google akan menggunakan informasi ini untuk tujuan mengevaluasi penggunaan Anda atas Platform kami, menyusun laporan mengenai aktivitas situs web bagi para operator situs web dan menyediakan layanan lain yang berkaitan dengan
            aktivitas situs web serta penggunaan Internet. Google juga dapat mengalihkan informasi ini kepada pihak ketiga bilamana diwajibkan oleh hukum untuk melakukannya, atau bilamana pihak ketiga tersebut memproses informasi atas
            nama Google. Google tidak akan mengaitkan alamat IP Anda dengan data lain apa pun yang dipegang oleh Google.
          </p>
        </li>
        <li>
          Hubungi Kami
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Apabila ada pertanyaan mengenai Data Pribadi Anda atau tentang Kebijakan ini, atau apabila Anda memiliki keluhan atas pengumpulan, penggunaan atau pengelolaan Data Pribadi Anda yang kami lakukan, atau apabila ada pertanyaan
            mengenai ketundukan kami pada Hukum yang Berlaku, Anda dapat menghubungi Petugas Perlindungan Data kami melalui metode-metode berikut ini:
          </p>
          <ul class="ps-10 space-y-1 list-disc list-outside text-base text-gray-500 font-normal dark:text-gray-400">
            <li>Nomor telpon: 0821-1774-8606</li>
            <li>Alamat email: raodwave.apparel@gmail.com</li>
          </ul>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Judul email dan surat harus dengan jelas berisi pertanyaan mengenai perlindungan data yang Anda tanyakan, minta atau keluhkan agar kami dapat tanggapi dengan baik. Kami akan berusaha untuk menanggapi setiap pertanyaan,
            permintaan ataupun keluhan dengan tepat dan cepat.
          </p>
        </li>
        <li>
          Penyimpanan Informasi dan Penghapusan Data (Deletion of Data)
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            roadwaveapparel.com akan menyimpan informasi selama akun Pengguna tetap aktif dan dapat melakukan penghapusan data anda sesuai dengan ketentuan peraturan hukum yang berlaku. Jika anda ingin melakukan permintaan penghapusan
            data anda maka anda dapat menghubungi kami melalui email dan nomor telephon yang tertera di point 7 pada halaman ini.
          </p>
        </li>
        <li>
          Hukum yang Berlaku
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">Kebijakan ini dan penggunaan Website diatur menurut hukum yang berlaku di Republik Indonesia.</p>
        </li>
        <li>
          Perubahan Kebijakan Perlindungan Data
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Sebagai bagian dari upaya kami untuk dapat mengelola, melindungi dan memproses data pribadi Anda, kami akan mengkaji kebijakan, prosedur dan proses kami secara berkala. Kami dapat memperbarui Kebijakan ini untuk memastikan
            bahwa Kebijakan senantiasa konsisten dengan trend industri dan/atau segala perubahan dalam persyaratan hukum dan peraturan. Kami memiliki hak untuk merubah isi dari Kebijakan ini berdasarkan pertimbangan kami semata.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 dark:text-gray-400 px-1 text-justify">
            Anda setuju untuk tunduk pada ketentuan dalam Kebijakan ini dan pembaharuannya dari waktu ke waktu. Kami menghimbau Anda untuk mengunjungi Website kami secara berkala untuk memastikan Anda mengetahui kebijakan kami yang
            terbaru yang terkait dengan perlindungan Data Pribadi.
          </p>
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