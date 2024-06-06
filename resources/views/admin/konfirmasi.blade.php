<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
            <a href="/produk" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-white hover:bg-yellow-600 group">
               <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-gray-900"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
            </a>
         </li>
           <li>
            <a href="/order" class="flex items-center p-2  rounded-lg text-white bg-yellow-600 group">
                 <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                 </svg>
                 <span class="flex-1 ms-3 whitespace-nowrap">Data Pesanan</span>
              </a>
           </li>
          
           <li>
           
           
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

  
  <div class="p-10 sm:ml-64">
    <main class="relative overflow-y-auto mb-10">
      <div class="container py-3 px-6 mx-auto grid">
        <h2 class="mt-6 text-2xl font-semibold text-gray-700">
          Konfirmasi Pesanan
        </h2>
       
        </div>

<form class="px-6 mx-auto"  action="{{ route('order.update', $orders->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
       <!-- Nama -->
    <div class="mb-3">
      <label 
      for="name" 
      class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
        Nama</label>

      <input 
      type="text" 
      id="name" 
      name="name"
      value="{{ old('name', $orders->name) }}"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 
      @error('name') is-invalid @enderror"
      placeholder="Name" 
      required />
      @error('name')
      <div class="alert alert-danger mt-2">
      {{ $message }}
      </div>
      @enderror
    </div>


       <!-- No HP -->
    <div class="mb-5">
      <label 
      for="no_hp" 
      class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
        No Handphone</label>

      <input 
      type="text" 
      id="no_hp" 
      name="no_hp"
      value="{{ old('no_hp', $orders->no_hp) }}"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500
      @error('no_hp') is-invalid @enderror"
      placeholder="No Handphone"
      required />
      @error('no_hp')
      <div class="alert alert-danger mt-2">
      {{ $message }}
      </div>
      @enderror
    </div>


       <!-- Tanggal Pesanan-->
    {{-- <div class="mb-3">
        <label 
        for="tanggal_pesanan" 
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
        Tanggal Pesanan</label>

        <input 
        type="text" 
        id="tanggal_pesanan" 
        name="tanggal_pesanan"
        value="{{ old('tanggal_pesanan', $orders->tanggal_pesanan) }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" 
        
        required />
        
      </div> --}}


       <!-- ID Pesanan -->
      <div class="mb-3">
        <label 
        for="id_pesanan" 
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
        ID Pesanan</label>

        <input 
        type="text" 
        id="order_id" 
        name="order_id"
        value="{{ old('order_id', $orders->order_id) }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500
        @error('order_id') is-invalid @enderror"
        required />
        @error('order_id')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
      </div>


       <!-- Metode Pembayaran -->
      <div class="mb-3">
        <label 
        for="metode_pembayaran" 
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
            Payment</label>

        <input 
        type="text" 
        id="payment" 
        name="payment"
        value="{{ old('payment', $orders->payment) }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500
        @error('payment') is-invalid @enderror"
        placeholder="Payment" 
        required />
        @error('payment')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
      </div>



       <!-- Total Harga-->
      <div class="mb-5">
        <label
         for="total_harga" 
         class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
            Total Harga</label>

        <input 
        type="text" 
        id="total_harga" 
        name="total_harga"
        value="{{ old('total_harga', $orders->total_harga) }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500
        @error('total_harga') is-invalid @enderror"
        placeholder="Total Harga"
        required />
        @error('total_harga')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
      </div>


       <!-- Alamat -->
      <div class="mb-5">
        <label
         for="alamat" 
         class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
            Alamat</label>

        <input 
        type="text" 
        id="alamat" 
        name="alamat"
        value="{{ old('alamat', $orders->alamat) }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500
        @error('alamat') is-invalid @enderror"
        placeholder="Alamat"
        required />
        @error('alamat')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
      </div>


       <!-- Status -->
      <div class="mb-5">
        <label
         for="status" 
         class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
            Status
        </label>

        <select
        type="text" 
        id="status" 
        name="status"
        value="{{ old('status', $orders->status) }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-red-900 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500
        @error('status') is-invalid @enderror"
        placeholder="Status">
        <option>dikemas</option>
        <option>dikirim</option>
        required </select>
        @error('status')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
      </div>

      <!-- VERIFIKASI -->
      <div class="flex justify-end mt-10 mb-10">
        <button
          type="submit"
          class="text-white bg-red-950 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center mb-16 m-2"
        ><i class="fas fa-plus"></i>
          Konfirmasi
        </button>
    </div>
  </form>
 



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-black dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-100 dark:text-black">
            <tr>
                <th scope="col" class="px-16 py-3">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-white dark:border-white hover:bg-gray-50 dark:hover:bg-white">
                <td class="p-4">
                    <img src="/docs/images/products/apple-watch.png" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-black">
                    Apple Watch
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-black">
                    M
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-black">
                   3
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-black">
                    $599
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-black">
                    $599
                </td>
            </tr>
            </tr>
        </tbody>
    </table>
</div>
</div>


<footer>
    <hr />
    <div class="p-8 text-center -z-10">
      <h1>Copyright © 2024 Dwipantara. All rights reserved.</h1>
    </div>
  </footer>

  <script>
    CKEDITOR.replace('description');
</script>

</body>
</html>

