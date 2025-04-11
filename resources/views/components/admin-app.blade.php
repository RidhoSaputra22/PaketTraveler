<x-app>
    <section class=" min-h-screen flex gap-4">
        <section id="main" class="flex ">
            <section id="sidebar " class="rounded-r-sm min-h-screen bg-slate-950 w-64 text-white border-r-8 border-slate-850 ">
                <div class="text-2xl pt-4 pl-4">Pesona Travel</div>
                <div class="my-5 ml-5 mt-14 flex flex-col gap-2">
                    <a class="  " href="/admin/dashboard">
                        <div class="{{ (request()->is('admin/dasd*')) ? $active :"hover:bg-slate-800 hover:rounded-l-sm " }} p-3  ">Dashboard</div>
                    </a>
                    <a class=" " href="/admin/dokter">
                        <div class="{{ (request()->is('admin/f*')) ? $active :"hover:bg-slate-800 hover:rounded-l-sm" }} p-3  ">Test A</div>
                    </a>
                    <a class=" " href="/admin/dokter">
                        <div class="{{ (request()->is('admin/dashboard*')) ? $active :"hover:font-semibold" }} p-3  ">Test B</div>
                    </a>
                </div>
            </section>
        </section>
        <section class="w-full mr-3 ">
            <section id="navbar" class="rounded-b-sm h-14 flex items-center px-8  bg-slate-950 border-b-1 border-white shadow-xl text-white">
                <div class="grow text-2xl"></div>
                <div class="text-lg font-light"><a href="/logout">Logout</a></div>
            </section>
            <section id="content" class="pt-5 h-auto w-full ">
                {{ $slot }}
            </section>
        </section>
    </section>
</x-app>
