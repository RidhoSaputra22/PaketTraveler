<x-admin-app>
    <div class="flex">
        <form action="{{ route('anggota.update', $pegawai['id_user']) }}" method="POST" class="py-5 w-full"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex gap-5">
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase ">Nama</h1>
                    <input name="nama" value="{{ $pegawai['nama'] }}" class="rounded w-full border p-2">
                    @error('nama')
                        <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase">alamat</h1>
                    <input type="text" name="alamat" value="{{ $pegawai['alamat'] }}"
                        class="rounded w-full border p-2">
                    @error('alamat')
                        <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase ">hp</h1>
                <input name="hp" value="{{ $pegawai['hp'] }}" class="rounded w-full border p-2">
                @error('hp')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div>
            </div>
            <div>
                <div class="w-full h-auto mb-2">
                    <h1 class=" text-sm uppercase">email</h1>
                    <input type="text" name="email" value="{{ $pegawai['email'] }}"
                        class="rounded w-full border p-2">
                    @error('email')
                        <div class="text-red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <h1 class=" text-sm uppercase">Departement</h1>

                <select name="departement" id="" class="w-full">
                    @foreach ($departement as $d)
                        <option value="{{ $d['id_departement'] }}"
                            {{ $d['id_departement'] == $pegawai['id_departement'] ? 'selected' : '' }}>
                            {{ $d['departement'] }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <h1 class=" text-sm uppercase">Role</h1>

                <select name="role" id="" class="w-full">
                    <option value="pegawai">Pegawai</option>
                    <option value="manajer">Manajer</option>
                </select>
                @error('role')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="border px-3 py-2 rounded my-3">
                    Submit
                </button>
            </div>


        </form>


    </div>
</x-admin-app>
