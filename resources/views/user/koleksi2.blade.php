<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')
    <title>Koleksi 2</title>
</head>
<body>

    <!-- HEADER START -->
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10 ">
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
                            <a href="/event" class="text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Events</a> 
                         </li>
                         <li calss="group">
                            <a href="/koleksi" class="text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Koleksi</a> 
                         </li>
                         <li calss="group">
                            <a href="/register" class="text-base text-red-900 py-2 mx-8 flex
                            hover:text-yellow-700">Login</a> 
                         </li>
                    </ul>
                </nav>
               </div> 
            </div>
        </div>
        </header>
    <!-- HEADER END -->

    <!-- KOLEKSI 2 START -->
        <section id="ragam" class="pt-36 w-full bg-white">
            <div class="relative">
                <div class="w-full px-4 mb-10">
                    <div class="  text-sm rounded-xl ">
                        <div class="flex items-start gap-4" action="{{ route('show.koleksi2', ['id' => $products->id]) }}">
                            <img
                              src="{{ asset('storage/posts/'.$products->image) }}"
                              alt=""
                              class=" rounded-lg object-cover"
                            />
                          
                            <div>
                              <h3 class="font-semibold text-black py-2 px-8 text-xl">{{ old('title', $products->title) }}</h3>
                          
                              <p class="font-semibold text-black py-2 px-8 text-xl">
                                {{ old('price', $products->price) }}
                              </p>
                              
                              @php
                                  $sizes = explode(',',$products->size);
                              @endphp
                              @foreach ( $sizes as $size )
                              <div id="sizes" class="flex space-x-4">
                                <button class="size-option px-4 py-2 border rounded-lg focus:outline-none">{{ $size }}</button>
                            </div>
                            @endforeach
                            <p id="selected-size" class="mt-4 text-gray-700"></p>

                              <div class="flex items-center space-x-4">
                                <button id="decrement" class="bg-red-500 text-white px-4 py-1 rounded-lg">-</button>
                                <span id="quantity" class="text-xl">0</span>
                                <button id="increment" class="bg-green-500 text-white px-4 py-1 rounded-lg">+</button>
                            </div>
                           
                          
                                @csrf
                                <a href="/checkout"></a>
                            <div class="mt-4 text-base font-bold text-white bg-red-900 py-2 px-8 rounded-lg ml-auto">
                                <button type="submit" id="add-to-cart">Tambahkan ke Keranjang</button>
                            </div>
                        </form>
                          </div>
                        </div>
                       
        </div>
        </div>
        </div>
        </section>
    <!-- KOLEKSI 2 END -->

    <!-- DESKRISPI START -->
    <section >

</section>
    <!-- DESKRIPSI END -->

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
        document.addEventListener('DOMContentLoaded', function() {
    const quantityElement = document.getElementById('quantity');
    const incrementButton = document.getElementById('increment');
    const decrementButton = document.getElementById('decrement');

    let quantity = 0;

    incrementButton.addEventListener('click', function() {
        quantity++;
        quantityElement.textContent = quantity;
    });

    decrementButton.addEventListener('click', function() {
        if (quantity > 0) {
            quantity--;
        }
        quantityElement.textContent = quantity;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const sizeButtons = document.querySelectorAll('.size-option');
    const selectedSizeDisplay = document.getElementById('selected-size');

    sizeButtons.forEach(button => {
        button.addEventListener('click', function () {
            sizeButtons.forEach(btn => btn.classList.remove('bg-blue-500', 'text-white'));
            this.classList.add('bg-blue-500', 'text-white');
            selectedSizeDisplay.textContent = `Ukuran yang dipilih: ${this.textContent}`;
        });
    });
});
    </script>

    <script>
            $('.add-to-cart').click(function(e) {
                 id_product = {{ $products->id }};
                 qty = $('.qty').val();
                 size = $('.size').val();
                 total_harga = {{ $products->price }} * qty;
                 is_checkout = 0;
    
                 console.log {!! $products !!}

                $.ajax({
                    url: '/add_to_cart',
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },

                   
                    data: {
                        id_user: id_user,
                        id_product: id_product,
                        qty: qty,
                        size: size,
                        total_harga: total_harga,
                        is_checkout: is_checkout,
                    },
                    success: function(data) {
                        window.location.href = '/cart';
                    }
                });
            });
        
        </script>

   
</body>
</html>