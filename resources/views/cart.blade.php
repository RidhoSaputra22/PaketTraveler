<x-app>
    <x-navbar></x-navbar>
    <section class="py-32 bg-gray-50 ">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Keranjang Belanja</h1>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Daftar Produk -->
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
                        <div class="flex items-center justify-between pb-6 border-b">
                            <h2 class="text-xl font-semibold text-gray-800">Produk</h2>
                            <button class="text-gray-500 hover:text-red-500">Hapus Semua</button>
                        </div>

                        <!-- Item Keranjang -->
                        <div class="py-6 border-b">
                            <div class="flex items-center gap-4">
                                <img src="/api/placeholder/120/120" alt="Vitamin C" class="w-24 h-24 rounded-lg">
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-800">Vitamin C 1000mg</h3>
                                    <p class="text-gray-600 text-sm">Vitamin & Suplemen</p>
                                    <p class="text-blue-600 font-bold mt-2">Rp 75.000</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center">
                                        <button class="bg-gray-200 px-3 py-1 rounded-l-lg hover:bg-gray-300">-</button>
                                        <input type="number" value="1"
                                            class="quantity-input w-16 text-center border-y border-gray-200 py-1 focus:outline-none">
                                        <button class="bg-gray-200 px-3 py-1 rounded-r-lg hover:bg-gray-300">+</button>
                                    </div>
                                    <button class="text-gray-500 hover:text-red-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Item Keranjang Lain (Copy sesuai kebutuhan) -->
                    </div>
                </div>

                <!-- Ringkasan Belanja -->
                <div class="lg:w-1/3">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Ringkasan Belanja</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Total Harga (2 produk)</span>
                                <span class="text-gray-800">Rp 125.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Total Ongkos Kirim</span>
                                <span class="text-gray-800">Rp 12.000</span>
                            </div>
                            <div class="pt-4 border-t">
                                <div class="flex justify-between font-bold">
                                    <span class="text-gray-800">Total Tagihan</span>
                                    <span class="text-blue-600">R
                                        <span class="text-blue-600">Rp 137.000</span>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="/checkout">
                                    <div
                                        class="w-full bg-blue-600 text-center text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                                        Lanjut ke Pembayaran
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footter></x-footter>
</x-app>