<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Home page</title>

    
</head>
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
                   <a href="/homepage" class="text-base text-white py-2 mx-8 flex
                   hover:text-yellow-700">Beranda</a> 
                </li>
                <li calss="group">
                    <a href="/ragam" class="text-base text-white py-2 mx-8 flex
                    hover:text-yellow-700">Ragam</a> 
                 </li>
                 <li calss="group">
                    <a href="/event" class="text-base text-white py-2 mx-8 flex
                    hover:text-yellow-700">Events</a> 
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
</header>
<!-- HEADER END -->

<!-- SLIDER START -->
<section >
        <div class="relative">
                <ul id="slider">
                    <li class=" h-[100vh] relative">
                        <img class="w-full object-cover" src="../img/bg 3.svg">
                    </li>
                    <li class="h-[100vh] relative hidden">
                        <img class="w-full object-cover " src="../img/bg 4.svg" alt="gambar 2">
                    </li>  
                    <li class="h-[100vh] relative hidden">
                        <img class="w-full object-cover " src="../img/bg 5.svg" alt="gambar 3">
                    </li>  
                </ul>
            <div class="absolute px-5 flex h-full w-full top-0 left-0 ">
                <div class="my-auto  w-full flex justify-between">
                    <button onclick="prev()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                          </svg>                      
                    </button>
                    <button onclick="next()" class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                          </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SLIDER END -->

 

    <!-- KOLEKSI START -->
    <section id="koleksi" class="pt-36 pb-32 bg-white">
        <div class="relative">
            <div class="w-full px-4">
                <div class="max-w-xl mb-10">
                <h2 class="font-bold text-black text-3xl mb-4
                sm:tetxt-4xl lg:text-2xl">KOLEKSI</h2>
            </div>
        </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <img src="../img/koleksi 1.svg" alt="batik 1" class="w-full ">
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <img src="../img/koleksi 2.svg" alt="batik 1" class="w-full">
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <img src="../img/koleksi 3.svg" alt="batik 1" class="w-full">
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <img src="../img/koleksi 2.svg" alt="batik 1" class="w-full">
                </div>
            </div>
        </div>
    </section>
    <!-- KOLEKSI END -->


    <!-- RAGAM START -->
    <section id="ragam" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mb-10">
                    <h2 class="font-bold text-black text-3xl mb-4
                    sm:tetxt-4xl lg:text-2xl">RAGAM BATIK</h2>
                    
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overlow-hidden mb-10">
                        <img src="../img/batik 1.svg" alt="batik 1" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#ragam" class="block mb-1 font-bold text-xl text-black
                                hover:text-red-800 truncate">Batik Mendung</a></h3>
                            <p> Surabaya</p>
                            <a href="#ragam"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RAGAM END -->


    <!-- FOOTER START -->
    <footer class="bg-red-900 pt-24 pb-12">
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
    <script src="js/script.js"></script>
</body>
</html> 