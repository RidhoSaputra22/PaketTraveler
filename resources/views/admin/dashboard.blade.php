<x-admin-app>
    <section class="w-full">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-5" id="summary">
            <div class="bg-slate-950 rounded-sm text-white p-6 shadow-lg">
                <div class="flex gap-6">
                    <span class="text-6xl">12</span>
                    <div>
                        <span class="text-2xl font-semibold">Total Pegawai</span>
                        {{-- <p class="text-2xl mt-2">12</p> --}}
                        <p class="mt-2 text-sm opacity-75">Diperbarui terakhir kali hari ini</p>
                    </div>
                </div>
            </div>
        </div>

        <table id="pegawaiTable" class="w-full text-white">
            <thead class="bg-slate-950 " style="border-radius: 50px">
                <tr class="">
                    <th class="font-semibold p-1">No.</th>
                    <th class="font-semibold p-1">Nama</th>
                    <th class="font-semibold p-1">Email</th>
                    <th class="font-semibold p-1">Department</th>
                    <th class="font-semibold p-1">Role</th>
                    <th class="font-semibold p-1">Actions u</th>
                </tr>
            </thead>
            <tbody class="bg-slate-800 text-center">
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>o7o8M@example.com</td>
                    <td>IT</td>
                    <td>Admin</td>
                    <td>adsd</td>
                </tr>
                {{-- @foreach ($datas as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['email'] }}</td>
                        <td>{{ $data->departement['departement'] }}</td>
                        <td>{{ $data['role'] }}</td>

                        <td>
                            <div class="flex gap-3">
                                <div class="flex gap-3">
                                    <a href="{{ route('anggota.show', $data['id_user']) }}" class="px-5 py-2 bg-blue-500 text-white">Lihat Data</a>
                                 </div>

                            </div>

                        </td>
                    </tr>

                @endforeach --}}
            </tbody>
        </table>




    </section>




</x-admin-app>
