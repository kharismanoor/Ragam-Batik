<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah Produk</title>
    <body>
       @vite('resources/css/app.css')
<nav class="fixed top-0 z-50 w-full bg-red-900 border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          
            <img src="../img/logo ragam 2.svg" class="h-8 me-3" alt=" Logo" />
            <span class="self-center text-xl text-white font-semibold sm:text-2xl whitespace-nowrap">Dwipantara</span>
          </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900" role="none">
                    Neil Sims
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate" role="none">
                    neil.sims@flowbite.com
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Earnings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-200 border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-200">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-white hover:bg-yellow-600 group">
                 <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                 </svg>
                 <span class="ms-3">Dashboard</span>
              </a>
           </li>
           <li>
            <a href="/produk" class="flex items-center p-2 rounded-lg text-white bg-yellow-600 group">
               <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
            </a>
         </li>
           <li>
            <a href="/order" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-white hover:bg-yellow-600 group">
                 <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                 </svg>
                 <span class="flex-1 ms-3 whitespace-nowrap">Data Pesanan</span>
              </a>
           </li>
          
      <li>
        <a href="/batik" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-white hover:bg-yellow-600 group">
           <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
              <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
           </svg>
           <span class="flex-1 ms-3 whitespace-nowrap">Data Batik</span>
        </a>
     </li>
           
           
           <li>
            <a href="/logout" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-white hover:bg-yellow-600 group">
               <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
        </ul>
     </div>
  </aside>

<main class="p-10 sm:ml-64">
    <div class="container px-6 mx-auto grid">
      <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Tambah Produk
      </h2>
    </div>
    
    <form class="px-6 mx-auto" action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Foto Profil -->
      <div class="mb-3">
        <label
          for="image_input"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Foto Produk</label
        >
        <input
          type="file"
          id="image"
          name="image"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 @error('title') is-invalid @enderror"
          placeholder="Foto Profil"
          required
        />
        @error('image')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
      </div>

      <!-- Nama -->
      <div class="mb-3">
        <label
          for="title"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Title</label
        >
        <input
          type="text"
          id="title"
          name="title"
          value="{{ old('title') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 @error('title') is-invalid @enderror"
          placeholder="Title"
          required
        />
        @error('title')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label
          for="size"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Size</label
        >
       
        <input
          type="size"
          id="size"
          name="size"
          value="{{ old('size') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 @error('size') is-invalid @enderror"
          placeholder="Size"
          required
        />
        @error('size')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
      </div>
      <!-- Password -->
      <div class="mb-3">
        <label
          for="description"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Description</label
        >
        <input
          type="description"
          id="description"
          name="description"
          value="{{ old('description') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 @error('description') is-invalid @enderror"
          placeholder="Description"
          required
        />
        @error('description')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
      </div>

      <!-- LEVEL -->
      <div class="mb-3">
        <label
          for="price"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Price</label
        >
        <input
          type="price"
          id="price"
          name="price"
          value="{{ old('price') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 @error('price') is-invalid @enderror"
          placeholder="Price"
          required
        />
      </div>

      <!-- LEVEL -->
      <div class="mb-3">
        <label
          for="stock"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Stock</label
        >
        <input
          type="stock"
          id="stock"
          name="stock"
          value="{{ old('stock') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 @error('stock') is-invalid @enderror"
          placeholder="Stock"
          required
        />
        @error('stock')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
      </div>

      <!-- END FORM -->

      <!-- VERIFIKASI -->
      <div class="flex justify-end mt-10 mb-10">
          <button
            type="submit"
            class="text-white bg-red-950 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center mb-16 m-2"
          ><i class="fas fa-plus"></i>
            Tambah
          </button>
      </div>
    </form>
    <footer>
      <hr />
      <div class="p-8 text-center">
        <h1>Copyright © 2023 Dwipantara. All rights reserved.</h1>
      </div>

      <script>
        CKEDITOR.replace('description');
    </script>

<script>
  document.getElementById('add-size').addEventListener('click', function () {
      const sizesDiv = document.getElementById('sizes');
      const newInput = document.createElement('div');
      newInput.classList.add('flex', 'space-x-2');
      newInput.innerHTML = `<input type="text" name="sizes[]" placeholder="Ukuran" class="px-4 py-2 border rounded-lg focus:outline-none">`;
      sizesDiv.appendChild(newInput);
  });
</script>
</body>
</html>