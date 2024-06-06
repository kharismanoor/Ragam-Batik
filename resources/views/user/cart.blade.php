<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Keranjang</title>
</head>
<body>
    <!-- HEADER START -->
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex  justify-between ">
              <div class="px-4 py-4">
                <div class="my-auto  w-full flex justify-between">
                    <a href="/koleksi2">
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

    <!-- KERANJANG START -->
    <section id="Event" class="pt-36 pb-10 bg-white">
        <div class="relative">
            <div class="w-full px-4 mb-10">
                <div class="  text-sm rounded-xl ">
                    <div class="flex items-center">
                        &#8203;
                        <input type="checkbox" class="size-4 rounded border-gray-300" id="Option1" />
                    <div class=" mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                        <div class="flex items-center">
                        <img class="mr-5" src="../img/batik 4.svg" alt="">
                        <span class="font-semibold text-black py-2 px-8 text-xl">Blouse Lengan Panjang Ceplok Parang Asri Cream
                        <p class="font-semibold text-black  text-base">M</p>
                        <p class="font-semibold text-black  text-base">Rp 300.000</p>
                        <div>
                            <label for="Quantity" class="sr-only"> Quantity </label>
                          
                            <div class="flex items-center gap-1">
                              <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                &minus;
                              </button>
                          
                              <input
                                type="number"
                                id="Quantity"
                                value="1"
                                class="h-10 w-16 rounded border-gray-500 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                              />
                          
                              <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                &plus;
                              </button>
                            </div>
                          </div>
                        </span>
                </div>
            </div>
        </div>
                  <div class="flex items-center">
                    &#8203;
                    <input type="checkbox" class="size-4 rounded border-gray-300" id="Option1" />
                <div class=" mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
                    <div class="flex items-center">
                    <img class="mr-5" src="../img/batik 4.svg" alt="">
                    <span class="font-semibold text-black py-2 px-8 text-xl">Blouse Lengan Panjang Ceplok Parang Asri Cream
                    <p class="font-semibold text-black  text-base">M</p>
                    <p class="font-semibold text-black  text-base">Rp 300.000</p>
                    <div>
                        <label for="Quantity" class="sr-only"> Quantity </label>
                      
                        <div class="flex items-center gap-1">
                          <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                            &minus;
                          </button>
                      
                          <input
                            type="number"
                            id="Quantity"
                            value="1"
                            class="h-10 w-16 rounded border-gray-500 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                          />
                      
                          <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                            &plus;
                          </button>
                        </div>
                      </div>
                    </span>
            </div>
        </div>
    </div>

    <div class="flex items-center">
        &#8203;
        <input type="checkbox" class="size-4 rounded border-gray-300 "id="Option1" />
    <div class=" mb-5 w-full rounded-[4px] border p-3  hover:outline-none focus:outline-none hover:border-yellow-700 ">
        <div class="flex items-center">
        <img class="mr-5" src="../img/batik 4.svg" alt="">
        <span class="font-semibold text-black py-2 px-8 text-xl">Blouse Lengan Panjang Ceplok Parang Asri Cream
        <p class="font-semibold text-black  text-base">M</p>
        <p class="font-semibold text-black  text-base">Rp 300.000</p>
        
        <div>
            <label for="Quantity" class="sr-only"> Quantity </label>
          
            <div class="flex items-center gap-1">
              <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                &minus;
              </button>
          
              <input
                type="number"
                id="Quantity"
                value="1"
                class="h-10 w-16 rounded border-gray-500 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
              />
          
              <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                &plus;
              </button>
            </div>
          </div>
        </span>

</div>
</div>
</div>
        </div>
    </div>

    <div class="mt-8 flex justify-end border-t border-gray-100 pt-8">
        <div class="w-screen max-w-lg space-y-4">
          <dl class="space-y-0.5 text-sm text-gray-700">
            <div class="flex justify-between">
              <dt>Subtotal</dt>
              <dd>Rp 300.000</dd>
            </div>

            <div class="flex justify-between">
              <dt>Discount</dt>
              <dd>-Rp 100.000</dd>
            </div>

            <div class="flex justify-between !text-base font-medium">
              <dt>Total</dt>
              <dd>Rp 200.000</dd>
            </div>
          </dl>

         

          <div class="flex justify-end">
            <a
              href="/checkout"
              class="block rounded bg-red-900 px-5 py-3 text-sm text-gray-100 transition hover:bg-yellow-700"
            >
              Checkout
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </section>
    <!-- KERANJANG END -->

    <script src="../js/script.js"></script>
</body>
</html>