<x-admin-app>
    <div class="flex">
        <form action="{{ route('produk.update', $produk) }}" method="POST" class="py-5 w-full"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex gap-5">
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase ">Nama Produk</h1>
                    <input name="nama" value="{{$produk['nama']}}" class="rounded w-full border p-2">
                    @error('nama')
                    <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase">Harga</h1>
                    <input type="number" name="harga" value="{{$produk['harga']}}" class="rounded w-full border p-2">
                    @error('harga')
                    <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase ">Deskripsi</h1>
                <textarea name="deskripsi" class="rounded w-full border p-2" rows="5">{{$produk['deskripsi']}}</textarea>
                @error('deskripsi')
                <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div>

                <div>
                    <div class="w-full h-auto mb-2">
                        <h1 class=" text-sm uppercase">stok</h1>
                        <input type="number" name="stok" value="{{$produk['stok']}}" class="rounded w-full border p-2">
                        @error('stok')
                        <div class="text-red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="w-full h-auto mb-2">
                        <h1 class=" text-sm uppercase">foto</h1>
                        <input type="file" name="foto" class="rounded w-full border p-2">
                        @error('foto')
                        <div class="text-red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="w-32 h-32 border  bg-cover"
                        style="background-image: url('{{ URL::asset($produk['foto']) }}')">

                    </div>

                    <button type="submit" class="bg-slate-500 text-white px-3 py-2 rounded my-3">
                        Submit
                    </button>
                </div>

        </form>


    </div>
</x-admin-app>