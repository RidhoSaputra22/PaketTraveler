<x-app>
    <section class=" min-h-screen">
        <section id="navbar" class="h-14 flex items-center px-3  bg-white-900 shadow-xl text-black">
            <div class="grow text-2xl">Pesona Travel</div>
            <div class="text-xl font-light"><a href="/logout">Logout</a></div>
        </section>
        <section id="main" class="flex ">
            <section id="sidebar " class="min-h-screen bg-slate-900 w-64 text-white border-r-8 border-slate-850">
                <div class="my-5 ml-5 mt-14 flex flex-col">
                    <a class=" hover:bg-white hover:border-b-2 " href="/admin/dashboard">
                        <div class="{{ (request()->is('admin/dashboard*')) ? "bg-white text-black":"" }} p-3 hover:text-black hover:bg-white">Dashboard</div>
                    </a>
                    <a class="  " href="/admin/dokter">
                        <div class="{{ (request()->is('admin/dokter*')) ? "bg-white text-black":"" }} p-3 hover:text-black hover:bg-white">Dokter</div>
                    </a>
                    <a class="hover:bg-white hover:border-b-2 " href="/admin/pasien">
                        <div class="{{ (request()->is('admin/pasien*')) ? "bg-white text-black":"" }} p-3 hover:text-black hover:bg-white">Pasien</div>
                    </a>
                    <a class=" hover:bg-white hover:border-b-2 " href="/admin/treatment">
                        <div class="{{ (request()->is('admin/treatment*')) ? "bg-white text-black":"" }} p-3 hover:text-black hover:bg-white">Treatment</div>
                    </a>
                    <a class=" hover:bg-white hover:border-b-2 " href="/admin/jadwal">
                        <div class="{{ (request()->is('admin/jadwal*')) ? "bg-white text-black":"" }} p-3 hover:text-black hover:bg-white">Jadwal</div>
                    </a>
                </div>
            </section>
            <section id="content" class="m-5 h-auto w-full">
                {{ $slot }}
            </section>
        </section>
    </section>
</x-app>
