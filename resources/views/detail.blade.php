<x-app>
    <x-navbar></x-navbar>
    <section class="py-32 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">Lorem, ipsum dolor.</h1>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐
                        </div>
                        <span class="text-gray-600 ml-2">(150 ulasan)</span>
                    </div>
                    <p class="text-3xl font-bold text-blue-900 mb-4">Rp 75.000</p>
                    <p class="text-gray-600 mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda,
                        tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, obcaecati!.</p>

                    <div class="mb-6">
                        <h3 class="font-semibold text-gray-800 mb-2">Fasilitas</h3>
                        <div class="grid grid-cols-3 gap-2 text-sm">
                            <span class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-900">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </span>
                            <span class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-900">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </span>
                            <span class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-900">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </span>
                            <span class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-900">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet.</span>
                            </span>
                        </div>
                    </div>

                    <div class="flex gap-4 mb-8">
                        <a href="cart.php"
                            class=" text-center flex-1 bg-blue-900 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                            Tambah ke Keranjang
                        </a>
                        <x-modal-button id-modal="filter-modal" class="text-center flex-1 border-2 border-blue-900 text-blue-900 py-3 px-6 rounded-lg hover:bg-blue-50 transition duration-300">
                            Beli Sekarang
                        </x-modal-button>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="font-semibold text-gray-800 mb-4">Informasi Produk</h3>
                        <div class="space-y-2">
                            <p class="flex justify-between text-sm">
                                <span class="text-gray-600">Kategori</span>
                                <span class="text-gray-800">Vitamin & Suplemen</span>
                            </p>
                            <p class="flex justify-between text-sm">
                                <span class="text-gray-600">Lama Liburan</span>
                                <span class="text-gray-800">3 hari</span>
                            </p>
                            <p class="flex justify-between text-sm">
                                <span class="text-gray-600">Stok</span>
                                <span class="text-gray-800">50 pcs</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Gambar Produk -->
                <div class="md:w-1/2">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <img src="{{ URL::asset('images/banner-1.jpg') }}" alt="Vitamin C" class="w-full rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <x-modal id-modal="filter-modal">
        <form>
            <x-modal-header id-modal="filter-modal">
                <h3 class=" text-xl text-gray-900 dark:text-white">
                    Isi Formulir Berikut
                </h3>
            </x-modal-header>
            <x-modal-body>
                <div class="w-[1000px] min-h-[200px] ">
                    <form action="">
                        <div class="flex flex-col gap-2">
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-gray-900 dark:text-white">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded-sm">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-gray-900 dark:text-white">Email</label>
                                <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded-sm">
                            </div>
                            <div class="flex-1 flex flex-col gap-2">
                                <label for="name" class="text-gray-900 dark:text-white">Nomor Telepon</label>
                                <input type="text" name="name" id="name" class="p-2 border border-gray-300 rounded-sm">
                            </div>
                            <div class="flex gap-5">
                                <div class="flex flex-col gap-2">
                                    <label for="name" class="text-gray-900 dark:text-white">Jumlah Orang</label>
                                    <div class="flex font-bold">
                                        <button type="button" class="py-2 px-4 bg-green-500 border border-gray-300 rounded-l-sm">+</button>
                                        <span class="py-2 px-8 border border-gray-300 bg-gray-200 ">1</span>
                                        <button type="button" class="py-2 px-4 bg-red-500 border border-gray-300 rounded-r-sm">-</button>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col gap-2">
                                    <label for="name" class="text-gray-900 dark:text-white">Tota Harga</label>
                                    <span class=" font-bold italic p-2 border bg-gray-200 border-gray-300 rounded-sm">Rp. 100,000</span>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </x-modal-body>
            <x-modal-footer>
                <div class="flex gap-3 ">
                    <button class="px-4 py-2 border bg-blue-900 text-white rounded-sm">Konfirmasi Pembelian</button>
                </div>
            </x-modal-footer>
        </form>
    </x-modal>



</x-app>
