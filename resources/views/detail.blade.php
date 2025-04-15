<x-app>
    <x-navbar></x-navbar>
    <section class="pt-32 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $paket->getNama() }}</h1>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            {{ str_repeat('⭐', $paket->getRating()) }}
                        </div>
                        <span class="text-gray-600 ml-2">{{ $paket->getRating() / 5 }}</span>
                    </div>
                    <p class="text-3xl font-bold text-blue-900 mb-4">Rp. {{ number_format($paket->getHarga()) }} / Orang
                    </p>
                    <p class="text-gray-600 mb-6">{{ $paket->getDeskripsi() }}</p>

                    <div class="mb-6">
                        <h3 class="font-semibold text-gray-800 mb-2">Fasilitas</h3>
                        <div class="grid grid-cols-3 gap-2 text-sm">
                            @forelse ($paket->fasilitas as $fasilitas)
                                <span class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-900">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $fasilitas['fasilitas_212396'] }}</span>
                                </span>
                            @empty
                            @endforelse

                        </div>
                    </div>

                    <div class="flex gap-4 mb-8">
                        <a href="/paket"
                            class=" text-center flex-1 bg-blue-900 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                            Lihat Paket Lainnya
                        </a>
                        <x-modal-button id-modal="filter-modal"
                            class="text-center flex-1 border-2 border-blue-900 text-blue-900 py-3 px-6 rounded-lg hover:bg-blue-50 transition duration-300">
                            Beli Sekarang
                        </x-modal-button>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="font-semibold text-gray-800 mb-4">Informasi Lainnya</h3>
                        <div class="space-y-2">
                            <p class="flex justify-between text-sm">
                                <span class="text-gray-600">Kategori</span>
                                <span class="text-gray-800">{{ $paket->kategori['kategori_212396'] }}</span>
                            </p>
                            <p class="flex justify-between text-sm">
                                <span class="text-gray-600">Lama Liburan</span>
                                <span class="text-gray-800">{{ $paket['durasi_212396'] }} Hari</span>
                            </p>
                            <p class="flex justify-between text-sm">
                                <span class="text-gray-600">Lokasi</span>
                                <span class="text-gray-800">{{ $paket['lokasi_212396'] }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Gambar Produk -->
                <div class="md:w-1/2 h-[520px] bg-no-repeat bg-cover bg-center rounded"
                    style="background-image: url('{{ Storage::url($paket->getThumbnail()) }}');">

                </div>
            </div>
        </div>
    </section>
    <section class="py-32 pb-24 container mx-auto px-4 w-full font-semibold space-y-4">
        <div class="text-3xl font-semibold text-gray-800 mb-4">Dokumentasi Kegiatan</div>
        <div class="flex flex-col md:flex-row gap-5 mx-6 overflow-x-scroll">
            @forelse ($paket->galleri as $galleri)
            <a href="{{ Storage::url($galleri['path_212396'])}}" class="">
                <div class="shadow-lg md:w-100 h-90  bg-bottom bg-cover bg-no-repeat  rounded flex flex-col justify-end "
                    style="background-image: url('{{ Storage::url($galleri['path_212396']) }}');">

                </div>
            </a>
            @empty
                <h3>Tak ada data</h3>
            @endforelse
        </div>

    </section>

    <section class="py-32 container mx-auto px-4 w-full font-semibold space-y-4">
        <div class="text-3xl font-semibold text-gray-800 mb-4">Paket Lainnya</div>
        <div class="flex flex-col md:flex-row gap-5 mx-6 overflow-x-auto ">

        @forelse ($pakets as $paket)
            <a href="/detail/{{ $paket->getId() }}" class="">
                <div class="  shadow-lg h-90 md:w-100 bg-bottom bg-cover bg-no-repeat  rounded flex flex-col justify-end "
                    style="background-image: url('{{ Storage::url($paket->getThumbnail()) }}');">
                    <div class="h-40 rounded-t-xl rounded-b bg-white p-3 flex flex-col">
                        <div class="flex items-center">
                            <div class="flex text-yellow-400">
                                {{ str_repeat('⭐', $paket->getRating()) }}
                            </div>
                            <span class="text-gray-600 ml-2">{{ $paket->getRating() / 5 }}</span>
                        </div>
                        <span class="text-lg font-semibold">{{ $paket->getNama() }}</span>
                        <span class="text-sm font-light">{{ Str::limit($paket->getDeskripsi(), 70) }}</span>
                        <span class="text-lg">Rp. {{ number_format($paket->getHarga()) }}</span>
                    </div>
                </div>
            </a>
        @empty
            <h3>Tak ada data</h3>
        @endforelse
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
                                <input type="text" name="name" id="name"
                                    class="p-2 border border-gray-300 rounded-sm">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-gray-900 dark:text-white">Email</label>
                                <input type="text" name="name" id="name"
                                    class="p-2 border border-gray-300 rounded-sm">
                            </div>
                            <div class="flex-1 flex flex-col gap-2">
                                <label for="name" class="text-gray-900 dark:text-white">Nomor Telepon</label>
                                <input type="text" name="name" id="name"
                                    class="p-2 border border-gray-300 rounded-sm">
                            </div>
                            <div class="flex gap-5">
                                <div class="flex flex-col gap-2">
                                    <label for="name" class="text-gray-900 dark:text-white">Jumlah Orang</label>
                                    <div class="flex font-bold">
                                        <button type="button"
                                            class="py-2 px-4 bg-green-500 border border-gray-300 rounded-l-sm"
                                            id="add">+</button>
                                        <span class="py-2 px-8 border border-gray-300 " id="qty">1</span>
                                        <button type="button"
                                            class="py-2 px-4 bg-red-500 border border-gray-300 rounded-r-sm"
                                            id="remove">-</button>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col gap-2">
                                    <label for="name" class="text-gray-900 dark:text-white">Tota Harga</label>
                                    <div id="total" class=" font-semibold  p-2 border border-gray-300 rounded-sm"
                                        id>Rp. {{ number_format($paket['harga_212396'], 0, '.', '.') }}</div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </x-modal-body>
            <x-modal-footer>
                <div class="flex gap-3 ">
                    <button class="px-4 py-2 border bg-blue-900 text-white rounded-lg">Konfirmasi Pembelian</button>
                </div>
            </x-modal-footer>
        </form>
    </x-modal>

    <script type="text/javascript">
        let add = document.getElementById('add')
        let remove = document.getElementById('remove')
        let qty = document.getElementById('qty')
        let total = document.getElementById('total')

        add.addEventListener('click', () => {
            qty.innerHTML = parseInt(qty.innerHTML) + 1
            total.innerHTML =
                `Rp. ${(parseInt(qty.innerHTML) * {{ $paket['harga_212396'] }}).toLocaleString('id-ID')}`
        })

        remove.addEventListener('click', () => {
            if (parseInt(qty.innerHTML) == 1) return

            qty.innerHTML = parseInt(qty.innerHTML) - 1
            total.innerHTML =
                `Rp. ${(parseInt(qty.innerHTML) * {{ $paket['harga_212396'] }}).toLocaleString('id-ID')}`
        })
    </script>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Sh3wGKHVSP3NM6lF"></script>
    @if (session('token'))
        <script type="text/javascript">
            // SnapToken acquired from previous step
            snap.pay('{{ session('token')['snap'] }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */

                    window.location.href = "/checkout/{{ session('token')['id_jadwal'] }}"

                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        </script>
    @endif

</x-app>
