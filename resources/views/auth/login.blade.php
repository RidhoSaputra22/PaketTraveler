<x-app>
    @if (session('error'))
    <div class="p-5 sticky top-0 bg-red-200">
        {{session('error')}}
    </div>
    @endif
    @if (session('sukses'))
    <div class="p-5 sticky top-0 bg-green-200">
        {{session('sukses')}}
    </div>
    @endif

    <section class="h-screen bg-cover bg-blue-400"
        style="background-image: url('{{ URL::asset('image/banner-1.jpg') }}')">
        <div class="h-screen flex flex-col justify-center items-center ">
            <div class="w-[500px] h-[500px] rounded-xl flex shadow-xl">

                <div class="p-10 w-full grow flex flex-col bg-white">
                    <div class="text-2xl font-semibold flex justify-center">Login</div>
                    <form action="{{ route('user.login') }}" method="POST" class="flex flex-col gap-5 pt-9">
                        @csrf
                        <div>
                            <h1>Email</h1>
                            <input type="text" name="email" class="mt-1 border rounded border-black p-2 w-full">
                            @error('email')
                            <div class="text-red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <h1>Password</h1>
                            <input type="password" name="password" class="mt-1 border rounded border-black p-2 w-full">
                            @error('password')
                            <div class="text-red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <a href="/regist" class="underline">Belum pernah masuk?</a>
                        </div>

                        <div>
                            <button type="submit"
                                class="text-white w-full bg-cappucino p-2 rounded px-4 border bg-blue-400">Login</b>

                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
</x-app>