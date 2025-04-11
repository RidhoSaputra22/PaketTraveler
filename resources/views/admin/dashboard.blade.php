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
        <div>
            <livewire:users-table />
        </div>


    </section>




</x-admin-app>
