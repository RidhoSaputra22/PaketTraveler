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
    <section class="min-h-36 px-32 pt-9 ">
        <div class="flex h-36 border shadow-lg px-14">
            <div class="bg-white h-full flex-1 flex items-center px-5 gap-5  ">

                <div class="w-full">
                    <div>Pilih Destinasi</div>
                    <select name="destinasi" id="" class="w-full rounded p-1">
                        <option value="destinasi">Destinasi 1</option>
                        <option value="destinasi">Destinasi 2</option>
                        <option value="destinasi">Destinasi 3</option>
                    </select>
                </div>
            </div>
            <div class="bg-white h-full flex-1 flex items-center px-5 gap-5 border-white-900 border-r-2">

                <div class="w-full">
                    <div>Pilih Destinasi</div>
                    <select name="destinasi" id="" class="w-full rounded p-1">
                        <option value="destinasi">Destinasi 1</option>
                        <option value="destinasi">Destinasi 2</option>
                        <option value="destinasi">Destinasi 3</option>
                    </select>
                </div>
            </div>
            <div class="bg-white h-full flex-1 flex items-center px-5 gap-5 border-white-900 border-r-2">

                <div class="w-full">
                    <div>Pilih Destinasi</div>
                    <select name="destinasi" id="" class="w-full rounded p-1">
                        <option value="destinasi">Destinasi 1</option>
                        <option value="destinasi">Destinasi 2</option>
                        <option value="destinasi">Destinasi 3</option>
                    </select>
                </div>
            </div>
            <div class="bg-white h-full flex-1 flex items-center px-5 pt-3  border-r-2">
                <button class="w-full bg-blue-900 text-white px-5 py-2">Cari Destinasi</button>

            </div>

        </div>
    </section>
    <section class="min-h-screen px-36 py-10">
        <div class="w-full h-full p-10">
            <div class="w-full h-auto flex pb-5 ">
                <div class="text-xl flex-1">Destinasi Populer</div>
                <div class="w-1/4 flex gap-3">
                    <input type="text" class="p-1 rounded-sm border border-black  w-full ">
                    <button class="px-5 py-1 rounded-sm bg-blue-900 text-white">Cari</button>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-4 gap-3">
                    <a href="/detail" class="">
                        <div class="  shadow-lg w-full h-90 bg-cover bg-center rounded flex flex-col justify-end "
                            style="background-image: url('{{ URL::asset('images/banner-3.jpg') }}');">
                            <div class="h-36 rounded-t-xl rounded-b bg-white p-3 flex flex-col">
                                <span>⭐⭐⭐⭐</span>
                                <span class="text-lg font-semibold">Lorem, ipsum dolor.</span>
                                <span class="text-sm font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Placeat, exercitationem.</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="  shadow-lg w-full h-90 bg-cover bg-center rounded flex flex-col justify-end "
                            style="background-image: url('{{ URL::asset('images/banner-3.jpg') }}');">
                            <div class="h-36 rounded-t-xl rounded-b bg-white p-3 flex flex-col">
                                <span>⭐⭐⭐⭐</span>
                                <span class="text-lg font-semibold">Lorem, ipsum dolor.</span>
                                <span class="text-sm font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Placeat, exercitationem.</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="  shadow-lg w-full h-90 bg-cover bg-center rounded flex flex-col justify-end "
                            style="background-image: url('{{ URL::asset('images/banner-1.jpg') }}');">
                            <div class="h-36 rounded-t-xl rounded-b bg-white p-3 flex flex-col">
                                <span>⭐⭐⭐⭐</span>
                                <span class="text-lg font-semibold">Lorem, ipsum dolor.</span>
                                <span class="text-sm font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Placeat, exercitationem.</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="  shadow-lg w-full h-90 bg-cover bg-center rounded flex flex-col justify-end "
                            style="background-image: url('{{ URL::asset('images/banner-2.jpg') }}');">
                            <div class="h-36 rounded-t-xl rounded-b bg-white p-3 flex flex-col">
                                <span>⭐⭐⭐⭐</span>
                                <span class="text-lg font-semibold">Lorem, ipsum dolor.</span>
                                <span class="text-sm font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Placeat, exercitationem.</span>
                            </div>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </section>
    <x-footter></x-footter>

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
