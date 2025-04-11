<x-admin-app>
    <form action="{{ route('anggota.store') }}" method="POST" class="py-5" enctype="multipart/form-data">
        @csrf
        <div class="flex gap-5">
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase ">Nama</h1>
                <input name="nama" value="" class="rounded w-full border p-2">
                @error('nama')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full h-auto mb-2">
                <h1 class=" text-sm uppercase">alamat</h1>
                <input type="text" name="alamat" value="" class="rounded w-full border p-2">
                @error('alamat')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="w-full h-auto mb-2">
            <h1 class=" text-sm uppercase ">hp</h1>
            <input name="hp" value="" class="rounded w-full border p-2">
            @error('hp')
                <div class="text-red">{{ $message }}</div>
            @enderror
        </div>
        <div>
        </div>

        <div class="w-full h-auto mb-2">
            <h1 class=" text-sm uppercase">email</h1>
            <input type="text" name="email" value="" class="rounded w-full border p-2">
            @error('email')
                <div class="text-red">{{ $message }}</div>
            @enderror
        </div>
        <div class="w-full h-auto mb-2">
            <h1 class=" text-sm uppercase">password</h1>
            <input type="text" name="password" value="" class="rounded w-full border p-2">
            @error('password')
                <div class="text-red">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="flex gap-3">
            <div>
                <h1 class=" text-sm uppercase">Departement</h1>
                <select name="departement" id="">
                    @foreach ($departement as $d)
                        <option value="{{ $d['id_departement'] }}">{{ $d['departement'] }}</option>
                    @endforeach
                </select>
                @error('departement')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <h1 class=" text-sm uppercase">Role</h1>

                <select name="role" id="">
                    <option value="pegawai">Pegawai</option>
                    <option value="manajer">Manajer</option>
                </select>
                @error('role')
                    <div class="text-red">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div>
            <button type="submit" class="border px-3 py-2 rounded my-3">
                Submit
            </button>
        </div>

    </form>

</x-admin-app>
