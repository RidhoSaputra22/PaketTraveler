<x-admin-app>
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-black rounded-lg text-white p-6 shadow-lg">
            <h2 class="text-2xl font-semibold">Produk Dipesan</h2>
            <p class="text-3xl mt-2">{{ number_format( $datas['produk_dipesan']) }}</p>
            <p class="mt-4 text-sm opacity-75">Diperbarui terakhir kali hari ini</p>
        </div>
        <div class="bg-blue-700 rounded-lg text-white p-6 shadow-lg">
            <h2 class="text-2xl font-semibold">Jumlah Produk</h2>
            <p class="text-3xl mt-2">{{ number_format( $datas['jumlah_produk']) }}</p>
            <p class="mt-4 text-sm opacity-75">Diperbarui terakhir kali hari ini</p>
        </div>
        <div class="bg-red-700 rounded-lg text-white p-6 shadow-lg">
            <h2 class="text-2xl font-semibold">Jumlah Pelanggan</h2>
            <p class="text-3xl mt-2">{{ number_format( $datas['jumlah_pasien']) }}</p>
            <p class="mt-4 text-sm opacity-75">Diperbarui terakhir kali hari ini</p>
        </div>
    </div>

    <div class="py-5">
        <h1 class="text-3xl py-3 font-semibold ">Jadwal Treatment Berlangsung</h1>
        <div class="flex item-center w-full ">
            <table class="w-full ">
                <thead>
                    <tr>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Pasien</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Dokter</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Treatment</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Tanggal</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Status</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($datas['jadwal'] as $jadwalTreatment)
                    <tr class="hover:bg-slate-100">
                        <td class="text-sm text-center border">{{ $jadwalTreatment->pasien['nama'] }}</td>
                        <td class="text-sm text-center border">{{ $jadwalTreatment->dokter['nama'] }}</td>
                        <td class="text-sm text-center border">{{ $jadwalTreatment->treatment['nama'] }}</td>
                        <td class="text-sm text-center border">{{ $jadwalTreatment['tanggal'] }}</td>
                        <td class="text-sm text-center border">{{ $jadwalTreatment['status'] }}</td>
                        <td class="text-sm flex gap-3 p-3 border">
                            <form action="{{ route('jadwal.update', $jadwalTreatment) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="bg-yellow-500 px-3 py-2">Konfirmasi</button>
                            </form>
                            <form action="{{ route('jadwal.destroy', $jadwalTreatment) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 px-3 py-2">Hapus</button>
                            </form>
                        </td>
                        @empty
                        <td>Tak Ada Data</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
  

</x-admin-app>