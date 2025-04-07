<x-admin-app>
    <div class="flex">
        <form action="{{ route('dokter.update', $dokter) }}" method="POST" class="py-5 w-full"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex gap-5">
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase ">Nama</h1>
                    <input name="nama" value="{{$dokter['nama']}}" class="rounded w-full border p-2">
                    @error('nama')
                    <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase">alamat</h1>
                    <input type="text" name="alamat" value="{{$dokter['alamat']}}"
                        class="rounded w-full border p-2">
                    @error('alamat')
                    <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase ">hp</h1>
                <input name="hp" value="{{$dokter['hp']}}" class="rounded w-full border p-2">
                @error('hp')
                <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase ">Spesialis</h1>
                <select name="spesialis" id="" class="w-full p-2 border">
                    @foreach ($treatment as $data )
                    <option value="{{ $data['id_treatment'] }}" {{$data['id_treatment'] == $dokter->treatment['id_treatment'] ? 'selected':''}}>{{ $data['nama'] }}</option>
                    @endforeach
                </select>
                @error('spesialis')
                <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div>
            </div>
            <div>
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase">email</h1>
                    <input type="text" name="email" value="{{$dokter['email']}}" class="rounded w-full border p-2">
                    @error('email')
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
                    style="background-image: url('{{ URL::asset($dokter['foto']) }}')">

                </div>

                <button type="submit" class="bg-slate-500 text-white px-3 py-2 rounded my-3">
                    Submit
                </button>
            </div>

        </form>


    </div>
</x-admin-app>