<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    @vite('resources/css/app.css')
<body>
    <!-- HEADER START -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
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
                <nav id="nav-menu" class="hidden absolute py-5 bg-red-900 
                shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full
                lg:block lg:static lg:bg-transparent lg:max-w-full
                lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li calss="group">
                           <a href="/" class="text-base text-white py-2 mx-8 flex
                           hover:text-yellow-700">Beranda</a> 
                        </li>
                        <li calss="group">
                            <a href="/ragam" class="text-base text-white py-2 mx-8 flex
                            hover:text-yellow-700">Ragam</a> 
                         </li>
                         <li calss="group">
                            <a href="/event2" class="text-base text-white py-2 mx-8 flex
                            hover:text-yellow-700">Events</a> 
                         </li>
                         <li calss="group">
                            <a href="/gambar" class="text-base text-white py-2 mx-8 flex
                            hover:text-yellow-700">Draw</a> 
                         </li>
                         <li calss="group">
                            <a href="/koleksi" class="text-base text-white py-2 mx-8 flex
                            hover:text-yellow-700">Koleksi</a> 
                         </li>
                         <li calss="group">
                            <a href="/login" class="text-base text-white py-2 mx-8 flex
                            hover:text-yellow-700">Login</a> 
                         </li>
                         <li calss="group">
                            <a href="/logout" class="text-base text-white py-2 mx-8 flex
                            hover:text-yellow-700">Logout</a> 
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
            }
            </style>
        </header>
    <!-- HEADER END -->

    <!--  START -->
    <section id="home" class="w-full relative" style="background-image:url('../img/Wireframe\ -\ 7.svg'); height:70vh" >
    </section>
    <!-- END -->

    <!-- EVENT START -->
    <section id="Event" class="pt-36 pb-10 bg-white">
        <div class="relative">
            <div class="w-full px-4 mb-10">
                
                <h2 class="font-bold text-black text-3xl mb-4
                sm:tetxt-4xl lg:text-2xl">Event</h2>
                @foreach ($events as $event)
                <div class="  text-sm rounded-xl ">
                   <a href="{{ route('show.event2', ['id' => $event->id]) }}">
                    <div class="border-red-900 mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                        
                        <span class="font-semibold text-black py-2 px-8 text-2xl">{{ $event->nama_event }}</span>
                        <p class="font-semibold text-black py-2 px-8 text-base">{{ $event->lokasi }}</p>
                    </a>

                </div>
                @endforeach
             </div>
         </div>
     </div>               
    </div>
            
               
                
                
            
{{--               
                    <!-- Konten Popup -->
                    <div id="popup" class="popup">
                        <!-- Konten Popup -->
                        <div class="popup-content">
                            <div class=" rounded-xl shadow-lg overlow-hidden mb-20 " style="background-image: url(../img/bg\ 7.svg); height:50vh;">
                                <div class="container h-full">
                               <div class="px-4 py-6 lg:w-1/2 ">
                                    <div class=" bg-white rounded-lg ">
                                    <h1 class="text-2xl text-left px-4 py-4 font-bold">
                                        {{ $event->nama_event }}
                                    </h1>
                                    <h2  class="text-base text-left px-4 py-3 font-semibold">
                                        {{ $event->pelaksanaan }}
                                    </h2>
                                    <h3 class="text-base text-left px-4 font-semibold" >
                                        {{ $event->lokasi }}
                                    </h3>
                                    <p class="text-base text-left px-4 py-4  " >{{ $event->description }}
                                    </p>
                                    <a href="{{ $event->map}}" class="text-base font-semibold text-white bg-red-900 mr-4 mb-6 mt-4 ml-4 py-2 px-6 rounded-lg">
                                        Get Direction
                                    </a>
                                    <div class="py-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>    --}}

    <!-- EVENT END -->

    <!-- FOOTER START -->
    <footer class="bg-red-900 pt-24 pb-10">
        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-12 text-white font-medium md:w-1/3">
                    <img src="../img/logo ragam 2.svg " alt="logo">
                </div>
                <div class="w-full px-4 mb-12 text-white font-medium md:w-1/3">
                    
                    <h2 class="font-bold text-2xl text-white mb-5">PT DWIPANTARA</h2>
                    <h3 class="font-bold text-xl text-white mb-2">Hubungi Kami</h3>
                    <p>dwipantara@gmail.com</p>
                    <p>Jl. Dr Rajiman No. 164 Rt 01 Rw 04 Kemlayan Serengan</p>
                    <p>Surakarta</p>
                   
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-white">
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
            <div class="w-ful pt-10 border-t border-slate-300">
                <p class="text-center text-white text-sm">@2024 Dwipantara</p>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
    <script src="../js/script.js"></script>


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
</body>
</html>