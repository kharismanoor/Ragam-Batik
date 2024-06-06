<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')
    <title>Koleksi</title>
</head>
<body>
<!-- HEADER START -->
<header class="bg-red-900 absolute top-0 left-0 w-full flex items-center z-10">
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

<!-- KOLEKSI START -->
<section class="pt-36 pb-32">
    <div class="mx-auto max-w-screen-xl px-4 py-8 ">
      <div class="mt-8">
        <p class="text-sm text-gray-500">Showing <span> 4 </span> of 40</p>
      </div>
      
      <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($products as $product)
        <li>
          <a href="{{ route('show.koleksi2', ['id' => $product->id]) }}" class="group block overflow-hidden">
            <img
              src="{{ asset('storage/posts/'.$product->image) }}"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
            />
            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                {{ $product->title }}
              </h3>
              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>
                <span class="tracking-wider text-gray-900"> {{ $product->price }} </span>
              </p>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
      
      </div>
    

   
      <ol class="mt-8 flex justify-center gap-1 text-xs font-medium">
        <li>
          <a
            href="#"
            class="inline-flex size-8 items-center justify-center rounded border border-gray-100"
          >
            <span class="sr-only">Prev Page</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-3 w-3"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </li>
  
        <li>
          <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
            1
          </a>
        </li>
  
        <li class="block size-8 rounded border-black bg-black text-center leading-8 text-white">2</li>
  
        <li>
          <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
            3
          </a>
        </li>
  
        <li>
          <a href="#" class="block size-8 rounded border border-gray-100 text-center leading-8">
            4
          </a>
        </li>
  
        <li>
          <a
            href="#"
            class="inline-flex size-8 items-center justify-center rounded border border-gray-100"
          >
            <span class="sr-only">Next Page</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-3 w-3"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </li>
      </ol>
    </div>
   
  </section>
 
<!-- KOLEKSI END -->

<!-- FOOTER START-->
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
</footer>
<!-- FOOTER END -->

    <script src="../public/js/script.js"></script>
    @stack('js')
</body>
</html>