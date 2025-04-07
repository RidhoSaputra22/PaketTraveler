<x-app>
    <section class=" min-h-screen">
        <section id="navbar" class="h-14 flex items-center px-3  bg-slate-500 text-white">
            <div class="grow text-2xl italic">Klinik Kesehatan</div>
            <div class="text-xl font-light"><a href="/logout">Logout</a></div>
        </section>

        <section id="main" class="flex ">
            <section id="sidebar " class="min-h-screen bg-slate-900 w-64 text-white border-r-8 border-slate-850">
                <div class="my-5 ml-5 mt-14 flex flex-col">
                    <a class="p-3 hover:bg-white hover:text-black border-b-2 {{ (request()->is('admin/dashboard*')) ? "bg-white text-black":"" }}" href="/admin/dashboard">Dashboard</a>
                    <a class="p-3 hover:bg-white hover:text-black border-b-2 {{ (request()->is('admin/dokter*')) ? "bg-white text-black":"" }}" href="/admin/dokter">Dokter</a>
                    <a class="p-3 hover:bg-white hover:text-black border-b-2 {{ (request()->is('admin/pasien*')) ? "bg-white text-black":"" }}" href="/admin/pasien">Pasien</a>
                    <a class="p-3 hover:bg-white hover:text-black border-b-2 {{ (request()->is('admin/treatment*')) ? "bg-white text-black":"" }}" href="/admin/treatment">Treatment</a>
                    <a class="p-3 hover:bg-white hover:text-black border-b-2 {{ (request()->is('admin/jadwal*')) ? "bg-white text-black":"" }}" href="/admin/jadwal">Jadwal</a>
                </div>
            </section>

            <section id="content" class="m-5 h-auto w-full">
                {{ $slot }}
            </section>

        </section>
    </section>
</x-app>