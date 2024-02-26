<header class="border-b border-white border-opacity-0 bg-green-800" >
    <div class="container py-5 flex flex-wrap items-center justify-between gap-7">
        <a class="text-2xl text-white">татар чәйе</a>
        <ul class="flex items-center gap-14 text-base">
            <li><a href="{{ route('index.index') }}" class="h-5 hover:border-b border-white pb-2 transition ease-in-out delay-300">Төп бит</a></li>
            <li><a href="{{ route('index.catalog') }}" class="h-5 hover:border-b border-white pb-2 transition">Каталог</a></li>
            <li><a href="" class="h-5 hover:border-b border-white pb-2 transition">Безнең турында</a></li>
            @auth
            @if(auth()->user()->role_id == 2)
                <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('index.admin') }}">Админ панель</a></li>
            @endif
        @endauth
        </ul>
        <div class="flex flex-wrap items-center gap-7">
            @auth 
            <form action="{{ route('auth.logout') }}" method="post">
                @csrf
                <button type="submit" class="button_white">Выйти</button>
            </form>
            @endauth
            @guest
                <a href="{{route('auth.loginPage')}}" class="button_white">Керү</a>
                <a href="{{route('auth.registerPage')}}" class="button-fill">Теркәү</a>
            @endguest
        </div>
    </div>
</header>