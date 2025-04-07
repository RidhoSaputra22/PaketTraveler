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
                 <a href="/#beranda"
                     class=" text-black hover:underline transition duration-300">Beranda</a>
                 <a href="/#layanan"
                     class=" text-black hover:underline transition duration-300">Layanan</a>
                 <a href="/#dokter"
                     class=" text-black hover:shadow transition duration-300 bg-[#0C1B44FF] rounded-sm py-1 px-3 text-white">Login</a>


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
