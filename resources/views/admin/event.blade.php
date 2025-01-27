<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
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
            <a href="/produk" class="flex items-center p-2 rounded-lg hover:text-white hover:bg-yellow-600 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
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
        <a href="/event" class="flex items-center p-2  rounded-lg text-white bg-yellow-600 group">
           <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
              <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
           </svg>
           <span class="flex-1 ms-3 whitespace-nowrap">Data Event</span>
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
        
          <div class="p-10 sm:ml-64">
          <main class="relative overflow-y-auto mb-10">
            <div class="container px-6 mx-auto grid">
              <h2 class="mt-6 text-2xl font-semibold text-gray-700">
                Event
              </h2>
             
              <div class="flex justify-end mb-5">
               
                <a
                  href="{{ route('event.create') }}"
                  class="text-white bg-red-900 hover:bg-yellow-600 font-medium rounded-lg text-sm px-3 py-2 text-center mb-2 items-center w-40"
                >
                  Tambah Event
                </a>
              </div>
              <div class="w-full rounded-lg shadow-xs" >
                <div class="w-full">
                  <table class="w-full min-w-full stripe hover" id="example">
                    <thead>
                      <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-100"
                      > 
                        <th class="px-6 py-3 text-center">ID</th>
                        <th class="px-6 py-3 text-center">Title</th>
                        <th class="px-6 py-3 text-center">Tanggal</th>
                        <th class="px-6 py-3 text-center">Lokasi</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                      </tr>
                    </thead>
                <tbody>
                    @foreach ($events as $event)
                      <tr class="text-gray-700" id="myTable">
                        <!-- Nomer -->
                        <td class="px-6 py-3 text-sm text-center">{{ $event->id }}</td>
                        <!-- Nama & Prodi -->
                        <td class="px-6 py-3 text-sm text-center">{{ $event->nama_event }}</td>
                        <!-- Email -->
                        <td class="px-6 py-3 text-sm text-center">{{ $event->pelaksanaan }}</td>
        
                        <!-- Level -->
                        <td class="px-6 py-3 text-sm text-center">{{ $event->lokasi }}</td>
                      
        
                        <!-- Aksi -->
                        <td class="px-4 py-3 text-xs text-center">
                          <form  action="{{ route('event.destroy', $event->id) }}" method="POST">
                          <a
                          href="{{ route('event.edit', $event->id) }}"
                            class="text-white bg-blue-800 hover:bg-blue-300 hover:text-yellow-800 font-medium rounded-lg text-sm px-5 py-2 text-center mb-2 items-center w-40 m-2"
                          ><i class="fas fa-edit"> 
                        </i> Edit
                          </a>
                          @csrf
                          @method('DELETE')
                          <button
                           class=" text-white bg-red-700 hover:bg-red-300 hover:text-red-600 font-medium rounded-lg text-sm px-5 py-2 text-center mb-2 items-center w-40 m-2"
                          >Hapus 
                        </button>
                      </form>
                        </td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </main>
          <footer>
            <hr />
            <div class="p-8 text-center -z-10">
              <h1>Copyright © 2024 Dwipantara. All rights reserved.</h1>
            </div>
          </footer>
        </div>
        </div>
        </div>
        
        <!-- JavaScript -->
        <script>
        function editFunction($id, $nama, $email, $password, $level, $foto) {
          console.log("Tombol Edit Diklik");
          window.location.href = "adminedit.php";
          
        }
        
        function hapusFunction() {
          console.log("Tombol Hapus Diklik");
          // Hapus
          var confirmDelete = confirm("Apakah Anda yakin ingin menghapus?");
          if (confirmDelete) {
            // Hapus baris tabel saat konfirmasi diterima
            window.location.href = "hapus.php";
            var row = document.getElementById("myTable").deleteRow(-1);
            console.log("Data dihapus dari tabel.");
           
          }
        
        }
        
        <script>
                //message with toastr
                @if(session()->has('success'))
                
                    toastr.success('{{ session('success') }}', 'BERHASIL!'); 
        
                @elseif(session()->has('error'))
        
                    toastr.error('{{ session('error') }}', 'GAGAL!'); 
                    
                @endif
            </script>


</body>
</html>
  
  
  