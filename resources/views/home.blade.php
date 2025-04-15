<x-app>
    <x-navbar></x-navbar>
    <section class="min-h-[110vh] rounded-b-3xl  bg-no-repeat bg-cover"
        style="background-image: url('{{ URL::asset('images/banner-1.jpg') }}');">

        <div class="absolute h-[110vh] rounded-b-3xl w-full bg-black opacity-[60%]">

        </div>
        <div class="flex absolute">
            <div class=" h-full flex flex-col py-50 pl-14  text-white z-10 gap-5 w-full">
                <div class="text-8xl tracking-[3px] font-semibold font-serif">Jelajahi Keindahan Dunia!</div>

                <div class="text-lg italic pt-3">Pesona Travel adalah solusi perjalanan pintar untuk kamu yang ingin
                    jalan-jalan tanpa ribet. Kami menyediakan paket traveler lengkap – dari tiket, penginapan, hingga
                    itinerary personal yang bisa disesuaikan. Nikmati liburan impianmu dengan harga hemat dan layanan
                    terbaik!</div>

            </div>
            <div class="py-32 px-5 w-[80%] flex gap-5">
                <div>
                    <div class="shadow-lg h-[520px] w-[320px] rounded bg-white bg-cover bg-center "
                        style="background-image: url('{{ URL::asset('images/banner-2.jpg') }}');">
                        <div class="rounded h-full w-full bg-black opacity-[20%]"></div>

                    </div>
                </div>
                <div class="flex-col space-y-5">
                    <div class="shadow-lg h-[220px] w-[320px] bg-cover bg-center rounded bg-white"
                        style="background-image: url('{{ URL::asset('images/banner-3.jpg') }}');">
                    </div>
                    <div class="shadow-lg h-[320px] w-[320px] bg-cover bg-center rounded bg-white"
                        style="background-image: url('{{ URL::asset('images/banner-4.jpg') }}');">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="min-h-36 px-32 pt-9" id="cari">
        <form action="#cari" method="get">
            <div class="flex h-36 border shadow-lg px-14">
                <div class="bg-white h-full flex-1 flex items-center px-5 gap-5  ">
                    <div class="w-full">
                        <div>Pilih Destinasi</div>
                        <select name="lokasi" id="" class="w-full rounded p-1"  >
                            <option value="">Semua Lokasi</option>
                            @forelse ($lokasis as $lokasi => $paket)
                                <option value="{{ $lokasi }}" {{ $request->lokasi == $lokasi ? 'selected' : '' }}>{{ $lokasi }}</option>
                            @empty
                            @endforelse

                        </select>
                    </div>
                </div>
                <div class="bg-white h-full flex-1 flex items-center px-5 gap-5 border-white-900 border-r-2">

                    <div class="w-full">
                        <div>Pilih Durasi Keberangkatan</div>
                        <select name="durasi" id="" class="w-full rounded p-1"  >
                            <option value="">Semua Durasi</option>
                            @forelse ($durasis as $durasi => $paket)
                                <option value="{{ $durasi }}" {{ $request->durasi == $durasi ? 'selected' : '' }}>{{ $durasi }} Hari</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="bg-white h-full flex-1 flex items-center px-5 gap-5 border-white-900 border-r-2">

                    <div class="w-full">
                        <div>Pilih Kategori Paket</div>
                        <select name="kategori" id="" class="w-full rounded p-1"  >
                            <option value="">Semua Kategori</option>
                            @forelse ($kategoris as $kategori)
                                <option value="{{ $kategori['id_kategori_212396'] }}" {{ $request->kategori == $kategori['id_kategori_212396'] ? 'selected' : '' }}>{{ $kategori['kategori_212396'] }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="bg-white h-full flex-1 flex items-center px-5 pt-3  border-r-2">
                    <button type="submit" class="w-full bg-blue-900 text-white px-5 py-2">Cari Destinasi</button>

                </div>

            </div>

        </form>
    </section>
    <section class="min-h-screen px-36 py-10">
        <div class="w-full h-full p-10">
            <div class="w-full h-auto flex pb-5 ">
                <div class="text-xl flex-1">Destinasi Populer</div>
                <form action="/paket" method="get" class="w-1/4 flex gap-3">
                    <input type="text" name="search" class="p-1 rounded-sm border border-black  w-full " required>
                    <button class="px-5 py-1 rounded-sm bg-blue-900 text-white">Cari</button>
                </form>
            </div>
            <div>
                <div class="grid grid-cols-4 gap-3">
                    @forelse ($pakets as $paket)
                        <a href="/detail/{{ $paket->getId() }}" class="">
                            <div class="  shadow-lg w-full h-90 bg-bottom bg-cover bg-no-repeat  rounded flex flex-col justify-end "
                                style="background-image: url('{{ Storage::url($paket->getThumbnail()) }}');">
                                <div class="h-40 rounded-t-xl rounded-b bg-white p-3 flex flex-col">
                                    <div class="flex items-center">
                                        <div class="flex text-yellow-400">
                                            {{ str_repeat('⭐', $paket->getRating()) }}
                                        </div>
                                        <span class="text-gray-600 ml-2">{{ $paket->getRating() / 5 }}</span>
                                    </div>
                                    <span class="text-lg font-semibold">{{ $paket->getNama() }}</span>
                                    <span
                                        class="text-sm font-light">{{ Str::limit($paket->getDeskripsi(), 70) }}</span>
                                    <span class="text-lg">Rp. {{ number_format($paket->getHarga()) }}</span>
                                </div>
                            </div>
                        </a>

                    @empty
                        <h3>Tak ada data</h3>
                    @endforelse

                </div>

            </div>

        </div>
    </section>
    <x-footter></x-footter>



</x-app>
