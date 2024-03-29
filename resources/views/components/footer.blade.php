<footer class="border-t border-white border-opacity-25 bg-red-700">
    <div class="container py-5 flex flex-wrap items-center justify-between gap-7 ">
        <a class="text-2xl text-white">татар чәйе</a>
        <ul class="flex items-center gap-14 text-base">
            <li><a href="{{ route('index.index') }}" class="h-5 hover:border-b border-white pb-2 transition ease-in-out delay-300">Төп бит</a></li>
            <li><a href="{{ route('index.catalog') }}" class="h-5 hover:border-b border-white pb-2 transition">Каталог</a></li>
            <li><a href="" class="h-5 hover:border-b border-white pb-2 transition">Безнең турында</a></li>
        </ul>
        <div class="flex flex-wrap items-center gap-7">
            @auth 
                <!-- <form action="{{ route('auth.logout') }}" method="post">
                    @csrf
                    <button type="submit" class="button">Выйти</button>
                </form> -->
            @endauth
            @guest
                <a href="{{route('auth.loginPage')}}" class="button_white">Керү</a>
                <a href="{{route('auth.registerPage')}}" class="button-fill">Теркәү</a>
            @endguest
        </div>
    </div>
</footer>