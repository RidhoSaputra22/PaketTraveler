<x-admin-app>
    <section class="w-full">

        @if (session('sukses'))
            <div class="h-14 w-full bg-green-400 my-2 p-4 "> 
                {{session('sukses')}}
            </div>
        @endif

        <div class="flex item-center w-full">
            <table class="w-full ">
                <thead>
                    <tr>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Pasien</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Produk</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Kode Nota</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Tanggal</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Status</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Aksi</th>   
                    </tr>
                </thead>
                <tbody>
                    @forelse($datas as $data)
                    <tr class="hover:bg-slate-100">
                        <td class="text-sm text-center border">{{ $data->histori->pasien['nama'] }}</td>
                        <td class="text-sm text-center border">{{ $data->produk['nama'] }}</td>
                        <td class="text-sm text-center border">{{ $data->histori['id_histori'] }}</td>
                        <td class="text-sm text-center border">{{ $data->histori['tanggal'] }}</td>
                        <td class="text-sm text-center border">{{ $data->histori['status'] }}</td>
                       
                        <td class="text-sm flex gap-3 p-3 border">
                            <form action="{{ route('keranjang.update', $data) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="bg-yellow-500 px-3 py-2">Konfirmasi</button>
                            </form>
                            <form action="{{ route('keranjang.destroy', $data) }}" method="POST">
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

    </section>
</x-admin-app>