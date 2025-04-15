<x-app>
    <div class="flex min-h-screen">

        <div class="w-full">
            <x-navbar></x-navbar>

            <div class=" py-14 gap-3">
                <div class="h-auto p-14 w-full flex gap-9">
                    <div class="h-70  aspect-square border bg-cover rounded-full"
                        style="background-image: url('{{ Storage::url($user['foto_212396']) }}')"></div>
                    <div class="grow w-full mt-14">
                        <div class="text-5xl uppercase font-semibold">{{ $user['nama_212396'] }}</div>
                        <div class="text-lg font-light italic">{{ $user['email_212396'] }}<span></span></div>

                    </div>
                </div>

                <div class="h-auto w-full p-14">
                    <div class="pb-2 border-b-2 text-xl">Account Setting</div>
                    <div>
                        <div>
                            <form action="/updateUser" method="POST" class="p-5 flex flex-col gap-5"
                                enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <p>Nama Anda</p>
                                    <input type="text" name="nama" value="{{ $user['nama_212396'] }}"
                                        class=" w-full mt-1 rounded-sm">
                                </div>
                                <div>
                                    <p>Email</p>
                                    <input type="email" name="email" value="{{ $user['email_212396'] }}"
                                        class=" w-full mt-1 rounded-sm">
                                </div>
                                <div>
                                    <p>Hp</p>
                                    <input type="text" name="hp" value="{{ $user['hp_212396'] }}"
                                        class=" w-full mt-1 rounded-sm">
                                </div>
                                <div>
                                    <p>Change Password</p>
                                    <input type="text" name="password" class=" w-full mt-1 rounded-sm">
                                </div>
                                <div>
                                    <button type="submit" class="px-3 py-1 bg-green-400 rounded-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="h-auto w-full p-14">
                    <div class="pb-2 border-b-2 text-xl">Riwayat Pemesanan</div>
                    <div>
                        @forelse ($user->transaksi as $orderItem )
                        <div class="group mb-6 last:mb-0">
                            <div
                                class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-6 p-4 rounded-lg hover:bg-gray-50 transition duration-300">
                                <!-- Product Image -->
                                <div class="relative w-full md:w-32 h-32 rounded-lg overflow-hidden">
                                    <img src="{{ Storage::url($orderItem->paket['thumbnail_212396']) }}" alt="Product"
                                        class="w-full h-full object-cover transform transition duration-300 group-hover:scale-110">
                                    {{-- <div class="absolute inset-0 bg-black bg-opacity-10"></div> --}}
                                </div>

                                <!-- Product Details -->
                                <div class="flex-1">
                                    <a href="/detail/{{ $orderItem->paket['id_paket_212396'] }}"
                                        class="block group-hover:text-blue-600 transition duration-300">
                                        <h4 class="text-lg font-semibold mb-2">
                                            {{ $orderItem->paket['nama_212396'] }}</h4>
                                    </a>
                                    <div class="flex flex-wrap items-center gap-4 text-lg text-gray-600 mb-3">
                                        <span class="flex items-center">
                                            <i class="fas fa-tag mr-2"></i>
                                            Rp {{ number_format($orderItem->paket['harga_212396']) }}
                                        </span>
                                    </div>

                                    <!-- Delivery Status Timeline -->
                                    <div class="mt-4">
                                        <div class="flex items-center">
                                            <span class="text-sm font-medium text-gray-700">Status Pembelian:</span>
                                            <span
                                                class="ml-2 px-3 py-1 rounded-full text-sm font-medium
                                            {{ $orderItem['status_212396'] ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-600' }}">
                                                <i
                                                    class="fas {{ $orderItem['status_212396'] ? 'fa-shipping-fast' : 'fa-clock' }} mr-1"></i>
                                                {{ $orderItem['status_212396'] ?? 'Menunggu Pemrosesan' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
