 <!-- Navbar -->
 <nav class="bg-white shadow-lg fixed w-full z-50 print:hidden" >
     <div class=" px-14">
         <div class="flex justify-between">
             <div class="flex space-x-7">
                 <div class="flex items-center pt-2 pb-4">
                     <span class="font-regular text-2xl text-black font-semibold italic underline">Pesona Travel </span>
                 </div>
             </div>
             <div class="hidden md:flex items-center gap-14">
                 <a href="/"
                     class=" text-black hover:underline transition duration-300">Beranda</a>
                 <a href="/paket-travel"
                     class=" text-black hover:underline transition duration-300">Paket Travel</a>
                 <a href="/login"
                     class=" text-black bg-blue-900 hover:bg-blue-50 transition duration-300  rounded-sm py-1 px-5 text-white">Login</a>


                 {{-- @if (Auth::check() || Auth::guard('dokter')->check())
                 <a href="/profile/riwayat"
                     class=" text-gray-900 hover:text-blue-900 transition duration-300">Riwayat</a>
                 <a href="/logout" class="my-4 py-2 px-3 bg-blue-900 text-white">Logout</a>
                 @else
                 <a href="/login" class="my-4 py-2 px-3 bg-blue-900 rounded-s-sm text-white">Login</a>
                 @endif --}}
             </div>
         </div>
     </div>
 </nav>
