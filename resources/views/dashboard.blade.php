@extends('layouts.front')
@section('content')

</style>
{{-- <div class="mt-10"></div> --}}
<div class="card bg-base-100 shadow-xl">
  <div id="hero-slideshow" class="hero rounded-box" style="min-height: 70vh;">
      <div class="hero-overlay bg-opacity-50 rounded-box"></div>
      <div class="hero-content flex min-h-max text-center text-neutral-content mt-30" style="height: 100%">
          <div class="max-w-md">
              <h1 class="mb-5 text-xl font-bold text-base-100">Selamat Datang</h1>
              <p class="mb-5 text-base-100">
                  Bergabunglah dengan LKP Dian Cipta Cendikia Kalianda dan tingkatkan keterampilan Anda di bidang yang Anda minati. Kami menawarkan berbagai kursus berkualitas tinggi yang telah terakreditasi dan didukung oleh instruktur berpengalaman. Daftar sekarang dan mulailah perjalanan Anda menuju kesuksesan!
              </p>
              <a href="{{ route('daftar-paket') }}" class="btn btn-warning">Mulai Sekarang</a>
          </div>
      </div>
  </div>
</div>

    
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section id="about" class="pt-36 pb-32 dark:bg-dark">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="mb-10 w-full px-4 lg:w-1/2">
                <h4 class="mb-3 text-lg font-bold uppercase text-warning">TENTANG LKP</h4>
                <h2 class="mb-5 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl">Yuk, KURSUS DI LKP DIAN CIPTA CENDIKIA!</h2>
                <p class="max-w-xl text-base font-medium text-green-700 lg:text-lg">
                    LKP Dian Cipta Cendikia adalah Lembaga Kursus Pelatihanyang menawarkan berbagai kursus berkualitas tinggi. Pelajari Aplikasi Perkantoran, Pemograman, Desain Grafis, dan banyak lagi dengan instruktur berpengalaman.
                </p>
                <a href="{{ route('daftar-paket') }}" class="inline-block mt-4 px-6 py-2 text-white bg-warning rounded-lg hover:bg-green-700">Lihat Kursus Kami</a>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <h3 class="mb-4 text-2xl font-semibold text-dark dark:text-white lg:pt-10 lg:text-3xl">Mari Berteman</h3>
                <p class="mb-6 text-base font-medium text-green-700 lg:text-lg">
                    Terhubung dengan kami di berbagai platform sosial media untuk mendapatkan update terbaru dan konten eksklusif.
                </p>
                <div class="flex items-center">
                    <!-- Youtube -->
                    <a href="https://www.youtube.com/@dianciptacendikiacourse9588" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>YouTube</title>
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/lkpdcckalianda/" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="#dcc" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Twitter</title>
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>

                    <!-- TikTok -->
                    <a href="#dcc" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>TikTok</title>
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="#dikisan" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

  <section id="portfolio" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto mb-16 max-w-xl text-center">
          <h4 class="mb-2 text-lg font-semibold text-warning">Kursus</h4>
          <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Kursus Terbaru</h2>
          <p class="text-md font-medium text-green-700 md:text-lg">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus porro consequuntur alias, commodi nemo enim aliquam ipsam obcaecati? Assumenda, ipsam?
          </p>
        </div>
      </div>

      <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
        <div class="mb-12 p-4 md:w-1/2">
          <div class="overflow-hidden rounded-md shadow-md">
            <img src="img/desain.jpg" alt="Landing Page" width="w-full" onclick="window.location.href='{{ route('daftar-paket') }}'" />
          </div>
          <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white"> Desain Grafis </h3>
          <p class="text-base font-medium text-green-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, iusto! Aliquam, corporis.</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="overflow-hidden rounded-md shadow-md">
            <img src="img/dslr.jpg" alt="E-Commerce" width="w-full" onclick="window.location.href='{{ route('daftar-paket') }}'"/>
          </div>
          <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Belajar Fotografi</h3>
          <p class="text-base font-medium text-green-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, iusto! Aliquam, corporis.</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="overflow-hidden rounded-md shadow-md">
            <img src="img/kobo.jpg" alt="Technical Documentation" width="w-full" onclick="window.location.href='{{ route('daftar-paket') }}'"/>
          </div>
          <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Aplikasi Perkantoran</h3>
          <p class="text-base font-medium text-green-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, iusto! Aliquam, corporis.</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="overflow-hidden rounded-md shadow-md">
            <img src="img/laravel.png" alt="Tribute Page" width="w-full" onclick="window.location.href='{{ route('daftar-paket') }}'"/>
          </div>
          <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">belajar Laravel</h3>
          <p class="text-base font-medium text-green-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, iusto! Aliquam, corporis.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio Section End -->

  <!-- Clients Section Start -->
  <section id="clients" class="bg-slate-800 pt-36 pb-32 dark:bg-slate-300">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto mb-16 text-center">
          <h4 class="mb-2 text-lg font-semibold text-warning"></h4>
          <h2 class="mb-4 text-3xl font-bold text-green-200 dark:text-dark sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama dengan kami</h2>
          <p class="text-md font-medium text-green-700 md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero suscipit facilis velit!</p>
        </div>
      </div>

      <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
          <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="img/tutwuri.png" alt="Google" />
          </a>
          <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="img/kementrian.png" alt="kementrian" />
          </a>
          <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="img/tutwuri.png" alt="Tutwuri" />
          </a>
          <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
            <img src="img/kementrian.png" alt="kementrian" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Clients Section End -->

  <!-- Blog Section Start -->
  

  <!-- Contact Section Start -->
  <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto mb-16 max-w-xl text-center">
          <h4 class="mb-2 text-lg font-semibold text-warning">Contact</h4>
          <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
          <p class="text-md font-medium text-green-700 md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, sed.</p>
        </div>
      </div>

      <form>
        <div class="w-full lg:mx-auto lg:w-2/3">
          <div class="mb-8 w-full px-4">
            <label for="name" class="text-base font-bold text-warning">Nama</label>
            <input type="text" id="name" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-warning focus:outline-none focus:ring-1 focus:ring-warning" />
          </div>
          <div class="mb-8 w-full px-4">
            <label for="email" class="text-base font-bold text-warning">Email</label>
            <input type="email" id="email" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-warning focus:outline-none focus:ring-1 focus:ring-warning" />
          </div>
          <div class="mb-8 w-full px-4">
            <label for="message" class="text-base font-bold text-warning">Pesan</label>
            <textarea type="email" id="email" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-warning focus:outline-none focus:ring-1 focus:ring-warning"></textarea>
          </div>
          <div class="w-full px-4">
            <button class="w-full rounded-full bg-warning py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Footer Start -->
  <footer class="bg-slate-800 pt-36 pb-32 dark:bg-slate-300 text-green-300">
    <div class="container mx-auto text-green-400">
        <div class="flex flex-wrap">
            <div class="mb-12 w-full px-4 font-medium text-green-300 md:w-1/3">
                <h2 class="mb-5 text-4xl font-bold text-white">LKP DIAN CIPTA CENDIKIA</h2>
                <h3 class="mb-2 text-2xl font-bold ">Hubungi Kami</h3>
                <p>lkpdcckld@gmail.com</p>
                <p>Jl. Raden Intan Kota Baru Kalianda</p>
                <p>Lampung Selatan</p>
            </div>
            <div class="mb-12 w-full px-4 md:w-1/3">
                <h3 class="mb-5 text-xl font-semibold text-white">Tentang saya dikisan</h3>
                <ul>
                    <li>
                        <a href="#" class="mb-3 inline-block text-base text-green-300 hover:text-warning">Programming</a>
                    </li>
                    <li>
                        <a href="#" class="mb-3 inline-block text-base text-slate-300 hover:text-warning">Teknologi</a>
                    </li>
                    <li>
                        <a href="#" class="mb-3 inline-block text-base text-slate-300 hover:text-warning">Gaya Hidup</a>
                    </li>
                </ul>
            </div>
            <div class="mb-12 w-full px-4 md:w-1/3">
                <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
                <ul>
                    <li>
                        <a href="#home" class="mb-3 inline-block text-base text-slate-300 hover:text-warning">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}" class="mb-3 inline-block text-base text-slate-300 hover:text-warning">Tentang kami</a>
                    </li>
                    <li>
                        <a href="{{ route('daftar-paket') }}" class="mb-3 inline-block text-base text-slate-300 hover:text-warning">Kursus</a>
                    </li>
                    <li>
                        <a href="{{ route('faqs') }}" class="mb-3 inline-block text-base text-slate-300 hover:text-warning">FAQs</a>
                    </li>
                    <li>
                        <a href="{{ route('contasct-us.index') }}" class="mb-3 inline-block text-base text-slate-300 hover:text-warning">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full border-t border-slate-700 pt-10">
            <div class="mb-5 flex items-center justify-center space-x-3">
                <!-- Social Media Links -->
                <a href="https://www.youtube.com/@dikisan4259" target="_blank" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>YouTube</title>
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>

                <a href="https://instagram.com/dikisantoso" target="_blank" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Instagram</title>
                        <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                    </svg>
                </a>

                <a href="https://twitter.com/dikisantoso" target="_blank" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Twitter</title>
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </a>

                <a href="#" target="_blank" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>TikTok</title>
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                    </svg>
                </a>

                <a href="https://linkedin.com/in/dikisantoso" target="_blank" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-warning hover:bg-warning hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>LinkedIn</title>
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
            </div>
            <p class="text-center text-xs font-medium text-slate-500">
                Dibuat dengan <span class="text-pink-500">❤️</span> oleh <a href="https://www.instagram.com/echo_dikysan/" target="_blank" class="font-bold text-warning">Diki Santoso</a>, menggunakan
                <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.
            </p>
        </div>                 
    </div>
</footer>

<!-- Back to top Start -->
<a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-warning p-4 hover:animate-pulse" id="to-top">
    <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
</a>

@endsection
