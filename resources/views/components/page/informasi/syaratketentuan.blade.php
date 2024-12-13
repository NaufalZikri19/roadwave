@extends('index')
@section('content')
@auth
  @include('components.navbar')
@endauth
@guest
  @include('components.navbar-guest')
@endguest
@include('components.sidebar')
@section('title', 'Syarat & Ketentuan Berlaku')
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
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Syarat & Ketentuan Berlaku</span>
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
        <a href="/aturanpenggunaan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Aturan Pengguna</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanprivasi" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Kebijakan Privasi</a>
      </li>
      <li class="me-2">
        <a href="/kebijakanhakcipta" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Kebijakan Hak Cipta</a>
      </li>
      <li class="me-2">
        <a href="/syaratketentuan" aria-current="page" class="inline-block p-4 text-white bg-mainColor rounded-t-lg active">Syarat & Ketentuan Berlaku</a>
      </li>
      <li class="me-2">
        <a href="/aturan" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Aturan</a>
      </li>
    </ul>

    <!-- Content -->
    <div class="px-10 md:px-14 py-5 mb-5">
      <h3 class="text-3xl font-semibold text-slate-700 mb-10 mt-5">Syarat dan Ketentuan</h3>
      <p class="mb-3 text-gray-500 px-1 text-justify">
        Selamat datang di situs roadwaveapparel.com. Mohon membaca Ketentuan Penggunaan ini dengan seksama. Ketentuan Penggunaan ini mengatur penggunaan dan akses Anda atas Platform (didefinisikan di bawah) dan penggunaan Layanan
        (didefinisikan di bawah). <span class="font-bold text-gray-700">Dengan mengakses Platform dan/atau menggunakan Layanan, Anda setuju untuk tunduk dan terikat pada Ketentuan Penggunaan ini</span>. Jika Anda tidak
        menyetujui Ketentuan Penggunaan ini, maka Anda jangan/berhenti mengakses dan/atau menggunakan Platform atau Layanan ini. Apabila Anda menggunakan engagement tools yang disediakan oleh Roadwave pada Platform, maka Syarat dan
        Ketentuan Platform Engagement Tools akan berlaku.
      </p>
      <p class="mb-3 text-gray-500 px-1 text-justify">
        Jika Anda mengakses, mengunggah, atau melihat (1) Konten Siaran Langsung (Livestream); (2) konten yang dihasilkan oleh Anda atau pengguna lainnya pada Platform atau setiap Penjual; dan (3) konten yang dihasilkan oleh pihak ketiga
        yang ditunjuk oleh Roadwave pada Platform, Ketentuan Layanan Konten Roadwave akan berlaku.
      </p>
      <p class="mb-3 text-gray-500 px-1 text-justify">
        Akses terhadap dan penggunaan area pada Platform dan/atau penggunaan Layanan yang dilindungi oleh kata sandi (password) dan/atau aman (secure) dibatasi hanya untuk Pelanggan yang memiliki akun saja. Anda tidak diperbolehkan
        memperoleh atau berusaha memperoleh akses tidak sah ke bagian Platform dan/atau Layanan tersebut, atau ke area informasi yang dilindungi lainnya, dengan cara apapun yang secara sengaja tidak disediakan oleh kami untuk penggunaan
        spesifik Anda. Pelanggaran terhadap ketentuan ini merupakan pelanggaran berdasarkan hukum dan peraturan yang berlaku di Republik Indonesia.
      </p>
      <p class="mb-3 text-gray-500 px-1 text-justify">
        Jika Anda di bawah umur atau belum cakap secara hukum berdasarkan peraturan perundang-undangan yang berlaku, Anda harus memperoleh persetujuan dari orang tua atau wali Anda, penerimaan orang tua/wali Anda atas Ketentuan Penggunaan
        dan persetujuan mereka untuk bertanggung jawab atas:
      </p>
      <p class="mb-3 text-gray-500 px-1 text-justify">(i) tindakan Anda;</p>
      <p class="mb-3 text-gray-500 px-1 text-justify">(ii) biaya yang terkait dengan penggunaan suatu Layanan atau pembelian Produk; dan</p>
      <p class="mb-3 text-gray-500 px-1 text-justify">(iii) penerimaan dan kepatuhan Anda sesuai dengan Ketentuan Penggunaan ini.</p>
      <p class="mb-3 text-gray-500 px-1 text-justify">Jika Anda tidak memiliki izin dari orang tua atau wali Anda, Anda harus berhenti menggunakan atau mengakses Platform dan berhenti menggunakan Layanan ini.</p>
      <ol class="space-y-5 text-gray-700 list-decimal list-inside text-xl font-semibold mb-2">
        <li class="">
          Definisi & Interpretasi
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Kecuali jika didefinisikan lain, definisi dan ketentuan sehubungan dengan interpretasi pada Lampiran 1 akan berlaku atas Ketentuan Penggunaan ini.
          </p>
        </li>
        <li>
          Penggunaan umum Layanan dan/atau akses atas Platform
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">2.1 Pedoman penggunaan Platform dan/atau Layanan:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Anda setuju untuk mematuhi setiap dan semua pedoman, pemberitahuan, aturan dan kebijakan operasi, dan instruksi yang berkaitan dengan penggunaan Layanan dan/atau akses ke Platform, serta setiap perubahan terhadap hal-hal
            tersebut, yang dikeluarkan oleh kami, dari waktu ke waktu. Setiap perubahan dari pedoman, pemberitahuan, aturan operasi, kebijakan dan instruksi akan dipublikasi pada Platform atau diberitahukan kepada Anda melalui media lain.
            Anda dianjurkan untuk secara berkala memeriksa Ketentuan Penggunaan pada Platform. Dengan mengakses Platform dan/atau menggunakan Layanan, Anda setuju untuk terikat dengan setiap perubahan tersebut di atas setelah adanya
            pemberitahuan atau publikasi atas perubahan tersebut di Platform atau pemberitahuan melalui media lain. Jika Anda tidak menyetujui perubahan tersebut, maka Anda jangan/berhenti mengakses dan/atau menggunakan Platform atau
            Layanan ini.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">2.2 Kegiatan terlarang:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">Anda setuju dan berjanji untuk TIDAK:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (a) berpura-pura atau menyamar sebagai suatu orang atau entitas atau secara salah menyatakan atau sebaliknya secara tidak benar menggambarkan keterkaitan Anda dengan orang atau entitas manapun;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(b) menggunakan Platform atau Layanan untuk tujuan yang melanggar hukum (ilegal);</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (c ) berusaha untuk mendapatkan akses tidak sah atau sebaliknya mengganggu atau mengacaukan sistem komputer atau jaringan lain yang terhubung dengan Platform atau Layanan;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(d) memasang (posting), mempromosikan atau mengirimkan suatu Materi Terlarang melalui Platform atau Layanan;</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(e) mengganggu pemanfaatan dan pemakaian Platform atau Layanan oleh pihak lain;</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (f) menggunakan atau mengunggah, dengan cara tertentu, suatu perangkat lunak atau materi yang mengandung, atau yang Anda memiliki alasan untuk dicurigai mengandung, virus, komponen merusak, kode berbahaya atau komponen
            berbahaya yang dapat merusak data Platform atau merusak atau mengganggu pengoperasian komputer atau perangkat selular Pelanggan lainnya atau Platform atau Layanan; dan
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (g) menggunakan Platform atau Layanan diluar dari aturan/kebijakan penggunaan setiap jaringan komputer yang terhubung, setiap standar Internet yang berlaku dan hukum yang berlaku lainnya.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">2.3 Ketersediaan Platform dan Layanan:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Platform dan/atau Layanan diberikan kepada Anda sebagaimana adanya (as is). Sepanjang diperbolehkan berdasarkan peraturan yang berlaku, 3second berhak meningkatkan, memodifikasi, menghentikan sementara, menghentikan
            penyediaan, menghapus, baik secara keseluruhan atau sebagian dari Platform atau Layanan, atas kebijakannya sendiri dan tanpa pemberitahuan terlebih dahulu.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">2.4 Hak, namun bukan merupakan kewajiban, untuk memantau konten:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">Kami berhak, tetapi tidak wajib untuk:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (a) memantau, menyaring atau sebaliknya mengontrol setiap kegiatan, isi atau materi pada Platform dan/atau melalui Layanan. Kami dapat, berdasarkan diskresi tunggal dan mutlak kami, menyelidiki setiap pelanggaran terhadap
            Ketentuan Penggunaan yang tercantum di sini dan dapat mengambil tindakan apapun yang dianggap sesuai atau tepat;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(b) mencegah atau membatasi akses suatu Pelanggan kepada Platform dan/atau Layanan;</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (c ) melaporkan suatu kegiatan yang kami curigai sebagai pelanggaran terhadap hukum, undang-undang atau peraturan yang berlaku kepada pihak yang berwenang, dan bekerja sama dengan pihak berwenang tersebut; dan/atau
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (d) meminta suatu informasi dan data dari Anda sehubungan dengan penggunaan Layanan dan/atau akses Platform setiap saat, dan melaksanakan hak kami berdasarkan ayat ini apabila Anda menolak untuk memberikan/mengungkapkan
            informasi/data tersebut atau jika Anda, atau jika kami, memiliki alasan yang cukup untuk mencurigai bahwa Anda telah, menyediakan informasi yang tidak akurat, menyesatkan atau data dan/atau informasi palsu.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">2.5 Kebijakan Privasi:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            <span class="text-red-600">Kebijakan Privasi</span> juga berlaku dan mengikat sehubungan dengan penggunaan Anda atas Layanan dan/atau akses Anda ke Platform. Jika Anda tidak menyetujui
            <span class="text-red-600">Kebijakan Privasi</span>, maka Anda jangan/berhenti mengakses dan/atau menggunakan Platform atau Layanan ini.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Selain Ketentuan Penggunaan ini, penggunaan aspek-aspek tertentu dari Materi Platform dan Layanan, Materi Platform yang lebih komprehensif atau versi terbaru yang ditawarkan oleh kami atau sub-kontraktor yang kami tunjuk,
            dapat tunduk pada syarat dan ketentuan tambahan, yang akan berlaku sepenuhnya dan mengikat.
          </p>
        </li>
        <li>
          Penggunaan Layanan
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            3.1 Penerapan Pasal ini: Sebagai tambahan atas seluruh syarat dan ketentuan lainnya dalam Ketentuan Penggunaan ini, ketentuan dalam Pasal 3 ini merupakan ketentuan – ketentuan tambahan yang spesifik berlaku atas penggunaan
            Anda atas Layanan.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            3.2 Pembatasan: Penggunaan Layanan terbatas pada Pelanggan yang sah yang berusia dewasa secara hukum dan yang memiliki kapasitas hukum untuk menandatangani, membuat serta mengikatkan diri ke dalam suatu kesepakatan atau
            perjanjian berdasarkan hukum yang berlaku. Pelanggan yang melanggar syarat dan ketentuan yang tercantum di sini serta Pelanggan yang ditangguhkan secara permanen atau sementara dari penggunaan setiap Layanan tidak
            diperbolehkan menggunakan Layanan meskipun mereka memenuhi ketentuan Pasal 3.2 ini.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">3.3 Ketentuan penggunaan umum</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">Dengan ini Anda setuju:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (a) untuk mengakses dan/atau menggunakan Layanan hanya untuk tujuan yang sah dan dengan cara yang sah setiap saat dan selanjutnya setuju untuk melakukan setiap kegiatan terkait Layanan dengan itikad baik; dan
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (b) memastikan bahwa setiap informasi atau data yang Anda pasang atau munculkan di Platform sehubungan dengan Layanan adalah akurat dan setuju untuk bertanggung jawab secara mutlak atas informasi dan data tersebut.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Roadwave berhak untuk membatalkan atau menolak penggunaan Layanan ini atas diskresi tunggalnya, termasuk namun tidak terbatas, apabila Roadwave menganggap bahwa suatu transaksi merupakan penipuan atau mencurigai bahwa hal
            tersebut adalah penipuan.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">3.4 Deskripsi Produk:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Setiap deskripsi, informasi atau keterangan Produk marketplace disediakan oleh Penjual. Roadwave tidak memantau secara rutin atau memeriksa keakuratan dari setiap deskripsi, informasi atau keterangan Produk yang disediakan
            oleh Penjual tersebut. Pengguna dapat menggunakan fitur yang disediakan untuk memastikan akurasi dari deskripsi, informasi atau keterangan Produk tersebut dengan Penjual terkait.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">3.5 Harga Produk:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Seluruh Harga Produk sudah termasuk pajak pertambahan nilai (PPN), kecuali apabila Penjual bukan merupakan pengusaha kena pajak (“PKP”). Kami berhak untuk mengubah Harga Produk setiap saat tanpa memberikan alasan apapun atau
            pemberitahuan sebelumnya.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">3.6 Vendor Pihak Ketiga:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Dengan ini Anda mengetahui keberadaan pihak – pihak lain selain Roadwave (yaitu Vendor Pihak Ketiga) yang memasang dan menjual Produk pada Platform. Apakah suatu Produk tertentu dijual di Platform oleh Roadwave atau Vendor
            Pihak Ketiga dapat dicantumkan pada unggahan Produk tersebut. Untuk menghindari keraguan, setiap transaksi atau kesepakatan penjualan produk Vendor Pihak Ketiga kepada Pelanggan merupakan kesepakatan atau perjanjian yang
            dibuat langsung oleh dan hanya mengikat antara Pelanggan dan Vendor Pihak Ketiga.Anda selanjutnya mengakui bahwa Vendor Pihak Ketiga dapat menggunakan layanan berbayar yang ditawarkan oleh Roadwave untuk mempromosikan unggahan
            Produk mereka dalam hasil pencarian Anda di Platform. Daftar Produk tersebut dapat disertai dengan logo "megafon".
          </p>
        </li>
        <li>
          Pelanggan dengan akun Roadwave
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            4.1 Username/Password: Layanan–layanan tertentu yang tersedia di Platform memerlukan pembuatan akun pada kami atau memerlukan Anda untuk memberikan Data Pribadi Anda. Jika Anda ingin membuat akun 3second, Username dan Password
            dapat:
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(i) ditentukan dan diberikan kepada Anda oleh kami; atau</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (ii) Anda tentukan/berikan dan diterima oleh kami berdasarkan diskresi tunggal dan mutlak kami sehubungan dengan penggunaan Layanan dan/atau akses ke Platform terkait. Kami dapat setiap saat berdasarkan diskresi mutlak kami,
            meminta Anda memperbaharui Data Pribadi Anda atau dapat membatalkan Username dan/atau Password tanpa pemberitahuan terlebih dahulu dan tidak bertanggung jawab atas Kerugian (apabila ada) yang diderita atau disebabkan oleh Anda
            atau yang timbul dari atau sehubungan dengan permintaan atau pembatalan tersebut. Anda dengan ini setuju untuk merubah/memperbaharui Password Anda secara berkala dan untuk menjaga kerahasiaan Username dan Password dan
            bertanggung jawab atas keamanan akun Anda dan bertanggung jawab atas pengungkapan atau penggunaan (apakah penggunaan tersebut sah atau tidak) dari Username dan/atau Password Anda. Anda harus segera menghubungi kami jika Anda
            mengetahui atau memiliki alasan untuk mencurigai bahwa kerahasiaan Username dan/atau Password Anda terganggu atau jika terjadi penggunaan yang tidak sah atas Username dan/atau Password atau jika Data Pribadi Anda butuh
            diperbaharui.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            4.2 Layanan Login Biometrik: Jika perangkat Anda mendukung fitur sidik jari atau pengenalan wajah, Anda mungkin dapat mengaturnya sebagai metode verifikasi Anda, dan menggunakan sidik jari atau identifikasi wajah Anda yang
            terdaftar pada perangkat seluler yang diizinkan sebagai pengganti Nama Pengguna dan/atau Kata Sandi Anda, atau pin satu kali (OTP) sebagai kode keamanan untuk mengonfirmasi identitas Anda dalam mengakses Platform dan/atau
            penggunaan Layanan (“<span class="font-bold text-gray-700">Login Biometrik</span>”). Anda mengakui dan menyetujui bahwa untuk menggunakan Login Biometrik:
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            a. Anda harus menginstal aplikasi seluler kami menggunakan perangkat seluler yang diizinkan. Untuk tujuan Pasal ini, perangkat seluler yang diizinkan adalah perangkat yang dianggap sebagai “perangkat tepercaya” berdasarkan
            kriteria keamanan yang akan ditentukan oleh 3second atas kebijakannya sendiri dari waktu ke waktu;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            b. Anda perlu memastikan bahwa fungsi pengenalan wajah atau sidik jari telah diaktivasi pada perangkat seluler yang diizinkan Anda dan oleh karenanya identifikasi wajah Anda atau sidik jari Anda untuk mengontrol akses telah
            didaftarkan dan disimpan dalam ke perangkat seluler yang diizinkan Anda;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            c. Anda harus memastikan bahwa hanya identifikasi wajah dan/atau sidik jari Anda yang disimpan pada perangkat seluler yang diizinkan Anda untuk mengakses perangkat dan Anda memahami bahwa setelah mengaktifkan fungsi Login
            Biometrik pada akun Anda, setiap identifikasi wajah/sidik jari yang disimpan di perangkat seluler yang diizinkan Anda akan digunakan untuk tujuan Login Biometrik dan untuk mengakses Platform dan/atau Layanan dengan akun Anda;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            d. Dengan mengaktifkan fungsi Login Biometrik pada akun Anda, Anda dengan ini setuju dan mengizinkan Roadwave untuk mengakses identifikasi wajah/sidik jari sebagaimana tersimpan di perangkat seluler yang diizinkan Anda, dan
            Anda dengan ini menyetujui Roadwave mengakses dan menggunakan informasi tersebut untuk penyediaan Layanan berdasarkan akun Anda. Harap diperhatikan bahwa Roadwave tidak secara langsung mengumpulkan, memproses, atau menyimpan
            informasi wajah/sidik jari Anda dalam penyediaan layanan ini;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            e. modul autentikasi wajah / sidik jari dari perangkat seluler yang diizinkan tidak disediakan oleh Roadwave, dan kami tidak membuat pernyataan atau jaminan mengenai keamanan fungsi Login Biometrik dari perangkat seluler apa
            pun yang diizinkan dan apakah itu berfungsi dengan cara yang dinyatakan oleh pabrikan perangkat;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            f. kecuali dilarang oleh hukum yang berlaku untuk mengecualikan atau membatasi tanggung jawab kami, Roadwave tidak bertanggung jawab atas kerugian apa pun yang Anda alami sehubungan dengan penggunaan atau percobaan penggunaan
            Login Biometrik, akses terhadap akun Anda dengan menggunakan fungsi Login Biometrik atau instruksi Anda, atau transaksi tidak sah apa pun melalui atau sehubungan dengan layanan Login Biometrik; dan
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            g. Roadwave tidak menyatakan atau menjamin bahwa layanan Login Biometrik akan dapat diakses setiap saat, atau berfungsi dengan peralatan elektronik, perangkat lunak, infrastruktur, atau Layanan lain yang mungkin kami tawarkan
            dari waktu ke waktu. Anda dapat sewaktu-waktu memilih untuk mengakses aplikasi seluler menggunakan Nama Pengguna dan Kata Sandi Anda, dan/atau memilih untuk menonaktifkan layanan Login Biometrik kapan saja melalui aplikasi
            seluler Anda setelah Anda masuk.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            4.3 Pengakuan penggunaan/akses: Anda setuju dan mengetahui bahwa setiap penggunaan Layanan dan/atau akses ke Platform dan informasi, data atau komunikasi yang merujuk kepada Username dan Password Anda (termasuk setiap akses
            dengan menggunakan Layanan Biometrik) akan dianggap, sebagai:
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(a) akses terhadap Platform dan/atau penggunaan Layanan oleh Anda; atau</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(b) unggahan, pengumuman/pengungkapan, pemberian informasi, data atau komunikasi, yang sah yang diterbitkan oleh Anda.</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Username, Password serta identifikasi wajah atau sidik jari Anda merupakan informasi rahasia yang tidak dapat dibagikan dengan pihak manapun. Kami akan selalu berpegangan dan menganggap bahwa penggunaan atas nama
            Username,Password dan/atau Login Biometrik Anda dilakukan oleh Anda sendiri dan berhak menyimpulkan bahwa pengunaan/kegiatan tersebut dilakukan atau dikirimkan oleh Anda. Anda selanjutnya setuju dan mengakui bahwa Anda terikat
            dan bertanggung jawab atas setiap akibat yang timbul terkait penggunaan Layanan dan/atau akses ke Platform dengan menggunakan Username dan Password Anda (termasuk melalui suatu identifikasi wajah atau sidik jari).
          </p>
        </li>
        <li>
          Kekayaan Intelektual
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            5.1. Kepemilikan: Kekayaan Intelektual (HAKI) dalam atau atas Platform serta atas setiap Materi, dimiliki, atau berlisensi atau dikuasai oleh kami, atau pemberi lisensi kami atau penyedia layanan kami. Kami berhak untuk
            menjaga Kekayaan Intelektual sepenuhnya demi hukum.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            5.2. Penggunaan Terbatas: Tidak ada bagian-bagian dari Platform atau Materi Platform yang dapat direproduksi, direkayasa, decompiled, dibongkar, dipisahkan, diubah, didistribusikan, republished, ditampilkan, disiarkan,
            ditautkan (hyperlinked), direfleksikan (mirrored), disusun (framed), ditransfer atau dikirim dengan cara apapun atau disimpan/dipasang dalam suatu sistem pencarian informasi atau dipasang pada suatu server, sistem atau
            peralatan, tanpa izin tertulis sebelumnya dari kami atau dari pemilik hak cipta yang bersangkutan. Sesuai dengan Pasal 5.3, izin hanya akan diberikan kepada Anda untuk men-download, mencetak atau menggunakan Materi Platform
            untuk penggunaan pribadi dan non-komersial, dengan ketentuan Anda tidak mengubah Materi Platform, kami atau pemilik Hak Cipta yang bersangkutan adalah pemegang semua/setiap Hak Cipta dan Hak Cipta kepemilikan lainnya yang
            terkandung pada Materi Platform.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            5.3. Merek Dagang atau “Trademark” berarti merek dagang milik Roadwave atau pihak ketiga lainnya baik yang terdaftar dan tidak terdaftar.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            5.4 Tidak satupun pada Platform dan Ketentuan Penggunaan ini yang bisa ditafsirkan sebagai pemberian, secara tersirat atau tidak, atau di tafsirkan sebagai lisensi atau hak untuk menggunakan (termasuk atas meta tag atau "hot"
            link ke situs lain) setiap Trademark yang ditampilkan pada Layanan, tanpa izin tertulis dari kami atau pemilik Trademark yang berlaku.
          </p>
        </li>
        <li>
          Tanggung jawab dan kewajiban
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            6.1. Layanan, Platform dan Materi Platform yang tersedia adalah berbasis "sebagaimana adanya" dan "sebagaimana tersedia". Semua data dan/atau informasi yang terkandung dalam Platform, Layanan atau Materi Platform yang
            disediakan ditujukan sebagai informasi saja. Tanpa mengesampingkan ketentuan lain dalam Ketentuan Penggunaan ini, 3second akan melakukan usaha sewajarnya, tanpa jaminan apapun, terkait:
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (a) Akurasi, ketepatan waktu, kecukupan, nilai komersial atau kelengkapan dari semua data dan/atau informasi yang terkandung dalam Platform, Layanan atau Materi Platform;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (b) Bahwa Platform, Layanan atau bahwa setiap Materi Platform selalu tersedia tanpa gangguan, aman atau bebas dari kesalahan atau kelalaian, atau setiap cacat yang ditemukan akan langsung diperbaiki;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (c ) Bahwa Platform, Layanan atau Materi Platform selalu bebas dari virus komputer atau kode, agen, program atau macro lainnya yang berbahaya, merugikan, merusak; dan
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(d) Keamanan atas informasi apapun yang dikirim oleh Anda atau untuk Anda melalui Platform atau Layanan.</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Anda mengakui dan menerima adanya risiko bahwa (1) informasi yang dikirim atau diterima melalui Layanan atau Platform dapat diakses oleh pihak ketiga yang tidak berwenang dan/atau diungkapkan oleh kami atau petugas, karyawan
            atau agen kepada pihak ketiga yang mengaku sebagai Anda atau bertindak di bawah otoritas Anda, dan/atau (2) transmisi melalui internet dan surat elektronik dapat mengalami gangguan, pemadaman atau penundaan akibat lalu lintas
            internet atau transmisi data yang tidak benar karena sifat umum dari internet.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            6.2. Anda bertanggung jawab kepada Roadwave dan/atau pihak ketiga lainnya atas Kerugian apapun atau apapun penyebabnya (dalam bentuk apapun) yang timbul secara langsung atau tidak langsung yang terkait atas:
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(a) Akses, penggunaan dan/atau ketidakmampuan untuk menggunakan Platform atau Layanan;</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (b) Ketergantungan Anda (mengandalkan) pada data atau informasi yang tersedia melalui Platform dan/atau melalui Layanan. Anda tidak seharusnya bertindak hanya mengandalkan data atau informasi tanpa terlebih dahulu secara
            independen/mandiri memverifikasi isinya;
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            (c ) Kegagalan, kesalahan, kelalaian, gangguan sistem, server atau koneksi, penundaan dalam transmisi, virus komputer atau kode, agen program atau macros lainnya yang berbahaya, merugikan atau merusak; dan
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">(d) Setiap penggunaan atau akses ke situs lain atau halaman situs yang tertaut dengan Platform atau terdapat tautannya di Platform.</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            6.3. Risiko Anda sendiri: Anda mengetahui, memahami dan menerima setiap risiko terkait kesalahpahaman, kesalahan, kerusakan, biaya atau Kerugian yang diakibatkan dari penggunaan Platform dan/atau Layanan oleh Anda.
          </p>
        </li>
        <li>
          Hyperlink, peringatan dan iklan/advertising
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            7.1. Hyperlink: Untuk kemudahan Anda, kami dapat mencantumkan hyperlink ke situs-situs lain atau konten di Internet yang dimiliki atau dioperasikan oleh pihak ketiga. Situs yang terhubung atau konten tidak di bawah kendali
            kami dan kami tidak bertanggung jawab atas kesalahan, kelalaian, penundaan, pencemaran nama baik, fitnah, kebohongan, kecabulan, pornografi, tidak senonoh, ketidaktepatan atau materi yang lain yang terkandung dalam isi, atau
            konsekuensi mengakses, setiap situs web terkait. Setiap hyperlink ke situs-situs lain atau konten bukanlah merupakan bentuk dukungan atau verifikasi situs atau konten tersebut dan Anda setuju bahwa akses Anda ke atau
            penggunaan situs yang terhubung atau konten sepenuhnya menjadi resiko Anda sendiri.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            7.2. Iklan: Kami dapat melampirkan banners, java applet dan / atau bahan lain untuk Platform untuk tujuan advertising atau iklan produk dan/atau layanan kami atau iklan/advertisingproduk/layanan Vendor Pihak Ketiga kami. Untuk
            menghindari keraguan, Anda tidak mempunyai hak untuk mendapatkan pembayaran, biaya dan / atau komisi sehubungan dengan iklan tersebut atau materi promosi lainnya.
          </p>
        </li>
        <li>
          Informasi dari Anda
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">8.1. Informasi oleh Anda:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Anda memberikan kami ijin/lisensi non-eksklusif untuk menggunakan materi atau informasi yang Anda kirimkan ke Platform dan/atau berikan kepada kami, termasuk tetapi tidak terbatas pada, pertanyaan, ulasan, komentar, dan saran
            (secara kolektif disebut "Informasi"). Ketika Anda mengunggah atau mengirim Informasi, Anda juga memberikan kami hak untuk menggunakan nama yang Anda kirimkan atau Username sehubungan dengan Informasi tersebut. Anda tidak akan
            menggunakan alamat e-mail palsu, berpura-pura menjadi orang lain selain diri sendiri atau menyesatkan kita atau pihak ketiga mengenai asal suatu Informasi. Roadwave mungkin, tapi tidak diwajibkan untuk, mempublikasikan,
            menghapus atau mengedit Informasi Anda.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">8.2. Izin untuk menerima e-mail:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Anda menyetujui dan mengesahkan penggunaan oleh kami dari setiap informasi yang diberikan oleh Anda (termasuk Data Pribadi) untuk keperluan pengiriman informasi dan promosi e-mail kepada Anda. Persetujuan Anda atas ketentuan
            Pasal ini 8.2 merupakan persetujuan Anda yang bertujuan untuk perlindungan dari spam (baik di Indonesia atau di tempat lain). Anda dapat memilih untuk tidak menerima e-mail promosi dengan mengklik hyperlink yang tersedia di
            promosi e-mail untuk menyatakan bahwa Anda akan berhenti berlangganan promosi e-mail.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">8.3. Kebijakan Privasi:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Dengan ini Anda menyatakan bahwa Anda telah membaca dan menyetujui Kebijakan Privasi, dan menyetujui atas pengumpulan, penggunaan dan pengungkapan Data Pribadi Anda untuk tujuan sebagaimana ditetapkan dalam Kebijakan Privasi
            tersebut.
          </p>
        </li>
        <li>
          Pengakhiran
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">9.1. Pengakhiran oleh kami:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Berdasarkan kebijakan kami, segera setelah memberikan pemberitahuan, kami dapat menghentikan penggunaan Platform dan/atau Layanan dan/atau menonaktifkan Username, Password dan/atau fungsi Login Biometrik Anda. Kami dapat
            menghentikan akses Anda ke Platform dan/atau Layanan (atau bagian daripadanya) dengan alasan tertentu, termasuk jika terjadi pelanggaran terhadap Ketentuan Penggunaan ini atau di mana jika kami percaya bahwa Anda telah
            melanggar atau bertindak tidak sesuai dengan syarat atau ketentuan yang berlaku di sini, atau jika dalam pendapat kami atau pendapat otoritas regulasi, layanan tersebut yang berkaitan dengan Platform tidak untuk dapat
            diberikan/dilaksanakan.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">9.2. Pengakhiran oleh Anda:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            Anda dapat mengakhiri Ketentuan Penggunaan ini dengan memberikan pemberitahuan secara tertulis dalam waktu 7 (tujuh) hari kerja kepada kami.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            9.3. Untuk tujuan pengakhiran ini, Anda dan Roadwave sepakat untuk mengesampingkan ketentuan yang diatur dalam Pasal 1266 KUH Perdata Indonesia sehingga pengakhiran akan dilakukan tanpa memerlukan persetujuan atau keputusan
            pengadilan atau lembaga lain dalam wilayah Republik Indonesia.
          </p>
        </li>
        <li>
          Pemberitahuan
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">10.1 Semua pemberitahuan atau komunikasi lainnya yang diberikan kepada Anda:</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            a. Dikomunikasikan melalui Platform, media cetak atau elektronik lainnya yang kami kirimkan dalam suatu tanggal publikasi atau siaran yang telah kami pilih; atau
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            b. Dikirim melalui pos atau disampaikan pada alamat terakhir Anda, dan akan dianggap telah diterima oleh Anda pada hari pengiriman tersebut atau pada hari diterimanya.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            10.2 Pemberitahuan dari Anda: Anda hanya dapat memberikan pemberitahuan kepada kami secara tertulis dikirim ke alamat atau alamat e-mail kami ditunjuk, dan kami akan dianggap telah menerima pemberitahuan tersebut hanya pada
            saat tanggal penerimaan. Kami berusaha untuk menanggapi secara cepat setiap pemberitahuan dari Anda, namun kami tidak dapat menjamin bahwa kami akan selalu merespon dengan kecepatan yang konsisten setiap saat.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            10.3 Media lain: Kendati diatur dalam Pasal 10.1 dan 10.2 di atas, kami mungkin sewaktu-waktu dapat memilih media atau cara yang lain dalam memberikan pemberitahuan (termasuk namun tidak terbatas pada e-mail atau bentuk lain
            dari komunikasi elektronik) dan waktu atau saat dianggap telah diterimanya pemberitahuan tersebut.
          </p>
        </li>
        <li>
          Umum
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.1 Kecuali ditentukan lain berdasarkan Ketentuan Penggunaan ini, pasal-pasal dalam Ketentuan Penggunaan ini dan hak dan ganti rugi kami berdasarkan Ketentuan Penggunaan ini, adalah kumulatif dan tanpa prasangka serta hak
            atau ganti rugi kami mungkin kami miliki berdasarkan hukum atau keadilan, dan tidak ada ketentuan yang akan menghalangi atau mencegah hak kami dan upaya hukum atau ganti rugi kami berdasarkan hukum yang berlaku.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.2 Kegagalan kami untuk menegakkan Ketentuan Penggunaan tidak dapat diartikan sebagai pengesampingan dari ketentuan - ketentuan ini, dan kegagalan tersebut tidak akan mempengaruhi hak kami selanjutnya untuk menegakkan
            Ketentuan Penggunaan ini. Kami akan tetap berhak menggunakan hak dan ganti rugi/upaya hukum kami dalam setiap kondisi lain di mana Anda melanggar Ketentuan Penggunaan ini.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.3 Keterpisahan: Jika suatu saat ada ketentuan pada Ketentuan Penggunaan ini yang menjadi ilegal, tidak sah atau tidak dapat diterapkan dalam hal apapun, maka legalitas, validitas dan keberlakuan dari ketentuan lainnya dalam
            Ketentuan Penggunaan ini tidak akan terpengaruh atau berkurang karenanya, dan akan terus berlaku.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.4 Hak Pihak Ketiga: Seseorang atau pihak yang bukan merupakan pihak yang tunduk pada Ketentuan Penggunaan ini, tidak berhak berdasarkan hukum apapun dan yurisdiksi manapun untuk menjalankan ketentuan dari Ketentuan
            Penggunaan ini. Untuk menghindari keraguan, tidak ada dalam Pasal ini yang akan mempengaruhi hak-hak dari setiap pengalihan yang diizinkan atas Ketentuan Penggunaan ini.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.5 Hukum yang Berlaku: Penggunaan Platform dan/atau Layanan dan Ketentuan Penggunaan ini akan diatur oleh dan ditafsirkan sesuai dengan hukum Republik Indonesia.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.6 Injunctive relief: Kami dapat mencari atau mendapatkan perintah penghentian dengan segera apabila berdasarkan itikad baik kami menentukan bahwa suatu pelanggaran atau tidak dipatuhinya Ketentuan Penggunaan ini adalah
            sedemikian rupa sehingga perintah penahanan sementara atau perintah lainnya adalah satu-satunya ganti rugi atau pemulihan yang sesuai atau memadai.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.7 Perubahan: Roadwave dapat merubah setiap, sebagian atau seluruh ketentuan sebagaimana terdapat dalam Ketentuan Penggunaan ini dengan cara menyampaikan pemberitahuan melalui Platform atau dengan metode lain sebagaimana
            ditentukan oleh Roadwave (yang mungkin termasuk pemberitahuan melalui e-mail), yang mana perubahan tersebut akan berlaku pada tanggal yang kami tentukan melalui cara di atas. Jika Anda menggunakan Platform atau Layanan setelah
            tanggal tersebut, Anda dianggap telah menerima perubahan tersebut. Jika Anda tidak mau menerima perubahan tersebut, Anda harus berhenti mengakses atau menggunakan Platform dan Layanan dan mengakhiri Ketentuan Penggunaan ini.
            Hak kami untuk merubah Ketentuan Penggunaan ini sebagaimana disebut di atas dapat dilaksanakan tanpa persetujuan dari setiap orang atau badan yang bukan merupakan suatu pihak berdasarkan Ketentuan Penggunaan ini.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.8 Koreksi kesalahan: Setiap kesalahan ketik, administrasi atau kesalahan lainnya atau kelalaian dalam penerimaan, faktur atau dokumen lainnya yang terjadi pada sisi kami akan menjadi bahan perbaikan kami yang dilakukan oleh
            kami.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">11.9 Mata uang: Uang yang berkaitan dengan Ketentuan Penggunaan ini adalah dalam mata uang Rupiah Indonesia.</p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.10 Seluruh kesepakatan: Ketentuan Penggunaan ini merupakan keseluruhan kesepakatan antara Anda dan kami berkaitan dengan materi pokok dalam perjanjian dan menggantikan semua pemahaman, komunikasi dan kesepakatan sebelumnya
            sehubungan dengan materi pokok dalam perjanjian.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.11 Mengikat dan konklusif: Anda mengakui dan menyetujui bahwa setiap catatan (termasuk catatan dari setiap percakapan telepon terkait dengan Layanan, jika ada) dikelola oleh kami atau penyedia layanan kami yang berhubungan
            dengan Platform dan Layanan bersifat mengikat dan konklusif pada Anda untuk semua tujuan apapun dan menjadi bukti dari setiap informasi dan / atau data yang dikirimkan antara kami dan Anda. Anda setuju bahwa semua catatan
            tersebut diterima sebagai bukti dan bahwa Anda tidak akan menantang atau membantah diterimanya, kehandalan, akurasi atau keaslian catatan tersebut dengan alasan karena catatan tersebut dalam bentuk elektronik atau output dari
            sistem computer.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.12 Sub-kontraktor dan delegasi: Kami berhak untuk mendelegasikan atau mensub-kontrak kinerja dari setiap fungsi kami sehubungan dengan Platform dan/atau Layanan dan berhak untuk menggunakan penyedia layanan, subkontraktor
            dan / atau agen pada seperti hal sebagaimana kami anggap pantas.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.13 Pengalihan: Anda tidak dapat mengalihkan hak dan kewajiban Anda atas Ketentuan Penggunaan tanpa izin tertulis sebelumnya dari kami.
          </p>
          <p class="text-base font-normal my-4 text-gray-500 px-1 text-justify">
            11.14 Force Majeure: Setiap wanprestasi, kesalahan, gangguan atau keterlambatan dalam pelaksanaan kewajiban atau setiap ketidakakuratan, atau ketidaksesuaian di Platform dan/atau Layanan yang disebabkan, secara keseluruhan
            atau sebagian, langsung atau tidak langsung, oleh suatu peristiwa atau kegagalan yang disebabkan oleh Force Majeure atau Keadaan Memaksa tidak akan dianggap sebagai kegagalan 3second dalam memenuhi kewajibannya berdasarkan
            Ketentuan Penggunaan ini.
          </p>
        </li>
      </ol>
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
