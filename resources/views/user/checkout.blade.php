<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Check Out</title>
</head>
<body>
    <!-- HEADER START -->
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex  justify-between ">
              <div class="px-4 py-4">
                <div class="my-auto  w-full flex justify-between">
                    <a href="/keranjang">
                    <div class="bg-white p-3 rounded-full bg-opacity-80 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                          </svg>  
                        </div>
                    </a>
                    <h1 class="text-red-900 font-semibold text-center">Keranjang</h1>
                </div>
            </div>
            </div>
        </div>
        </div>
        </header>
    <!-- HEADER END -->

    <!-- CHECK OUT START -->
    <section id="Event" class="pt-36 pb-10 bg-red-900">
        <div class="relative">
            <div class="w-full px-4 mb-10">
                <div class="  text-sm rounded-xl ">
                    <form action="/checkout" method="POST" class="bg-white p-6 rounded shadow-md">
                        @csrf
                    <div class="border-red bg-white mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                        <span class="font-semibold text-black py-2 px-8 text-base"  placeholder="Foto Profil"></span>
                    </div>

                    <div class="border-red bg-white mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                        <div class="flex items-center">
                        <img class="mr-5" src="../img/batik 4.svg" alt="">
                        <span class="font-semibold text-black py-2 px-8 text-xl">{{ $product->title}}
                        <p class="font-semibold text-black  text-base">{{ $product->size }}</p>
                        <p class="font-semibold text-black  text-base">{{ $product->price }}</p>
                        </span>
                       
                </div>
                </div>

                    <div class="border-red bg-white mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                        <span class="font-semibold text-black py-2 px-8 text-base">Notes</span>
                    </div>

                    <div class="border-red bg-white mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                        <span class="font-semibold text-black py-2 px-8 text-base">Metode Pembayaran</span>
                    </div>
                    
                    <div class="border-red bg-white mb-5 w-full flex items-center rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                        <h1 class="font-semibold text-black py-2 px-8 text-base">Sub Total Produk
                            <p class="font-semibold text-black  text-base">Biaya Pengiriman</p>
                        </h1>
                        <h2 class="font-semibold text-black py-2 px-8 text-base ml-auto">Rp 300.00
                            <p class="font-semibold text-black text-base ml-auto">Rp 3.000</p>
                        </h2>
                    </div>
                    <a href=" " class="text-base font-semibold text-white bg-red-900 mr-4 mb-6 mt-4 ml-4 py-2 px-6 rounded-lg">
                       Pesan
                    </a>
                    <div class="py-2"></div>
                  </div>
                </div>
               
        </div>
    </div>
    <!-- CHECH OUT END -->

    <script src="../js/script.js"></script>
</body>
</html>