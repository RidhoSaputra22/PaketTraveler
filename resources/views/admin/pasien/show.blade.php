<x-admin-app>
    <div class="flex">
        <form action="{{ route('pasien.update', $pasien) }}" method="POST" class="py-5 w-full"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex gap-5">
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase ">Nama</h1>
                    <input name="nama" value="{{$pasien['nama']}}" class="rounded w-full border p-2">
                    @error('nama')
                    <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase">alamat</h1>
                    <input type="text" name="alamat" value="{{$pasien['alamat']}}"
                        class="rounded w-full border p-2">
                    @error('alamat')
                    <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase ">hp</h1>
                <input name="hp" value="{{$pasien['hp']}}" class="rounded w-full border p-2">
                @error('hp')
                <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div>
            </div>
            <div>
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase">email</h1>
                    <input type="text" name="email" value="{{$pasien['email']}}" class="rounded w-full border p-2">
                    @error('email')
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


    </div>
</x-admin-app>