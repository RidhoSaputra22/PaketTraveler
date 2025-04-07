<x-admin-app>
    <form action="{{ route('produk.store') }}" method="POST" class="py-5" enctype="multipart/form-data">
        @csrf
        <div class="flex gap-5">
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase ">Nama Produk</h1>
                <input  name="nama" value="Lorem" class="rounded w-full border p-2">
                @error('nama')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase">Harga</h1>
                <input type="number" name="harga" value="15000" class="rounded w-full border p-2" >
                @error('harga')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            
        </div>
            <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase ">Deskripsi</h1>
                    <textarea  name="deskripsi" class="rounded w-full border p-2" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus fuga mollitia earum ipsum incidunt ducimus cupiditate dolorem totam voluptate id facilis expedita, recusandae inventore reiciendis quia quaerat rem omnis eius?
                    </textarea>
                    @error('deskripsi')
                    <div class="text-red">{{ $message }}</div>
                    @enderror
            </div>
        <div>
            
        <div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase">stok</h1>
                <input type="number" name="stok" value="10" class="rounded w-full border p-2">
                @error('stok')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase">foto</h1>
                <input type="file"  name="foto" class="rounded w-full border p-2">
                @error('foto')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div>
            <button type="submit" class="bg-slate-500 text-white px-3 py-2 rounded my-3">
                Submit
            </button>
        </div>

    </form>

</x-admin-app>
