<x-admin-app>
    <section class="w-full print:w-full print:m-0 print:p-0 print:text-sm">

        @if (session('sukses'))
            <div class="h-14 w-full bg-green-400 my-2 p-4 ">
                {{ session('sukses') }}
            </div>
        @endif

        <div class="flex gap-3 items-center py-3 print:hidden">

            <button onclick="print()" class="print:hidden">
                <div class="border bg-slate-600 text-white font-medium px-4 py-2">
                    Print Data
                </div>
            </button>

            <div class=" border bg-slate-600 text-white font-medium print:hidden">

                <x-modal-button id-modal="filter-modal" class="px-4 py-2">
                    Filter
                </x-modal-button>
            </div>
        </div>


        <div class="m-5">
            <div class=" print:block pb-5 ">
                <h1 class="text-3xl">Laporan Tugas Harian</h1>
                @if ($request->pilihan != '')
                <div class="" >{{ $start->format('d F Y') ?? '' }} - {{ $end->format('d F Y') ?? ''  }}</div>
                @endif
            </div>
            <table id="pegawaiTable" class="display w-full border border-black">
                <thead>
                    <tr class="border border-black">
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Judul Tugas</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php

                    @endphp
                    @foreach ($datas as $index => $data)
                        <tr class="border border-black text-center">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data['created_at'] }}</td>
                            <td>
                                <div class="h-10 aspect-square bg-center bg-cover"
                                    style="background-image: url('{{ URL::asset($data->foto) }}')"></div>
                            </td>
                            <td>{{ $data['judul'] }}</td>
                            <td>{{ $data->pegawai['nama'] ?? "-" }}</td>
                            <td>{{ $data->pegawai['email'] ?? "-"}}</td>
                            <td>{{ $data->pegawai->departement['departement'] ?? "-" }}</td>
                            <td>{{ $data->status }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class=" print:block py-5 ">
                <h1 class="text-3xl">Total Keseluruhan</h1>

            </div>
            <table  class="display w-32 ">
                <thead>
                    <tr class="">
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Revisi</td>
                        <td>:</td>
                        <td>{{$datas->where('status', 'revisi')->count()}}</td>
                    </tr>
                    <tr>
                        <td>Review</td>
                        <td>:</td>
                        <td>{{$datas->where('status', 'review')->count()}}</td>

                    </tr>
                    <tr>
                        <td>Submited</td>
                        <td>:</td>
                        <td>{{$datas->where('status', 'submited')->count()}}</td>

                    </tr>
                    <tr>
                        <td>Selesai</td>
                        <td>:</td>
                        <td>{{$datas->where('status', 'selesai')->count()}}</td>
                    </tr>

                </tbody>
            </table>

            <h1 class="pt-5">Dicetak Pada: {{ now()->format('d F Y') }}</h1>
        </div>




        <x-modal id-modal="filter-modal">
            <form>

                <x-modal-header id-modal="filter-modal">
                    <h3 class=" uppercase text-xl font-semibold text-gray-900 dark:text-white">
                        filters
                    </h3>
                </x-modal-header>
                <x-modal-body>
                    <div class="py-2 flex gap-3 items-center print:hidden ">
                        <div class="flex-1">
                            <h1>Pilihan</h1>
                            <select name="pilihan" id="" class="p-2 border w-full">
                                <option value="1" {{ $request->pilihan == '1' ? 'selected' : '' }}>Harian</option>
                                <option value="2" {{ $request->pilihan == '2' ? 'selected' : '' }}>Mingguan
                                </option>
                                <option value="3" {{ $request->pilihan == '3' ? 'selected' : '' }}>Bulanan
                                </option>
                                <option value="" {{ $request->pilihan == '' ? 'selected' : '' }}>Semua</option>
                            </select>
                        </div>
                        <div class="flex-1">
                            <h1>Hari</h1>
                            <input type="number" name="hari" id="" min="0"
                                value="{{ $request->hari ?? 0 }}" class="p-2 border w-full">
                        </div>


                        <div class="flex-1">
                            <h1>Bulan</h1>
                            <select name="bulan" id="" class="p-2 border w-full">
                                <option value="1" {{ $request->bulan == '1' ? 'selected' : '' }}>January</option>
                                <option value="2" {{ $request->bulan == '2' ? 'selected' : '' }}>February</option>
                                <option value="3" {{ $request->bulan == '3' ? 'selected' : '' }}>Maret</option>
                                <option value="4" {{ $request->bulan == '4' ? 'selected' : '' }}>April</option>
                                <option value="5" {{ $request->bulan == '5' ? 'selected' : '' }}>Mei</option>
                                <option value="6" {{ $request->bulan == '6' ? 'selected' : '' }}>Juni</option>
                                <option value="7" {{ $request->bulan == '7' ? 'selected' : '' }}>Juli</option>
                                <option value="8" {{ $request->bulan == '8' ? 'selected' : '' }}>Agustus</option>
                                <option value="9" {{ $request->bulan == '9' ? 'selected' : '' }}>September
                                </option>
                                <option value="10" {{ $request->bulan == '10' ? 'selected' : '' }}>Oktober</option>
                                <option value="11" {{ $request->bulan == '11' ? 'selected' : '' }}>November
                                </option>
                                <option value="12" {{ $request->bulan == '12' ? 'selected' : '' }}>Desember
                                </option>
                            </select>
                        </div>
                        <div class="flex-1">
                            <h1>Tahun</h1>
                            <select name="tahun" id="" class="p-2 border w-full">
                                <option value="2020" {{ $request->tahun == '2020' ? 'selected' : '' }}>2020</option>
                                <option value="2021" {{ $request->tahun == '2021' ? 'selected' : '' }}>2021</option>
                                <option value="2022" {{ $request->tahun == '2022' ? 'selected' : '' }}>2022</option>
                                <option value="2023" {{ $request->tahun == '2023' ? 'selected' : '' }}>2023</option>
                                <option value="2024" {{ $request->tahun == '2024' ? 'selected' : '' }}>2024</option>
                            </select>
                        </div>

                    </div>
                    <div class="py-2 flex gap-3 items-center print:hidden ">
                        <div class="flex-1">
                            <h1>Status</h1>
                            <select name="status" id="" class="p-2 border w-full">
                                <option value="submited" {{ $request->pilihan == 'submited' ? 'selected' : '' }}>
                                    Submited
                                </option>
                                <option value="selesai" {{ $request->pilihan == 'selesai' ? 'selected' : '' }}>Selesai
                                </option>
                                <option value="review" {{ $request->pilihan == 'review' ? 'selected' : '' }}>Review
                                </option>
                                <option value="revisi" {{ $request->pilihan == 'revisi' ? 'selected' : '' }}>Revisi
                                </option>
                                <option value="" {{ $request->pilihan == '' ? 'selected' : '' }}>Semua</option>
                            </select>
                        </div>

                    </div>
                </x-modal-body>
                <x-modal-footer>
                    <div class="flex gap-3 ">
                        <button class="px-4 py-2 border bg-slate-600 text-white">Submit</button>
                    </div>
                </x-modal-footer>
            </form>
        </x-modal>

    </section>



</x-admin-app>
