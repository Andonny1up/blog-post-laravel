<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/elefante.png')}}" alt="logo" class="h-12">
                </a>
                <form action="{{route('home')}}" method="GET" class="flex-grow">
                    <input class="border border-gray-200 rounded py-2 px-4 w-1/2" type="text" name="search" placeholder="Buscar" value="{{request('search')}}">
                </form>
            </div>
            @auth
            <a href="{{route('dashboard')}}">Dashboard</a>
            @else
            <a href="{{route('login')}}">Login</a>
            @endauth
        </header>

        <div class="opacity-60 h-px mb-8" style="
            background: linear-gradient(to right, 
            rgba(200, 200, 200, 0) 0%,    /* Rojo */
            rgba(200, 200, 200, 1) 30%,    /* Verde */
            rgba(200, 200, 200, 1) 70%,    /* Azul */
            rgba(200, 200, 200, 0) 100%   /* Amarillo */
            );
        "></div>
    </div>
    
    <main class="container px-4 mx-auto">
        @yield('content')
    </main>
    <p class="py-16">
        <img src="{{asset('images/elefante.png')}}" alt="logo" class="h-12 mx-auto">
    </p>
</body>
</html>