<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="{{ asset('public/build/assets/app-2a961c6b.css')}}"> -->
    <!-- <script src="{{asset('public/assets/js/script.js')}}" defer></script> -->
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="h-full">

    <div class="wrapper font-oswald text-base min-h-full flex flex-col text-white font-sans">
        @include('components.header')
        <main class="flex-auto">
            @yield('content')
        </main>
        
        @include('components.footer')
    </div>
</body>
</html>
