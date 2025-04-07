<x-admin-app>
    <section class="w-full">

        @if (session('sukses'))
            <div class="h-14 w-full bg-green-400 my-2 p-4 "> 
                {{session('sukses')}}
            </div>
        @endif

        <div class="pb-3">
            <a href="{{ route('produk.create') }}" class="px-3 py-1 border rounded shadow-xl">Tambah Data</a>
        </div>


        <div class="flex item-center w-full">
            <table class="w-full ">
                <thead>
                    <tr>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Nama Produk</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Deskripsi Produk</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Harga Produk</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Stok Produk</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Foto Produk</th>
                        <th class="px-3 py-1 text-sm w-auto font-semibold bg-slate-400">Aksi</th>


                    </tr>
                </thead>
                <tbody>
                    @forelse($datas as $data)
                    <tr class="hover:bg-slate-100">
                        <td class="text-sm text-center border">{{ $data['nama'] }}</td>
                        <td class="text-sm text-left border">{{ Str::limit($data['deskripsi']) }}</td>
                        <td class="text-sm text-center border">Rp. {{ number_format($data['harga']) }}</td>
                        <td class="text-sm text-center border">{{ $data['stok'] }}</td>
                        <td class="text-sm text-center border ">
                            <a href="{{ URL::asset($data['foto']) }}" class="hover:shadow-lg">
                                <img src="{{ URL::asset($data['foto']) }}" alt="" srcset="" class="w-14 h-14">
                            </a>
                        </td>


                        <td class="text-sm flex gap-3 p-3 border">
                            <a href="{{ route('produk.show', $data) }}" class="bg-yellow-500 px-3 py-2">Lihat Data</a>
                            <form action="{{ route('produk.destroy', $data) }}" method="POST">
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