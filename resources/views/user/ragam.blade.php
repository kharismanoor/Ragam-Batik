<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragam Batik</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- HEADER START -->
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
              <div class="px-4">
                <img src="../img/logo ragam 2.svg" alt="logo">
              </div>
               <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button"
                class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute py-5 bg-white
                shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full
                lg:block lg:static lg:bg-transparent lg:max-w-full
                lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li calss="group">
                           <a href="/" class="text-base text-red-900 py-2 mx-8 flex
                           hover:text-yellow-700">Beranda</a> 
                        </li>
                        <li calss="group">
                            <a href="/ragam" class=" text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Ragam</a> 
                         </li>
                         <li calss="group">
                            <a href="/event2" class="text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Events</a> 
                         </li>
                         <li calss="group">
                            <a href="/gambar" class="text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Draw</a> 
                         </li>
                         <li calss="group">
                            <a href="/koleksi" class="text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Koleksi</a> 
                         </li>
                         <li calss="group">
                            <a href="/login" class="text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Login</a> 
                         </li>
                    </ul>
                </nav>
               </div> 
            </div>
        </div>
        <style>
            /* Atur gaya untuk popup */
            .popup {
                display: none; /* Sembunyikan popup secara default */
                position: fixed; /* Tetapkan posisi popup */
                top: 50%; /* Posisikan popup di tengah vertikal */
                left: 50%; /* Posisikan popup di tengah horizontal */
                transform: translate(-50%, -50%); /* Posisikan popup di tengah-tengah */
                background-color: rgba(255, 255, 255, 0.5); /* Warna latar belakang semi-transparan */
                padding: 20px; /* Berikan ruang di dalam popup */
                border-radius: 5px; /* Berikan sudut yang terbungkus */
                z-index: 9999; /* Atur indeks z tinggi agar popup di atas elemen lain */
            }
            /* Atur gaya untuk konten popup */
            .popup-content {
                background-color: #fff; /* Warna latar belakang konten */
                padding: 20px; /* Berikan ruang di dalam konten */
                border-radius: 5px; /* Berikan sudut yang terbungkus */
            }
        </style>
    </section>
        </header>
    <!-- HEADER END -->

    <!-- RAGAM START -->
    <section id="ragam" class="pt-36 pb-32 bg-red-900">
        
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mb-10">
                </div>
            </div>
        </div>
            <div class="flex flex-wrap">
                @foreach ($batiks as $batik)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="{{ asset('storage/posts/'.$batik->image) }}" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="/ragam2" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">{{ $batik->nama_batik }}</a></h3>
                            <p>{{ $batik->asal }}</p>
                            
                            <button onclick="togglePopup({{ $batik->id }})" class="mt-3 inline-flex items-center font-medium text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-700">
                                Tampilkan Informasi 
                                <svg class=" w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                            </button>
                        
                          
                                <!-- Konten Popup -->
                                <div id="popup" class="popup">
                                    <!-- Konten Popup -->
                                    <div class="popup-content">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-black">History</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $batik->history }}</p>
                                    <button onclick="togglePopup()" class="mt-4 bg-red-900 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>     
</div>
</div>
</section>
        
    <!-- RAGAM END -->

    <!-- FOOTER START -->
    <footer class="bg-white pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-12 text-red-900 font-medium md:w-1/3">
                    <img src="../img/logo ragam 2.svg " alt="logo">
                </div>
                <div class="w-full px-4 mb-12 text-red-900 font-medium md:w-1/3">
                    
                    <h2 class="font-bold text-2xl text-red-900 mb-5">PT DWIPANTARA</h2>
                    <h3 class="font-bold text-xl text-red-900 mb-2">Hubungi Kami</h3>
                    <p>dwipantara@gmail.com</p>
                    <p>Jl. Dr Rajiman No. 164 Rt 01 Rw 04 Kemlayan Serengan</p>
                    <p>Surakarta</p>
                   
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-red-900 mb-5">Tautan</h3>
                    <ul class="text-red-900">
                        <li>
                            <a href="#ragam" class="inline-block text-base hover:text-yellow-700 mb-3">Ragam</a>
                        </li>
                        <li>
                            <a href="#events" class="inline-block text-base hover:text-yellow-700 mb-3">Events</a>
                        </li>
                        <li>
                            <a href="#koleksi" class="inline-block text-base hover:text-yellow-700 mb-3">Koleksi</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-ful pt-10 border-t border-slate-950">
                <p class="text-center text-red-900 text-sm">@2024 Dwipantara</p>
            </div>
        </div>
    </div>
    </footer>
    <!-- FOOTER END -->
    

    <script>
        // Fungsi untuk menampilkan atau menyembunyikan popup
        function togglePopup() {
            var popup = document.getElementById("popup");
            if (popup.style.display === "block") {
                popup.style.display = "none";
            } else {
                popup.style.display = "block";
            }
        }
    </script>
    <script src="public/js/script.js"></script>
</body>
</html>