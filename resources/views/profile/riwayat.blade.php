<x-app>
    <x-navbar></x-navbar>
    <section class="h-screen ">
        <div class="p-32 h-full ">
            @if (session('sukses'))
            <div class="p-3 mb-2 bg-green-600 text-white">
                {{session('sukses')}}
            </div>
            @endif
            <div class="border-b-4 border-blue-900 text-black flex print:hidden">
                <a href="/dokter/pending/" class="px-6 py-2 text-white bg-blue-900 w-max">Jadwal Treatment </a>

            </div>
            <form class="w-full flex gap-2 pt-3" method="GET">
                <select name="jenis" id="" class="w-96 border">
                    <option value="semua" {{$request->jenis == 'semua' ? "selected" : ""}}>Semua</option>
                    <option value="pending"  {{$request->jenis == 'pending' ? "selected" : ""}}>Pending</option>
                    <option value="selesai"  {{$request->jenis == 'selesai' ? "selected" : ""}}>Selesai</option>
                </select>
                <div>
                    <button class="p-3 bg-blue-900 text-white">Submit</button>
                </div>
            </form>
            <div class="py-3 flex h-full ">

                <div class="flex-1 flex flex-col gap-3 pr-3 h-full overflow-scroll print:hidden">
                    @forelse ($datas as $index => $data )

                    <a href="?jadwal={{$index}}"
                        class="flex p-5 border border-blue-900 hover:bg-blue-900 hover:text-white {{ ($request->jadwal  == $index) ? 'bg-blue-900 text-white':''}}">
                        <div class="grow">
                            <div class="text-2xl uppercase">{{$data->dokter['nama']}}</div>
                            <div class=" font-light">{{$data['tanggal']}}</div>
                        </div>
                    </a>

                    @empty

                    <div>
                        Tak ada data
                    </div>

                    @endforelse


                </div>
                <div class="w-96 px-5 h-full print:block print:p-0 print:w-full print:border">
                    <div class="h-40 bg-center bg-cover print:h-0"
                        style="background-image: url('{{ URL::asset($datas[$request->jadwal ?? 0]->treatment['foto'] ?? 'null') }}');">

                    </div>
                    <div class="pt-3 px-3 ">
                        <div class="flex flex-col gap-3 w-full text-lg ">
                            <div class="text-2xl">{{$datas[$request->jadwal ?? 0]->dokter['nama'] ?? null}}</div>
                            <div class="text-lg">
                                <div>No Hp</div>
                                <div class="text-sm">{{$datas[$request->jadwal ?? 0]->dokter['hp'] ?? null}}</div>
                            </div>

                            <div class="text-lg">
                                <div>Alamat</div>
                                <div class="text-sm">{{$datas[$request->jadwal ?? 0]->dokter['alamat'] ?? null }}</div>
                            </div>

                            <div class="text-lg">
                                <div>Tanggal</div>
                                <div class="text-sm">{{$datas[$request->jadwal ?? 0]['tanggal_masuk'] ?? null}}</div>
                            </div>

                            <div class="text-lg">
                                <div>Jenis Treatment</div>
                                <div class="text-sm">{{$datas[$request->jadwal ?? 0]->treatment['nama'] ?? null}}</div>
                            </div>
                            <div class="text-lg">
                                <div>Status</div>
                                <div class="text-sm">{{$datas[$request->jadwal ?? 0]['status'] ?? null}}</div>
                            </div>
                            <form class="flex h-full flex-col-reverse pt-5"
                                action="/cancel/{{ $data['id_jadwal'] ?? null }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-900 text-white w-full print:hidden">Batalkan</button>
                                </fo>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</x-app>