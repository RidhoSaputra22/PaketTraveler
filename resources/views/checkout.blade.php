<x-app>
    <x-navbar></x-navbar>
    <section class="py-32 bg-gray-50 ">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Checkout</h1>

            <div class="flex flex-col lg:flex-row gap-8">
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Alamat Pengiriman</h2>
                        <form class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2">Nama Depan</label>
                                    <input type="text"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2">Nama Belakang</label>
                                    <input type="text"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2">Nomor Telepon</label>
                                <input type="tel"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-gray-700 text-sm font-medium mb-2">Alamat Lengkap</label>
                                <textarea rows="3"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2">Kota</label>
                                    <select
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option>Pilih Kota</option>
                                        <option>Jakarta</option>
                                        <option>Surabaya</option>
                                        <option>Bandung</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-medium mb-2">Kode Pos</label>
                                    <input type="text"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Metode Pengiriman</h2>
                        <div class="space-y-4">
                            <div class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-blue-500">
                                <input type="radio" name="shipping" class="w-4 h-4 text-blue-600" checked>
                                <div class="ml-4 flex-1">
                                    <div class="flex justify-between">
                                        <span class="font-medium text-gray-800">JNE Regular</span>
                                        <span class="font-medium text-gray-800">Rp 12.000</span>
                                    </div>
                                    <p class="text-sm text-gray-600">Estimasi 2-3 hari</p>
                                </div>
                            </div>
                            <div class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-blue-500">
                                <input type="radio" name="shipping" class="w-4 h-4 text-blue-600">
                                <div class="ml-4 flex-1">
                                    <div class="flex justify-between">
                                        <span class="font-medium text-gray-800">JNE Express</span>
                                        <span class="font-medium text-gray-800">Rp 20.000</span>
                                    </div>
                                    <p class="text-sm text-gray-600">Estimasi 1 hari</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Metode Pembayaran</h2>
                        <div class="space-y-4">
                            <div class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-blue-500">
                                <input type="radio" name="payment" class="w-4 h-4 text-blue-600" checked>
                                <div class="ml-4">
                                    <span class="font-medium text-gray-800">Transfer Bank</span>
                                </div>
                            </div>
                            <div class="flex items-center p-4 border rounded-lg cursor-pointer hover:border-blue-500">
                                <input type="radio" name="payment" class="w-4 h-4 text-blue-600">
                                <div class="ml-4">
                                    <span class="font-medium text-gray-800">E-Wallet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Ringkasan Pesanan</h2>

                        <div class="space-y-4 mb-6">
                            <div class="flex gap-4">
                                <img src="/api/placeholder/80/80" alt="Vitamin C" class="w-20 h-20 rounded-lg">
                                <div>
                                    <h3 class="font-medium text-gray-800">Vitamin C 1000mg</h3>
                                    <p class="text-gray-600 text-sm">1 x Rp 75.000</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <img src="/api/placeholder/80/80" alt="Masker" class="w-20 h-20 rounded-lg">
                                <div>
                                    <h3 class="font-medium text-gray-800">Masker Medis</h3>
                                    <p class="text-gray-600 text-sm">1 x Rp 50.000</p>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4 pt-6 border-t">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="text-gray-800">Rp 125.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Ongkos Kirim</span>
                                <span class="text-gray-800">Rp 12.000</span>
                            </div>
                            <div class="pt-4 border-t">
                                <div class="flex justify-between font-bold">
                                    <span class="text-gray-800">Total</span>
                                    <span class="text-blue-600">Rp 137.000</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="/">
                                <div
                                    class="w-full bg-blue-600 text-center text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                                    Bayar Sekarang
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footter></x-footter>
</x-app>